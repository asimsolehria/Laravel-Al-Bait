<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opd extends Model
{
    protected $table = 'opd_visits';
    protected $fillable = [
        'AppointmentID', 'PRNo', 'ob1', 'ob2', 'ob3', 'ob4', 'AdviceID', 'UserID',
    ];
}
