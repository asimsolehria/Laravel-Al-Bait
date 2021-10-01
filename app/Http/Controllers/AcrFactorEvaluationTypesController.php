<?php

namespace App\Http\Controllers;
use App\HR\AcrFactorEvaluationTypes;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class AcrFactorEvaluationTypesController extends Controller

{
    // function __construct(){
    //      $this->middleware('permission:country-list|country-create|country-edit|country-delete', ['only' => ['index','store']]);
    //      $this->middleware('permission:country-create', ['only' => ['create','store']]);
    //      $this->middleware('permission:country-edit', ['only' => ['edit','update']]);
    //      $this->middleware('permission:country-delete', ['only' => ['destroy']]);
    // }

    public function index()
    {

        $acrtypes= AcrFactorEvaluationTypes::all();
       return view('hr.acrfactorevaluationtypes.index',['acrtypes'=>$acrtypes]);
    }

    public function create()
    {
        return view('hr.acrfactorevaluationtypes.create');
    }

    public function store(Request $request)
    {
        $rules=[
            'QuestionTypeTitle'=>'required'

        ];

        $this->validate($request, $rules);
        $acrtypes_data = [
            'QuestionTypeTitle' => $request->QuestionTypeTitle
        ];
        DB::table('acr_factor_evaluation_types')->insert($acrtypes_data);
        return redirect()->route('hr.acrfactorevaluationtypes.index')->with('success', 'Acrfactor evalution type added successfully.');
    }

    public function edit($id)
    {
        $queryData = DB::table('acr_factor_evaluation_types')
        ->where('FETID', '=', $id)
        ->first();

        return view('hr.acrfactorevaluationtypes.edit',  ['queryData'=>$queryData]);
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'QuestionTypeTitle'=>'required',
        ];
        $this->validate($request, $rules);
        $acrtypes_data = [
            'QuestionTypeTitle' => $request->QuestionTypeTitle
        ];
        DB::table('acr_factor_evaluation_types')->where('FETID', $id)->update($acrtypes_data);
        return redirect()->route('hr.acrfactorevaluationtypes.index')->with('success', 'acr factor evaluation type updated successfully.');
    }


    public function destroy($id)
    {
        DB::table('acr_factor_evaluation_types')->where('FETID', $id)->delete();
        return redirect()->route('hr.acrfactorevaluationtypes.index')
                    ->with('success','acr factor evaluation type deleted successfully');
    }


}


