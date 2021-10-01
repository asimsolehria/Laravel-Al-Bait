<?php

namespace App\Http\Controllers;
use App\HR\Employee;
use App\HR\AcrGrading;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
class AppraisalCasesController extends Controller
{
    public function index()
    {
        // $employes = Employee::find($id);
        $acremployeerecord=DB::table('acr_employee_record')
        ->leftJoin('hr_employees', 'hr_employees.EmployeeID', '=', 'acr_employee_record.EmployeeID')
        // ->Join('hr_employees', 'hr_employees.EmployeeID', '=', 'acr_employee_record.EmployeeID')
        // ->leftJoin('setup_hr_job_types', 'setup_hr_job_types.JobTypeID', '=', 'hr_employee_experiences.JobTypeID')
        // ->where('acr_employee_record.ACRID','=',$id)
        ->get();

        $gradings= Employee::all();

        // $acrfactors=DB::table('acr_factor_evaluations')
        // //->where('FETID', '=' , 1)
        // // ->where('acr_factor_evaluations.FEID','=',$id)
        // ->get();

    //   print_r($acrfactors);exit;
       return view('hr.appraisalcases.index' , ['acremployeerecord' => $acremployeerecord , 'gradings' => $gradings ]);
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
        // ->select('acr_factor_evaluations.*')
        ->where('FETID', '=' , 1)
        // ->where('acr_factor_evaluations.FEID','=',$id)
        ->get();

        // dd($acrfactors);



        return view('hr.appraisalcases.create' , ['employes' => $employes ,
                                                     'details' => $details ,
                                                     'employesdetail' => $employesdetail ,
                                                     'EmployeeID' => $id  ,
                                                     'gradings' => $gradings ,
                                                     'acrfactors' => $acrfactors ]);
    }

    public function store(Request $request){

        // echo "hi";
        $grading = $request->input('grading');
        $rating = $request->input('rating');
        $acrid=$request->input('ACRID');
        $feid=$request->input('FEID');

        // foreach($grading as $grade){
        //     $grad=array('grading'=>$grade,);
        //     $bulkGrade[]=$grad;
        // }

        // $ratings = $request->input('rating');
        // foreach($ratings as $rating){
        //     $rate=array('ratings'=>$rating,);
        //     $bulkrate[]=$rate;
        // }
        // dd($feid);
        for($i=0;$i<sizeof($grading);$i++){
            // echo 'ACRID:'.$acrid." FEID:". $feid[$i]." Grade: ". $grading[$i]. " Rate:".$rating[$i];

            DB::insert('insert into acr_employee_evaluations (ACRID,FEID,gradeinput,rateinput) values (?, ?, ?, ?)', [$acrid, $feid, $grading[$i], $rating[$i]]);
        }



        // DB::table('acr_employee_evaluations')->insert($);
        return redirect()->route('hr.appraisalcases.index')->with('success', 'Acr performace added successfully.');


    }
}
