<?php

namespace App\HR;

use Illuminate\Database\Eloquent\Model;

class SetupJobType extends Model
{
    protected $table = 'setup_hr_job_types';
    protected $primaryKey = 'JobTypeID';

    protected $fillable = ['JobType'];

    public function experiences(){
        return $this->hasMany('App\HR\EmployeeExperience', 'JobTypeID', 'JobTypeID');
    }
}
