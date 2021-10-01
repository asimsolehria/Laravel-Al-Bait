<?php

namespace App\HR;

use Illuminate\Database\Eloquent\Model;

class EmployeeAttendance extends Model
{
    protected $table = 'hr_employee_attendance';
    protected $primaryKey = 'AttendanceID';

    protected $fillable = [
        'EmployeeID',
        'AttendanceStatus',
        'TimeIn',
        'TimeOut',
        'AttendanceDate'
    ];

    public function employee(){
        return $this->belongsTo('App\HR\Employee', 'EmployeeID', 'EmployeeID');
    }
}
