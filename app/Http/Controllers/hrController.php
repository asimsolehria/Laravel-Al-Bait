<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\HR\Employee;
use App\HR\EmployeeEducation;
use App\HR\EmployeeExperience;
use Illuminate\Support\Facades\DB;
use Image;
use function PHPSTORM_META\expectedReturnValues;

class hrController extends Controller
{



    public function index(Request $request){
        $Cnic =$request->get('Cnic');
        $Name =$request->get('Name');
        $empid =$request->get('empid');
        $Depts =$request->get('DeptID');
        $desig = $request->get('DesignationID');
        // $employes= Employee::all();
        // $employes = DB::table('hr_employees');

        $employes = DB::table('hr_employees')
        ->leftJoin('hr_employee_posting_promotions', 'hr_employee_posting_promotions.EmployeeID', '=', 'hr_employees.EmployeeID')
        ->select('hr_employees.*' );
        // ->whereNotNull('hr_employee_posting_promotions.EmployeeID');



      if($Cnic>0)
        $employes = $employes->where('hr_employees.Cnic', '=', $Cnic);
      if($Name!='')
        $employes = $employes->where('hr_employees.Name', '=', $Name);
      if($empid>0)
        $employes = $employes->where('hr_employees.EmployeeID', '=', $empid);
      if($Depts>0)
        $employes = $employes->where('hr_employee_posting_promotions.DeptID', '=', $Depts);
      if($desig>0)
        $employes = $employes->where('hr_employee_posting_promotions.DesignationID', '=', $desig);

    $employes = $employes->orderBy('hr_employees.EmployeeID','DESC')->get();

    $Depts = DB::table('setup_hr_departments')->select('DeptID', 'DeptName')->get();

    $desig = DB::table('setup_hr_designations')->select('DesignationID', 'DesignationTitle')->get();

    \Debugbar::info('hrController', $employes);


    // dd($employes);
        return view('hr.employes.index',['employes'=>$employes ,
                                         'Cnic' => $Cnic ,
                                         'Name' => $Name ,
                                         'empid' => $empid ,
                                         'Depts' => $Depts ,
                                         'desig' => $desig]);

    }

    public function create()
   {

    $mobilenetworks = DB::table('setup_ad_mobile_networks')->select('MobileNetworkID', 'MobileNetworkOperator')->get();
    $genders = DB::table('setup_hr_genders')->select('GenderID', 'GenderTitle')->get();
    return view('hr.employes.create',['mobilenetworks'=>$mobilenetworks , 'genders' => $genders]);

   }

   public function store(Request $request)
    {
        $rules=[
            'Name'=>'required|min:3|max:100',
            // 'FatherName'=>'required|min:3|max:100',
            'GenderID'=>'required',
            // 'DateOfBirth'=>'required',
            // 'Cnic'=>'required',
            // 'ContactNumber'=>'required|min:3|max:100',
            // 'MobileNetworkID'=>'required',
            // 'PresentAddress'=>'required|min:3|max:100',
            // 'PermanentAddress'=>'required|min:3|max:100',
            // // 'JoiningDate'=>'required',
            // 'JobDescription'=>'required|min:3|max:100',
            // 'Nominee'=>'required|min:3|max:100',
            // 'PicturePath'=>'mimes:jpeg,jpg,png,gif|required|max:10000',
            // 'DateOfRetirement'=>'required',
        ];
        $this->validate($request, $rules);
        $imagepath = '';

        if(!is_null($request->PicturePath)) {

        $imagepath=$request->PicturePath->store('toPath', ['disk' => 'my_files']);

        }

        $employ_data = [
            'Name' => $request->Name,
            'FatherName' => $request->FatherName,
            'GenderID' => $request->GenderID,
            'DateOfBirth' => $request->DateOfBirth,
            'Cnic' => $request->Cnic,
            'ContactNumber' => $request->ContactNumber,
            'MobileNetworkID' => $request->MobileNetworkID,
            'PresentAddress' => $request->PresentAddress,
            'PermanentAddress' => $request->PermanentAddress,
            'JoiningDate' => $request->JoiningDate,
            'RegularizationDate' => $request->RegularizationDate,
            'JobDescription' => $request->JobDescription,
            'Nominee' => $request->Nominee,
            'PicturePath' => $imagepath,
            'DateOfRetirement' => $request->DateOfRetirement,
        ];
        DB::table('hr_employees')->insert($employ_data);
        return redirect()->route('hr.employes.index')->with('success', 'Employ added successfully.');
    }


