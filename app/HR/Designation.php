<?php

namespace App\HR;

use Illuminate\Database\Eloquent\Model;

class Designation extends Model
{
    protected $table = 'setup_hr_designations';
    protected $primaryKey = 'DesignationID';

    protected $fillable = [
        'DesignationTitle'
    ];
}
