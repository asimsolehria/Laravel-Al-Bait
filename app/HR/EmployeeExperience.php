<?php

namespace App\HR;

use Illuminate\Database\Eloquent\Model;

class EmployeeExperience extends Model
{
    protected $table = 'hr_employee_experiences';
    protected $primaryKey = 'ExperienceID';

    protected $fillable = [
        'EmployeeID',
        'JobTypeID',
        'FromDate',
        'ToDate',
        'ReasonToLeave',
        'BPS',
        'JobTitle',
        'Organization'
    ];

    public function jobType(){
        return $this->hasOne('App\HR\SetupJobType', 'JobTypeID', 'JobTypeID');
    }

    public function employee(){
        return $this->belongsTo('App\HR\Employee', 'EmployeeID', 'EmployeeID');
    }
}