    public function edit($id)
    {


    $mobilenetworks = DB::table('setup_ad_mobile_networks')->select('MobileNetworkID', 'MobileNetworkOperator')->get();
    $genders = DB::table('setup_hr_genders')->select('GenderID', 'GenderTitle')->get();
        $queryData = DB::table('hr_employees')
        ->where('EmployeeID', '=', $id)
        ->first();

        return view('hr.employes.edit',  ['queryData'=>$queryData , 'genders' =>$genders , 'mobilenetworks' => $mobilenetworks]);
    }

    public function update(request $request, $id ){
        $PicturePath = $request->file('PicturePath');
        $imagepath = $request->hidden_image;
        if($PicturePath !=  '')
        {

        $rules=[
            'Name'=>'required|min:3|max:100',
            'GenderID'=>'required',
            'FatherName'=>'required',
            'DateOfBirth'=>'required',
            'Cnic'=>'required|min:3|max:100',
            'ContactNumber'=>'required|min:3|max:100',
            'MobileNetworkID'=>'required',
            'PresentAddress'=>'required|min:3|max:100',
            'PermanentAddress'=>'required|min:3|max:100',
            'JoiningDate'=>'required',

            // 'JobDescription'=>'required|min:3|max:100',
            'Nominee'=>'required|min:3|max:100',
            'PicturePath'=>'mimes:jpeg,jpg,png,gif|required|max:10000',
            // 'DateOfRetirement'=>'required'
        ];
        $this->validate($request, $rules);



        $imagepath=$PicturePath->store('toPath', ['disk' => 'my_files']);

    //    dd($imagepath);

    }else{

                $rules=[
            'Name'=>'required|min:3|max:100',
            'FatherName'=>'required|min:3|max:100',
            'GenderID'=>'required',
            'DateOfBirth'=>'required',
            'Cnic'=>'required|min:3|max:100',
            'ContactNumber'=>'required|min:3|max:100',
            'MobileNetworkID'=>'required',
            'PresentAddress'=>'required|min:3|max:100',
            'PermanentAddress'=>'required|min:3|max:100',
            'JoiningDate'=>'required',
            // 'RegularizationDate'=>'required',
            'JobDescription'=>'required|min:3|max:100',
            'Nominee'=>'required|min:3|max:100',
            // 'PicturePath'=>'mimes:jpeg,jpg,png,gif|required|max:10000',
            // 'DateOfRetirement'=>'required',
        ];
        $this->validate($request, $rules);

    }

        $employ_data = [
            'Name' => $request->Name,
            'FatherName' => $request->FatherName,
            'GenderID' => $request->GenderID,
            'DateOfBirth' => $request->DateOfBirth,
            'Cnic' => $request->Cnic,
            'ContactNumber' => $request->ContactNumber,
            'MobileNetworkID' => $request->MobileNetworkID,
            'PresentAddress' => $request->PresentAddress,
            'PermanentAddress' => $request->PermanentAddress,
            'JoiningDate' => $request->JoiningDate,
            'RegularizationDate' => $request->RegularizationDate,
            'JobDescription' => $request->JobDescription,
            'Nominee' => $request->Nominee,
            'PicturePath' => $imagepath,
            'DateOfRetirement' => $request->DateOfRetirement,
        ];

        Employee::where('EmployeeID', $id)->update($employ_data);
        // DB::table('hr_employees')->insert($employ_data);
        return redirect()->route('hr.employes.index')->with('success', 'Employ updated successfully.');



    }

    public function destroy($id)
    {
        DB::table('hr_employees')->where('EmployeeID', $id)->delete();
        return redirect()->route('hr.employes.index')
                    ->with('success','Employ deleted successfully');
    }

