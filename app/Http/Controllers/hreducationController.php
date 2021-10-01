<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\HR\EmployeeEducation;
use Illuminate\Support\Facades\DB;
class hreducationController extends Controller
{

        public function create($id)
    {
        // dd($request->all());
        // $employes = Employee::find($EmployeeID);
        $educationlevels = DB::table('setup_hr_education_levels')->select('EducationLevelID', 'EducationLevel' )->get();
        return view('hr.employeseducation.create' , ['educationlevels' => $educationlevels , 'EmployeeID' => $id ]);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $rules=[
            'EmployeeID'=>'required',
            'EducationLevelID'=>'required',
            'ObtainedMarks'=>'required',
            'TotalMarks'=>'required',
            'PassingYear'=>'required',
            'Institute'=>'required|min:3|max:300',
            'Attachment'=>'mimes:jpeg,jpg,png,gif|required|max:10000'
        ];

        $this->validate($request, $rules);

        $imagepath = '';

        if(!is_null($request->Attachment)) {

        $imagepath=$request->Attachment->store('toPath', ['disk' => 'my_files']);

        }
        $education_data = [
            'EmployeeID' => $request->EmployeeID,
            'EducationLevelID' => $request->EducationLevelID,
            'ObtainedMarks' => $request->ObtainedMarks,
            'TotalMarks' => $request->TotalMarks,
            'PassingYear' => $request->PassingYear,
            'Institute' => $request->Institute,
            'Attachment' => $imagepath,
        ];

        // dd($education_data);

        DB::table('hr_employee_education')->insert($education_data);
        return redirect()->route('hr.employes.show',$request->EmployeeID)->with('success', 'Education added successfully.');
    }

    public function destroy($id)
    {
        $data=explode('-',$id);
        $empid=$data[1];
        $eduid=$data[0];


        DB::table('hr_employee_education')->where('EducationID', $eduid)->delete();
        return redirect()->route('hr.employes.show',$empid)
                    ->with('success','Education deleted successfully');
    }


    }

