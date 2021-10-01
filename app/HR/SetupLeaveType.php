<?php

namespace App\HR;

use Illuminate\Database\Eloquent\Model;

class SetupLeaveType extends Model
{
    protected $table = 'setup_hr_leave_types';
    protected $primaryKey = 'LeaveTypeID';

    protected $fillable = [
        'IsCarryForward',
        'IsPayable'
    ];

    public function leaves(){
        return $this->hasMany('App\HR\EmployeeLeave', 'LeaveTypeID', 'LeaveTypeID');
    }
}
