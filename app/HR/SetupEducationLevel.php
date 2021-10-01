<?php

namespace App\HR;

use Illuminate\Database\Eloquent\Model;

class SetupEducationLevel extends Model
{
    protected $table = 'setup_hr_education_levels';
    protected $primaryKey = 'EducationLevelID';

    protected $fillable = ['EducationLevel'];

    public function educations(){
        return $this->hasMany('App\HR\EmployeeEducation', 'EducationLevelID', 'EducationLevelID');
    }
}
