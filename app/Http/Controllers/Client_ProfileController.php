<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client_Profile;
use Validator;
use Illuminate\Validation\Rule;

class Client_ProfileController extends Controller
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
        $data = Client_Profile::all();
        \Debugbar::info($data);
        return view('portal.client.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $client = Client_Profile::select('Client_Name', 'Contact_No','CNIC','Address')->orderby('Client_Name','ASC')->get();
        return view('portal.client.create', compact('client'));
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
            'Client_Name' => 'required',
            'Contact_No' => 'required',
            'CNIC' => 'required',
            'Address' => 'required'
        ];
        
        $validator = Validator::make($request->all(), $validate);

        if($validator->fails())
        {
            return redirect()->back()->withInput()->withErrors($validator);
        }
        $Input = [
            'Client_Name' => $request->Client_Name,
            'Contact_No' => $request->Contact_No,
            'CNIC' => $request->CNIC,
            'Address' => $request->Address
        ];
        
        Client_Profile::create($Input);
        return redirect()->route('client.index')
        ->with('success','Client Added successfully.');
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
        $data = Client_Profile::where('ClientId', $id)->first();
        return view('portal.client.edit', compact('data'));
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
            'Client_Name' => 'required',
            'Contact_No' => 'required',
            'CNIC' => 'required',
            'Address' => 'required'
        ];
        
        $validator = Validator::make($request->all(), $validate);

        if($validator->fails())
        {
            return redirect()->back()->withInput()->withErrors($validator);
        }
        $Input = [
            'Client_Name' => $request->Client_Name,
            'Contact_No' => $request->Contact_No,
            'CNIC' => $request->CNIC,
            'Address' => $request->Address
        ];
        
        $client = Client_Profile::where('ClientId',$id);
        $client->update($Input);

        return redirect()->route('client.index')
                    ->with('success','Client updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Client_Profile::find($id)->delete();
        return redirect()->route('client.index')
                            ->with('success','Client deleted successfully');
    }

}