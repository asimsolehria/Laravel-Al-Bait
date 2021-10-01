<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier_Profile;
use Validator;
use Illuminate\Validation\Rule;

class Supplier_ProfileController extends Controller
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
        $data = Supplier_Profile::all();
        \Debugbar::info($data);
        return view('portal.supplier_profile.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $supplier = Supplier_Profile::select('SupplierName', 'ContactNo')->orderby('SupplierName','ASC')->get();
        return view('portal.supplier_profile.create', compact('supplier'));
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
            'SupplierName' => 'required',
            'ContactNo' => 'required',
        ];
        
        $validator = Validator::make($request->all(), $validate);

        if($validator->fails())
        {
            return redirect()->back()->withInput()->withErrors($validator);
        }
        $Input = [
            'SupplierName' => $request->SupplierName,
            'ContactNo' => $request->ContactNo,
        ];
        
        Supplier_Profile::create($Input);
        return redirect()->route('supplier.index')
        ->with('success','Supplier Added successfully.');
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
        $data = Supplier_Profile::where('SupplierId', $id)->first();
        return view('portal.supplier_profile.edit', compact('data'));
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
            'SupplierName' => 'required',
            'ContactNo' => 'required',
        ];
        
        $validator = Validator::make($request->all(), $validate);

        if($validator->fails())
        {
            return redirect()->back()->withInput()->withErrors($validator);
        }
        $Input = [
            'SupplierName' => $request->SupplierName,
            'ContactNo' => $request->ContactNo,
        ];
        
        $supplier = Supplier_Profile::where('SupplierId',$id);
        $supplier->update($Input);

        return redirect()->route('supplier.index')
                    ->with('success','Supplier Details updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Supplier_Profile::find($id)->delete();
        return redirect()->route('supplier.index')
                            ->with('success','Supplier deleted successfully');
    }

}