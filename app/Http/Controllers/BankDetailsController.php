<?php


namespace App\Http\Controllers;
use App\hr\BankDetails;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class BankDetailsController extends Controller
{
    public function create($id){

        $bankaccounts = DB::table('hr_setup_bankaccountype')->select('AccountTypeID', 'Title' )->get();
        $statuses = DB::table('setup_hr_status')->select('StatusID', 'Status' )->get();
        return view('hr.bankdetails.create' , ['EmployeeID' => $id ,
                                               'bankaccounts' => $bankaccounts ,
                                               'statuses' => $statuses ]);
    }


    public function store(Request $request)
    {
        $rules=[
            'EmployeeID'=>'required',
            'AccountNo'=>'required',
            'bankBranch'=>'required',
            'OpeningYear'=>'required',
            'MainSource'=>'required',
            'balanceon30june'=>'required',
            'year'=>'required',
            'AccountTypeID'=>'required',
            'StatusID'=>'required',

        ];

        $this->validate($request, $rules);
        $bankdetail_data = [
            'EmployeeID' => $request->EmployeeID,
            'AccountNo' => $request->AccountNo,
            'bankBranch' => $request->bankBranch,
            'OpeningYear' => $request->OpeningYear,
            'MainSource' => $request->MainSource,
            'balanceon30june' => $request->balanceon30june,
            'year' => $request->year,
            'AccountTypeID' => $request->AccountTypeID,
            'StatusID' => $request->StatusID
        ];

        // dd($bankdetail_data);

        DB::table('hr_employee_bankdetails')->insert($bankdetail_data);
        return redirect()->route('hr.employes.show',$request->EmployeeID)->with('success', 'bankdetail added successfully.');
    }

    public function destroy($id)
    {
        $data=explode('-',$id);
        $empid=$data[1];
        $BankdetID=$data[0];


        DB::table('hr_employee_bankdetails')->where('BankdetID', $BankdetID)->delete();
        return redirect()->route('hr.employes.show',$empid)
                    ->with('success','bankdetails deleted successfully');
    }
}
