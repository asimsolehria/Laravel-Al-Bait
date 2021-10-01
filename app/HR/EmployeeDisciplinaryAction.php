<?php

namespace App\HR;

use Illuminate\Database\Eloquent\Model;

class EmployeeDisciplinaryAction extends Model
{
    protected $table = 'hr_employee_disciplinary_actions';
    protected $primaryKey = 'DisciplinaryActionID';

    protected $fillable = [
        'EmployeeID',
        'ActionID',
        'Remarks',
        'Reason',
        'DateOfAction'
    ];

    public function disciplinaryActionType(){
        return $this->hasOne('App\HR\SetupDisciplinaryActionType', 'ActionID', 'ActionID');
    }

    public function employee(){
        return $this->belongsTo('App\HR\Employee', 'EmployeeID', 'EmployeeID');
    }
}
