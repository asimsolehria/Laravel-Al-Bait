<?php

namespace App\HR;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'hr_employees';
    protected $primaryKey = 'EmployeeID';

    protected $fillable = [
        'Name',
        'FatherName',
        'GenderID',
        'DateOfBirth',
        'Cnic',
        'ContactNumber',
        'MobileNetworkID',
        'PresentAddress',
        'PermanentAddress',
        'JobDescription',
        'Nominee',
        'PicturePath'
    ];

    // public function gender(){
    //     return $this->hasOne('App\HR\SetupGender', 'GenderID', 'GenderID');
    // }

    // public function disciplinaryActions(){
    //     return $this->hasMany('App\HR\EmployeeDisciplinaryAction', 'EmployeeID', 'EmployeeID');
    // }

    // public function education(){
    //     return $this->hasMany('App\HR\EmployeeEducation', 'EmployeeID', 'EmployeeID');
    // }

    // public function experiences(){
    //     return $this->hasMany('App\HR\EmployeeExperience', 'EmployeeID', 'EmployeeID');
    // }

    // public function leaves(){
    //     return $this->hasMany('App\HR\EmployeeLeave', 'EmployeeID', 'EmployeeID');
    // }

    // public function promotions(){
    //     return $this->hasMany('App\HR\EmployeePromotion', 'EmployeeID', 'EmployeeID');
    // }

    // public function rewards(){
    //     return $this->hasMany('App\HR\EmployeeReward', 'EmployeeID', 'EmployeeID');
    // }

    // public function attendance(){
    //     return $this->hasMany('App\HR\EmployeeAttendance', 'EmployeeID', 'EmployeeID');
    // }
}
