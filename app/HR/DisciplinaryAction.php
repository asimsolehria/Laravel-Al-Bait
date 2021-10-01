<?php

namespace App\HR;

use Illuminate\Database\Eloquent\Model;

class DisciplinaryAction extends Model

{
    protected $table = 'hr_employee_disciplinary_actions';
    protected $primaryKey = 'DisciplinaryActionID';

    protected $fillable = [
        'EmployeeID',
        'ActionID',
        'Reason',
        'DateOfAction',
        'Attachment'
    ];
}
