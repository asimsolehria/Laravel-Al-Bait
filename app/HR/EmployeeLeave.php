<?php

namespace App\HR;

use Illuminate\Database\Eloquent\Model;

class EmployeeLeave extends Model
{
    protected $table = 'hr_employee_leaves';
    protected $primaryKey = 'LeaveID';

    protected $fillable = [
        'EmployeeID',
        'LeaveTypeID',
        'NumberOfDays',
        'Description'
    ];

    public function leaveType(){
        return $this->hasOne('App\HR\SetupLeaveType', 'LeaveTypeID', 'LeaveTypeID');
    }

    public function employee(){
        return $this->belongsTo('App\HR\Employee', 'EmployeeID', 'EmployeeID');
    }
}
