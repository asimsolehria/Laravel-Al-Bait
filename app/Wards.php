<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wards extends Model
{
    protected $table = 'wrd_ward_infos';
    protected $fillable = [
        'WardID', 'WardNo', 'WardTitle', 'DeptID', 'wrdStatusID'
    ];
}
