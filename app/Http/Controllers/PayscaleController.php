<?php

namespace App\Http\Controllers;
use App\hr\PayScale;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class PayscaleController extends Controller
{

    public function index()
    {

        $payscales= PayScale::all();
       return view('hr.payscale.index',['payscales'=>$payscales]);
    }

    public function create()
    {
        return view('hr.payscale.create');
    }

    public function store(Request $request)
    {
        $rules=[
            'PayScaleTitle'=>'required'
        ];

        $this->validate($request, $rules);
        $payscale_data = [
            'PayScaleTitle' => $request->PayScaleTitle
        ];
        DB::table('setup_hr_payscale')->insert($payscale_data);
        return redirect()->route('hr.payscale.index')->with('success', 'payscale added successfully.');
    }

    public function edit($id)
    {
        $queryData = DB::table('setup_hr_payscale')
        ->where('PayScaleID', '=', $id)
        ->first();

        return view('hr.payscale.edit',  ['queryData'=>$queryData]);
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'PayScaleTitle'=>'required'

        ];
        $this->validate($request, $rules);
        $payscale_data = [
            'PayScaleTitle' => $request->PayScaleTitle
        ];
        DB::table('setup_hr_payscale')->where('PayScaleID', $id)->update($payscale_data);
        return redirect()->route('hr.payscale.index')->with('success', 'payscale updated successfully.');
    }


    public function destroy($id)
    {
        DB::table('setup_hr_payscale')->where('PayScaleID', $id)->delete();
        return redirect()->route('hr.payscale.index')
                    ->with('success','payscale deleted successfully');
    }


}
