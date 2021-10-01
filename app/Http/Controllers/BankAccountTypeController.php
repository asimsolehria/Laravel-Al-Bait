<?php

namespace App\Http\Controllers;
use App\hr\BankAccountType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class BankAccountTypeController extends Controller
{

    public function index()
    {

        $accounttypes = BankAccountType::all();
        return view('hr.bankaccounttype.index',['accounttypes'=>$accounttypes]);
    }

    public function create()
    {
        return view('hr.bankaccounttype.create');
    }

    public function store(Request $request)
    {
        $rules=[
            'Title'=>'required'
        ];

        $this->validate($request, $rules);
        $accounttype_data = [
            'Title' => $request->Title
        ];
        DB::table('hr_setup_bankaccountype')->insert($accounttype_data);
        return redirect()->route('hr.bankaccounttype.index')->with('success', 'bankaccountype added successfully.');
    }

    public function edit($id)
    {
        $queryData = DB::table('hr_setup_bankaccountype')
        ->where('AccountTypeID', '=', $id)
        ->first();

        return view('hr.bankaccounttype.edit',  ['queryData'=>$queryData]);
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'Title'=>'required'

        ];
        $this->validate($request, $rules);
        $accounttype_data = [
            'Title' => $request->Title
        ];
        DB::table('hr_setup_bankaccountype')->where('AccountTypeID', $id)->update($accounttype_data);
        return redirect()->route('hr.bankaccounttype.index')->with('success', 'bankaccountype updated successfully.');
    }


    public function destroy($id)
    {
        DB::table('hr_setup_bankaccountype')->where('AccountTypeID', $id)->delete();
        return redirect()->route('hr.bankaccounttype.index')
                    ->with('success','bankaccountype deleted successfully');
    }

}
