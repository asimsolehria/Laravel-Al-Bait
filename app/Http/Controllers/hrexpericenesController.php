<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class hrexpericenesController extends Controller
{
    public function create($id)
    {
        // dd($request->all());
        // $employes = Employee::find($EmployeeID);
        $jobtypes = DB::table('setup_hr_job_types')->select('JobTypeID', 'JobType' )->get();
        return view('hr.experiences.create' , ['jobtypes' => $jobtypes , 'EmployeeID' => $id ]);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $rules=[
            'EmployeeID'=>'required',
            // 'JobTypeID'=>'required',
            'FromDate'=>'required',
            'ToDate'=>'required',
            'ReasonToLeave'=>'required',
            'BPS'=>'required',
            'JobTitle'=>'required|min:3|max:300',
            'Organization'=>'required|min:3|max:300',
            'Attachment'=>'mimes:jpeg,jpg,png,gif|required|max:10000',
        ];

        $this->validate($request, $rules);
        $imagepath = '';

        if(!is_null($request->Attachment)) {

        $imagepath=$request->Attachment->store('toPath', ['disk' => 'my_files']);

        }
        $experiences_data = [
            'EmployeeID' => $request->EmployeeID,
            'JobTypeID' => $request->JobTypeID,
            'FromDate' => $request->FromDate,
            'ToDate' => $request->ToDate,
            'ReasonToLeave' => $request->ReasonToLeave,
            'BPS' => $request->BPS,
            'JobTitle' => $request->JobTitle,
            'Organization' => $request->Organization,
            'Attachment' => $imagepath,
        ];

        // dd($education_data);

        DB::table('hr_employee_experiences')->insert($experiences_data);
        return redirect()->route('hr.employes.show',$request->EmployeeID)->with('success', 'Experience added successfully.');
    }

    public function destroy($id)
    {
        $data=explode('-',$id);
        $empid=$data[1];
        $expid=$data[0];


        DB::table('hr_employee_experiences')->where('ExperienceID', $expid)->delete();
        return redirect()->route('hr.employes.show',$empid)
                    ->with('success','Experience deleted successfully');
    }

}
