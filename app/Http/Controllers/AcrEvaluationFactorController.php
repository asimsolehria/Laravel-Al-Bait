<?php

namespace App\Http\Controllers;
// use App\HR\AcrEvaluationFactor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class AcrEvaluationFactorController extends Controller
{
    public function index()
    {
        // $user = Auth::user();
        // $acrfactors= AcrEvaluationFactor::all();

        $acrfactors=DB::table('acr_factor_evaluations')
        ->join('acr_factor_evaluation_types','acr_factor_evaluation_types.FETID','=','acr_factor_evaluations.FETID')
        // ->where('acr_factor_evaluations.FEID','=',$id)
        ->get();
       return view('hr.acrevaluationfactor.index',['acrfactors'=>$acrfactors ]);
    }

    public function create()
    {
        // $user = Auth::user();
        $acrfactortypes = DB::table('acr_factor_evaluation_types')->select('FETID', 'QuestionTypeTitle')->get();


        return view('hr.acrevaluationfactor.create',  ['acrfactortypes' => $acrfactortypes ]);
    }

    public function store(Request $request)
    {
        $rules=[

            'MainQuestion'=>'required',
            // 'SubQuestion'=>'required',
            // 'option1'=>'required',
            // 'option2'=>'required',
            // 'option3'=>'required',
            // 'option4'=>'required',
            // 'option5'=>'required',
            // 'option6'=>'required',
        ];

        $this->validate($request, $rules);

        $user = Auth::id();

        $acrfactor_data = [
            'FETID' => $request->FETID,
            'MainQuestion' => $request->MainQuestion,
            'SubQuestion' => $request->SubQuestion,
            'option1' => $request->option1,
            'option2' => $request->option2,
            'option3' => $request->option2,
            'option4' => $request->option3,
            'option5' => $request->option5,
            'option6' => $request->option6,
            'FEStatus' => $request->FEStatus,
            'UserID'  => $user
        ];

        // dd($user);
        // exit;

        DB::table('acr_factor_evaluations')->insert($acrfactor_data);
        return redirect()->route('hr.acrevaluationfactor.index')->with('success', 'Acr factor added successfully.');
    }

    public function edit($id)
    {
        $acrfactortypes = DB::table('acr_factor_evaluation_types')->select('FETID', 'QuestionTypeTitle')->get();
        $queryData = DB::table('acr_factor_evaluations')
        ->where('FEID', '=', $id)
        ->first();

        return view('hr.acrevaluationfactor.edit',  ['queryData'=>$queryData , 'acrfactortypes' => $acrfactortypes]);
    }


    public function update(Request $request, $id)
    {
        $rules=[

            // 'MainQuestion'=>'required',
            // 'SubQuestion'=>'required',
            // 'option1'=>'required',
            // 'option2'=>'required',
            // 'option3'=>'required',
            // 'option4'=>'required',
            // 'option5'=>'required',
            // 'option6'=>'required',
        ];
        $this->validate($request, $rules);

        $user = Auth::id();

        $acrfactor_data = [
            'FETID' => $request->FETID,
            'MainQuestion' => $request->MainQuestion,
            'SubQuestion' => $request->SubQuestion,
            'option1' => $request->option1,
            'option2' => $request->option2,
            'option3' => $request->option2,
            'option4' => $request->option3,
            'option5' => $request->option5,
            'option6' => $request->option6,
            'FEStatus' => $request->FEStatus,
            'UserID'  => $user
        ];
        DB::table('acr_factor_evaluations')->where('FEID', $id)->update($acrfactor_data);
        return redirect()->route('hr.acrevaluationfactor.index')->with('success', 'acr factor evaluation updated successfully.');
    }

    public function destroy($id)
    {
        DB::table('acr_factor_evaluations')->where('FEID', $id)->delete();
        return redirect()->route('hr.acrevaluationfactor.index')
                    ->with('success','acr factor evaluation deleted successfully');
    }

}
