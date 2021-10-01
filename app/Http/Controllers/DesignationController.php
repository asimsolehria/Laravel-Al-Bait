<?php

namespace App\Http\Controllers;
use App\hr\Designation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class DesignationController extends Controller
{

    public function index()
    {

        $Designations= Designation::all();
       return view('hr.designation.index',['Designations'=>$Designations]);
    }

    public function create()
    {
        return view('hr.designation.create');
    }

    public function store(Request $request)
    {
        $rules=[
            'DesignationTitle'=>'required'
        ];

        $this->validate($request, $rules);
        $designation_data = [
            'DesignationTitle' => $request->DesignationTitle
        ];
        DB::table('setup_hr_designations')->insert($designation_data);
        return redirect()->route('hr.designation.index')->with('success', 'Designation added successfully.');
    }

    public function edit($id)
    {
        $queryData = DB::table('setup_hr_designations')
        ->where('DesignationID', '=', $id)
        ->first();

        return view('hr.designation.edit',  ['queryData'=>$queryData]);
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'DesignationTitle'=>'required'

        ];
        $this->validate($request, $rules);
        $designation_data = [
            'DesignationTitle' => $request->DesignationTitle
        ];
        DB::table('setup_hr_designations')->where('DesignationID', $id)->update($designation_data);
        return redirect()->route('hr.designation.index')->with('success', 'Designation updated successfully.');
    }


    public function destroy($id)
    {
        DB::table('setup_hr_designations')->where('DesignationID', $id)->delete();
        return redirect()->route('hr.designation.index')
                    ->with('success','Designation deleted successfully');
    }


}
