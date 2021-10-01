<?php

namespace App\Http\Controllers;
use App\HR\Employee;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use DB;

class AcrEmployeeRecordController extends Controller
{
    public function create($id)
    {   $employesdetail= Employee::all();
        $employes = Employee::find($id);
        $details = DB::table('hr_employees')
        ->leftJoin('setup_hr_genders', 'setup_hr_genders.GenderID', '=', 'hr_employees.GenderID')
        ->leftJoin('setup_ad_mobile_networks', 'setup_ad_mobile_networks.MobileNetworkID', '=', 'hr_employees.MobileNetworkID')
        // ->leftJoin('hr_employee_experiences', 'hr_employee_experiences.EmployeeID', '=', 'hr_employees.EmployeeID')
        // ->leftJoin('setup_hr_job_types', 'setup_hr_job_types.JobTypeID', '=', 'hr_employee_experiences.JobTypeID')
        ->where('hr_employees.EmployeeID', '=', $id)
        // ->select('hr_employees.*' , 'setup_hr_gender.*' , 'setup_ad_mobile_networks.*');
        ->get();
        return view('hr.acremployeerecord.create' , ['employes' => $employes ,
                                                    'details' => $details ,
                                                    'employesdetail' => $employesdetail ,
                                                    'EmployeeID' => $id   ]);
    }

    public function store(Request $request)
    {

        //   dd($request->all());
        $rules=[
            'EmployeeID'=>'required',
            'Acr_IssueDate'=>'required',
            'ToPeriod'=>'required',
            'FromPeriod'=>'required',
            'AdditionalDuties'=>'required',
            'CareerDevelopment'=>'required',
            'LeaveSick'=>'required',
            'LeaveWithoutFullPay'=>'required',
            'ReportingOfficer1'=>'required',
            'RO1Designation'=>'required',
            'RO1Status'=>'required',
            'RO1Updated_on'=>'required',
        ];

        $this->validate($request, $rules);

        // $user = Auth::id();

        $Employeerecord_data = [
            'EmployeeID' => $request->EmployeeID,
            'Acr_IssueDate' => $request->Acr_IssueDate,
            'ToPeriod' => $request->ToPeriod,
            'FromPeriod' => $request->FromPeriod,
            'AdditionalDuties' => $request->AdditionalDuties,
            'CareerDevelopment' => $request->CareerDevelopment,
            'LeaveWithoutFullPay' => $request->LeaveWithoutFullPay,
            'ReportingOfficer1' => $request->ReportingOfficer1,
            'RO1Designation' => $request->RO1Designation,
            'RO1Status' => $request->RO1Status,
            'RO1Updated_on' => $request->RO1Updated_on,
            // 'UserID'  => $user
        ];

        // dd($Employeerecord_data);
        // exit;

        DB::table('acr_employee_record')->insert($Employeerecord_data);
        return redirect()->route('hr.employes.show',$request->EmployeeID)->with('success', 'Acr Employee Record added successfully.');
    }



public function destroy($id){

    $data=explode('-',$id);
    $empid=$data[1];
    $ACRID=$data[0];


    DB::table('acr_employee_record')->where('ACRID', $ACRID)->delete();
    return redirect()->route('hr.employes.show',$empid)
                ->with('success','Acr Employee Record  deleted successfully');

}
}
