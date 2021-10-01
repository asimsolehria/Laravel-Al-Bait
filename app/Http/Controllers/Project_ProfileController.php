<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project_Profile;
use Validator;
use Illuminate\Validation\Rule;

class Project_ProfileController extends Controller
{
    function __construct()
    {
            
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Project_Profile::all();
        \Debugbar::info($data);
        return view('portal.project.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $supplier = Project_Profile::select('Project_Code', 'Project_title','location','Project_Overview')->orderby('Project_title','ASC')->get();
        return view('portal.project.create', compact('supplier'));
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
            'Project_Code' => 'required',
            'Project_title' => 'required',
            'location' => 'required',
            'Project_Overview' => 'required'
        ];
        
        $validator = Validator::make($request->all(), $validate);

        if($validator->fails())
        {
            return redirect()->back()->withInput()->withErrors($validator);
        }
        $Input = [
            'Project_Code' => $request->Project_Code,
            'Project_title' => $request->Project_title,
            'location' => $request->location,
            'Project_Overview' => $request->Project_Overview,
            'ClientID' => 1,
            'Focal_PersonID' => 1,
            'SupervisorID' => 1
        ];
        
        Project_Profile::create($Input);
        return redirect()->route('project.index')
        ->with('success','Project Added successfully.');
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
        $data = Project_Profile::where('ProjectId', $id)->first();
        return view('portal.project.edit', compact('data'));
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
            'Project_Code' => 'required',
            'Project_title' => 'required',
            'location' => 'required',
            'Project_Overview' => 'required'
        ];
        
        $validator = Validator::make($request->all(), $validate);

        if($validator->fails())
        {
            return redirect()->back()->withInput()->withErrors($validator);
        }
        $Input = [
            'Project_Code' => $request->Project_Code,
            'Project_title' => $request->Project_title,
            'location' => $request->location,
            'Project_Overview' => $request->Project_Overview,
            'ClientID' => 1,
            'Focal_PersonID' => 1,
            'SupervisorID' => 1
        ];
        
        $supplier = Project_Profile::where('ProjectId',$id);
        $supplier->update($Input);

        return redirect()->route('project.index')
                    ->with('success','Project updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Project_Profile::find($id)->delete();
        return redirect()->route('project.index')
                            ->with('success','Project deleted successfully');
    }

}