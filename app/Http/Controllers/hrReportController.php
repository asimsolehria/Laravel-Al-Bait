<?php

namespace App\Http\Controllers;
use App\HR\AcrGrading;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class hrReportController extends Controller
{
    public function hrreport(){

        $id=$_GET['id'];
        $hrreports=DB::table('acr_employee_record')
        ->leftJoin('hr_employees', 'hr_employees.EmployeeID', '=', 'acr_employee_record.EmployeeID')
        // ->Join('hr_employees', 'hr_employees.EmployeeID', '=', 'acr_employee_record.EmployeeID')
        // ->leftJoin('setup_hr_job_types', 'setup_hr_job_types.JobTypeID', '=', 'hr_employee_experiences.JobTypeID')
        // ->where('acr_employee_record.ACRID','=',$id)
        ->get();

        $gradings= AcrGrading::all();

        $acrfactors=DB::table('acr_factor_evaluations')
        ->Join('acr_employee_evaluations' , 'acr_employee_evaluations.FEID',  '=', 'acr_factor_evaluations.FEID' )
        // ->Join('acr_employee_evaluations' , 'acr_employee_evaluations.FEID',  '=', 'acr_factor_evaluations.FEID' )

        // ->where('FETID', '=' , 2)
        ->where('acr_employee_evaluations.ACRID','=',$id)

        ->get();
        dd($acrfactors);
        return view('hr.hrreport.report' , ['hrreports' => $hrreports , 'gradings' => $gradings , 'acrfactors' => $acrfactors]);

    }


}
