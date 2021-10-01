<?php

namespace App\Http\Controllers;
use App\ChartofAccount;
use Validator;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class ChartofAccountController extends Controller
{
    function __construct()
    {
            
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search= $request->input('search');
        // $data = ChartofAccount::select('chartofaccounts.*','parent_acc.Account_Name AS parent_acc_name','parent_acc.Account_Code AS parent_acc_code')->orderBy('pams_chartofaccounts.Account_Name','ASC')
        // ->leftjoin('chartofaccounts AS parent_acc','parent_acc.Account_Code','=','chartofaccounts.Parent_Code');
        // $data->where('chartofaccounts.IsFirstLevel', '=', 1);

        $data = ChartofAccount::select('chartofaccounts.*');
        $data->where('chartofaccounts.IsFirstLevel', '=', 1);

        if($search){
            $data->where('chartofaccounts.Account_Name', 'LIKE', '%'.$search.'%');
        }
        $data = $data->paginate(20)->onEachSide(2);
        \Debugbar::info($data);
        return view('portal.accounts.chartofaccount.index',compact('data', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $chartofaccount = ChartofAccount::select('Account_Code', 'Account_Name')->where('Is_Active','=','1')->orderby('Account_Name','ASC')->get();
        return view('portal.accounts.chartofaccount.create', compact('chartofaccount'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = [
            'AccountCode' => 'required|unique:chartofaccounts,Account_Code',
            'AccountName' => 'required',
            'Description' => 'required',
        ];
        if(!isset($request->IsFirstLevel)){
            $validate['Level'] = 'required';
            $validate['ParentCode'] = 'required';
        }
        $validator = Validator::make($request->all(), $validate);

        if($validator->fails())
        {
            return redirect()->back()->withInput()->withErrors($validator);
        }
        $Input = [
            'Account_Code' => $request->AccountCode,
            'Account_Name' => $request->AccountName,
            'Description' => $request->Description,
            'Is_Transaction' => (($request->IsTransaction)?$request->IsTransaction:0),
            'Is_Active' => (($request->IsActive)?$request->IsActive:0),
            'created_by' => auth()->user()->id,
            'project_id' => 1
        ];
        if(!isset($request->IsFirstLevel)){
            $Input['IsFirstLevel'] = 0;
            $Input['Level'] = $request->Level;
            $Input['Parent_Code'] = $request->ParentCode;
        }
        else{
            $Input['IsFirstLevel'] = $request->IsFirstLevel;
            $Input['Level'] = 1;
        }
        ChartofAccount::create($Input);
        return redirect()->route('chartofaccount.index')
        ->with('success','Chart of account created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $parent_accounts = ChartofAccount::select('Account_Code', 'Account_Name')->where('Is_Active','=','1')->orderby('Account_Name','ASC')->get();
        $chartofaccount = ChartofAccount::where('SeqID', $id)->first();
        return view('portal.accounts.chartofaccount.edit',compact('chartofaccount', 'parent_accounts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validate = [
            'AccountCode' => 'required|unique:chartofaccounts,Account_Code,'.$id.',SeqID',
            'AccountName' => 'required',
            'Description' => 'required',
        ];
        if(!isset($request->IsFirstLevel)){
            $validate['Level'] = 'required';
            $validate['ParentCode'] = 'required';
        }
        $validator = Validator::make($request->all(), $validate);



        if($validator->fails())
        {
            return redirect()->back()->withInput()->withErrors($validator);
        }
        $Input = [
            'Account_Code' => $request->AccountCode,
            'Account_Name' => $request->AccountName,
            'Description' => $request->Description,
            'Is_Transaction' => (($request->IsTransaction)?$request->IsTransaction:0),
            'Is_Active' => (($request->IsActive)?$request->IsActive:0),
            'updated_by' => auth()->user()->id,
        ];
        if(!isset($request->IsFirstLevel)){
            $Input['IsFirstLevel'] = 0;
            $Input['Level'] = $request->Level;
            $Input['Parent_Code'] = $request->ParentCode;
        }
        else{
            $Input['IsFirstLevel'] = $request->IsFirstLevel;
            $Input['Level'] = 1;
        }
        $chartofaccount = ChartofAccount::where('SeqID',$id);
        $chartofaccount->update($Input);

        return redirect()->route('chartofaccount.index')
                    ->with('success','Chart of Account Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ChartofAccount::find($id)->delete();
        return redirect()->route('chartofaccount.index')
                            ->with('success','Chart of Account deleted successfully');
    }

    public function chartofaccount_nextlevel(Request $request,$gl_code){ 
        $search= $request->input('search');
        $data = ChartofAccount::select('chartofaccounts.*','parent_acc.Account_Name AS parent_acc_name','parent_acc.Account_Code AS parent_acc_code')->orderBy('chartofaccounts.Account_Name','ASC')
        ->leftjoin('chartofaccounts AS parent_acc','parent_acc.Account_Code','=','chartofaccounts.Parent_Code');
        if($gl_code){
            $data->where('chartofaccounts.Parent_Code', '=', $gl_code);
        }
        if($search){
            $data->where('chartofaccounts.Account_Name', 'LIKE', '%'.$search.'%');
        }
        $data = $data->paginate(20)->onEachSide(2);
        \Debugbar::info($data);
        return view('portal.accounts.chartofaccount.index',compact('data','search'));
    }
}