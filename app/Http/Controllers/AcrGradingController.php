<?php

namespace App\Http\Controllers;
use App\HR\AcrGrading;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class AcrGradingController extends Controller

{
    // function __construct(){
    //      $this->middleware('permission:country-list|country-create|country-edit|country-delete', ['only' => ['index','store']]);
    //      $this->middleware('permission:country-create', ['only' => ['create','store']]);
    //      $this->middleware('permission:country-edit', ['only' => ['edit','update']]);
    //      $this->middleware('permission:country-delete', ['only' => ['destroy']]);
    // }

    public function index()
    {

        $gradings= AcrGrading::all();

       return view('hr.acrgrading.index',['gradings'=>$gradings]);
    }

    public function create()
    {
        return view('hr.acrgrading.create');
    }

    public function store(Request $request)
    {
        $rules=[
            // 'Grading'=>'required',
            // 'RatingFrom'=>'required',
            // 'Definition'=>'required'
        ];

        $this->validate($request, $rules);
        $grading_data = [
            'Grading' => $request->Grading,
            'RatingFrom' => $request->RatingFrom,
            'RatingTo' => $request->RatingTo,
            'Definition' => $request->Definition
        ];
        DB::table('acr_grading')->insert($grading_data);
        return redirect()->route('hr.acrgrading.index')->with('success', 'Acr grading added successfully.');
    }

    public function edit($id)
    {
        $queryData = DB::table('acr_grading')
        ->where('ACRGID', '=', $id)
        ->first();

        return view('hr.acrgrading.edit',  ['queryData'=>$queryData]);
    }

    public function update(Request $request, $id)
    {
        $rules = [
            // 'Grading'=>'required',
            // 'RatingFrom'=>'required',
            // 'Definition'=>'required'

        ];
        $this->validate($request, $rules);
        $grading_data = [
            'Grading' => $request->Grading,
            'RatingFrom' => $request->RatingFrom,
            'RatingTo' => $request->RatingTo,
            'Definition' => $request->Definition
        ];
        DB::table('acr_grading')->where('ACRGID', $id)->update($grading_data);
        return redirect()->route('hr.acrgrading.index')->with('success', 'acrgrading updated successfully.');
    }


    public function destroy($id)
    {
        DB::table('acr_grading')->where('ACRGID', $id)->delete();
        return redirect()->route('hr.acrgrading.index')
                    ->with('success','acrgrading deleted successfully');
    }


}


