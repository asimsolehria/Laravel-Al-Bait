<?php

namespace App\HR;

use Illuminate\Database\Eloquent\Model;

class SetupGender extends Model
{
    protected $table = 'setup_hr_gender';
    protected $primaryKey = 'GenderID';

    protected $fillable = ['GenderType'];

    // public function employees(){
    //     return $this->hasMany('App\HR\Employee', 'GenderID', 'GenderID');
    // }
}
