<?php

namespace App\Http\Controllers;
use App\hr\DisciplinaryActionType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class DisciplinaryActionTypeController extends Controller
{
    public function index()
    {

        $actions= DisciplinaryActionType::all();
       return view('hr.disciplinaryactiontype.index',['actions'=>$actions]);
    }

    public function create()
    {
        return view('hr.disciplinaryactiontype.create');
    }

    public function store(Request $request)
    {
        $rules=[
            'ActionType'=>'required'
        ];

        $this->validate($request, $rules);
        $disiplinaryaction_data = [
            'ActionType' => $request->ActionType
        ];
        DB::table('setup_hr_disciplinary_action_types')->insert($disiplinaryaction_data);
        return redirect()->route('hr.disciplinaryactiontype.index')->with('success', 'disciplinaryactiontype added successfully.');
    }

    public function edit($id)
    {
        $queryData = DB::table('setup_hr_disciplinary_action_types')
        ->where('ActionID', '=', $id)
        ->first();

        return view('hr.disciplinaryactiontype.edit',  ['queryData'=>$queryData]);
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'ActionType'=>'required'

        ];
        $this->validate($request, $rules);
        $disiplinaryaction_data = [
            'ActionType' => $request->ActionType
        ];
        DB::table('setup_hr_disciplinary_action_types')->where('ActionID', $id)->update($disiplinaryaction_data);
        return redirect()->route('hr.disciplinaryactiontype.index')->with('success', 'disciplinaryactiontype updated successfully.');
    }


    public function destroy($id)
    {
        DB::table('setup_hr_disciplinary_action_types')->where('ActionID', $id)->delete();
        return redirect()->route('hr.disciplinaryactiontype.index')
                    ->with('success','disciplinaryactiontype deleted successfully');
    } //
}
