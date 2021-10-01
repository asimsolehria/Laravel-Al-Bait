<?php

namespace App\HR;

use Illuminate\Database\Eloquent\Model;

class EmployeeEducation extends Model
{
    protected $table = 'hr_employee_education';
    protected $primaryKey = 'EducationID';

    protected $fillable = [
        'EmployeeID',
        'EducationLevelID',
        'ObtainedMarks',
        'TotalMarks',
        'PassingYear',
        'Institute'
    ];

    // public function educationLevel(){
    //     return $this->hasOne('App\HR\SetupEducationLevel', 'EducationLevelID', 'EducationLevelID');
    // }

    // public function employee(){
    //     return $this->belongsTo('App\HR\Employee', 'EmployeeID', 'EmployeeID');
    // }
}
