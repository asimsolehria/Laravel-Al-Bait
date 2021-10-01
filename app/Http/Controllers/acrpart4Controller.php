<?php

namespace App\Http\Controllers;
use App\HR\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
class acrpart4Controller extends Controller
{
    public function index()
    {
        // $employes = Employee::find($id);
        $acremployeepart=DB::table('acr_employee_record')
        ->leftJoin('hr_employees', 'hr_employees.EmployeeID', '=', 'acr_employee_record.EmployeeID')
        // ->Join('hr_employees', 'hr_employees.EmployeeID', '=', 'acr_employee_record.EmployeeID')
        // ->leftJoin('setup_hr_job_types', 'setup_hr_job_types.JobTypeID', '=', 'hr_employee_experiences.JobTypeID')
        // ->where('acr_employee_record.ACRID','=',$id)
        ->get();

        $gradings= Employee::all();

        $acrfactors=DB::table('acr_factor_evaluations')
        ->where('FETID', '=' , 2)
        // // ->where('acr_factor_evaluations.FEID','=',$id)
        ->get();

    //   print_r($acrfactors);exit;
       return view('hr.acrpart4.index' , ['acremployeepart' => $acremployeepart , 'gradings' => $gradings , 'acrfactors' => $acrfactors ]);
    }


    public function create($id)
    {

        $employesdetail= Employee::all();
        $employes = Employee::find($id);
        $details = DB::table('hr_employees')
        ->leftJoin('setup_hr_genders', 'setup_hr_genders.GenderID', '=', 'hr_employees.GenderID')
        ->leftJoin('setup_ad_mobile_networks', 'setup_ad_mobile_networks.MobileNetworkID', '=', 'hr_employees.MobileNetworkID')
        ->Join('acr_employee_record', 'acr_employee_record.EmployeeID', '=',  'hr_employees.EmployeeID')
                // ->leftJoin('hr_employee_experiences', 'hr_employee_experiences.EmployeeID', '=', 'hr_employees.EmployeeID')
              // ->leftJoin('setup_hr_job_types', 'setup_hr_job_types.JobTypeID', '=', 'hr_employee_experiences.JobTypeID')
        ->where('acr_employee_record.ACRID', '=', $id)
        // ->select('hr_employees.*' , 'setup_hr_gender.*' , 'setup_ad_mobile_networks.*');
        ->get();

        $gradings= DB::table('acr_grading')->orderby('Grading')->get();



        $acrfactors=DB::table('acr_factor_evaluations')
        ->where('FETID', '=' , 2)
        // ->where('acr_factor_evaluations.FEID','=',$id)
        ->get();

        $acrfactor3=DB::table('acr_factor_evaluations')
        ->where('FETID', '=' , 3)
        // ->where('acr_factor_evaluations.FEID','=',$id)
        ->get();




        return view('hr.acrpart4.create' , ['employes' => $employes ,
                                                     'details' => $details ,
                                                     'employesdetail' => $employesdetail ,
                                                     'EmployeeID' => $id  ,
                                                     'gradings' => $gradings ,
                                                     'acrfactors' => $acrfactors ,
                                                     'acrfactor3' => $acrfactor3 ]);
    }

    public function store(request $request){

        // echo "hi";
        // dd($request);
        $rules=[
            // 'option[]'=>'required',
            // 'q3'=>'required',
            // 'PenPicture'=>'required',
            // 'ReportingOfficer2'=>'required',
            // 'RO2Designation' => 'required',
            // 'RO2Status' => 'required',
            // 'RO2Updated_on' => 'required',

        ];

        // dd($request);
        $this->validate($request, $rules);
        $options= $request->option;
        $ACRID=$request->ACRID;
        $FEID=$request->FEID;

    //    dd($options);
        foreach($options as $option)
        {
             $v=explode('.',$option);
            //  dd($v[0]);
             $value=$v[0];


             if($v[0]==1){
                DB::statement("UPDATE acr_employee_evaluations SET gradeinput = '$value' where ACRID=$ACRID and FEID=$FEID");
             }
             else if($v[0]==2){
                DB::statement("UPDATE acr_employee_evaluations SET gradeinput = '$value' where ACRID=$ACRID and FEID=$FEID");
             }
             else if($v[0]==3){
                DB::statement("UPDATE acr_employee_evaluations SET gradeinput = '$value' where ACRID=$ACRID and FEID=$FEID");
            }
            else if($v[0]==4){
                DB::statement("UPDATE acr_employee_evaluations SET gradeinput = '$value' where ACRID=$ACRID and FEID=$FEID");
            }
            else if($v[0]==5){
                DB::statement("UPDATE acr_employee_evaluations SET gradeinput = '$value' where ACRID=$ACRID and FEID=$FEID");
            }
            else if($v[0]==6){
                DB::statement("UPDATE acr_employee_evaluations SET gradeinput = '$value' where ACRID=$ACRID and FEID=$FEID");
            }
        }


                $PenPicture= $request->PenPicture;
                $ReportingOfficer2= $request->ReportingOfficer2;
                $RO2Designation=$request->RO2Designation;
                $RO2Status= $request->RO2Status;
                $RO2Updated_on= $request->RO2Updated_on;

                 DB::table('acr_employee_record')
                 ->where('ACRID', $ACRID)
                 ->update(['PenPicture'=>$PenPicture ,'ReportingOfficer2'=> $ReportingOfficer2 ,'RO2Designation'=>$RO2Designation,'RO2Status'=>$RO2Status , 'RO2Updated_on'=>$RO2Updated_on]);
                 return redirect()->route('hr.acrpart4.index')->with('success', 'ACR PART 4 Updated successfully.');
    //  dd($option);

            //DB::update('update into acr_employee_record(PenPicture,ReportingOfficer2,RO2Status,RO2Updated_on) values(?,?,?,?)',[$PenPicture,$ReportingOfficer2,$RO2Status,$RO2Updated_on]);
    }
}