    public function show($id){

    $employes = Employee::find($id);
    $details = DB::table('hr_employees')
    ->leftJoin('setup_hr_genders', 'setup_hr_genders.GenderID', '=', 'hr_employees.GenderID')
    ->leftJoin('setup_ad_mobile_networks', 'setup_ad_mobile_networks.MobileNetworkID', '=', 'hr_employees.MobileNetworkID')
    // ->leftJoin('hr_employee_experiences', 'hr_employee_experiences.EmployeeID', '=', 'hr_employees.EmployeeID')
    // ->leftJoin('setup_hr_job_types', 'setup_hr_job_types.JobTypeID', '=', 'hr_employee_experiences.JobTypeID')
    ->where('hr_employees.EmployeeID', '=', $id)
    // ->select('hr_employees.*' , 'setup_hr_gender.*' , 'setup_ad_mobile_networks.*');
    ->get();
    $education=DB::table('hr_employee_education')
    ->leftJoin('setup_hr_education_levels','setup_hr_education_levels.EducationLevelID','=','hr_employee_education.EducationLevelID')
    ->where('hr_employee_education.EmployeeID','=',$id)
    ->get();
    // dd($details);

    $experiences=DB::table('hr_employee_experiences')
    // ->leftJoin('hr_employee_experiences', 'hr_employee_experiences.EmployeeID', '=', 'hr_employees.EmployeeID')
    ->leftJoin('setup_hr_job_types', 'setup_hr_job_types.JobTypeID', '=', 'hr_employee_experiences.JobTypeID')
    ->where('hr_employee_experiences.EmployeeID','=',$id)
    ->get();

    $postproms = DB::table('hr_employee_posting_promotions')
    ->leftJoin('setup_hr_departments' , 'setup_hr_departments.DeptID' ,  '=' , 'hr_employee_posting_promotions.DeptID' )
    ->leftJoin('setup_hr_department_categories' , 'setup_hr_department_categories.DeptCatID' ,  '=' , 'hr_employee_posting_promotions.DeptCatID' )
    ->leftJoin('setup_hr_designations' , 'setup_hr_designations.DesignationID' ,  '=' , 'hr_employee_posting_promotions.DesignationID' )
    ->leftJoin('setup_hr_payscale' , 'setup_hr_payscale.PayScaleID' ,  '=' , 'hr_employee_posting_promotions.PayScaleID' )
    ->where('hr_employee_posting_promotions.EmployeeID','=',$id)
    ->get();
    // dd($postproms);

    $acremployeerecord=DB::table('acr_employee_record')
    // ->leftJoin('hr_employee_experiences', 'hr_employee_experiences.EmployeeID', '=', 'hr_employees.EmployeeID')
    // ->leftJoin('setup_hr_job_types', 'setup_hr_job_types.JobTypeID', '=', 'hr_employee_experiences.JobTypeID')
    ->where('acr_employee_record.EmployeeID','=',$id)
    ->get();

    $rewards=DB::table('hr_employee_rewards')
    ->where('hr_employee_rewards.EmployeeID','=',$id)
    ->get();

    $disciplinaryactions=DB::table('hr_employee_disciplinary_actions')
    ->where('hr_employee_disciplinary_actions.EmployeeID','=',$id)
    ->get();

    $bankdetails=DB::table('hr_employee_bankdetails')
    ->leftJoin('hr_setup_bankaccountype' , 'hr_setup_bankaccountype.AccountTypeID' ,  '=' , 'hr_employee_bankdetails.AccountTypeID' )
    ->leftJoin('setup_hr_status' , 'setup_hr_status.StatusID' ,  '=' , 'hr_employee_bankdetails.StatusID' )
    ->where('hr_employee_bankdetails.EmployeeID','=',$id)
    ->get();
    return view('hr.employes.employesshow' , [  'employes' => $employes ,
                                                'details' => $details,
                                                'education'=>$education ,
                                                'experiences' => $experiences ,
                                                'postproms' => $postproms ,
                                                'acremployeerecord' => $acremployeerecord ,
                                                'rewards' => $rewards ,
                                                'disciplinaryactions' => $disciplinaryactions ,
                                                'bankdetails' => $bankdetails ]);

    }

    public function getdepartments(Request $request)
    {
      $dt = $request->get('dt');
      $data = DB::table('setup_hr_departments')->where('DeptID','=', $dt)->get();

      $output = '<option value="0">Please select</option>';
      if(count($data)>0)
        foreach($data as $row)
        {
          $output .= '<option value="'.$row->DeptID.'">'.$row->DeptID.'</option>';
        }
        echo $output;
    }
}
