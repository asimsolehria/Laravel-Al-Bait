<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dept extends Model
{
    public $timestamps = false;
    protected $primaryKey ='DeptID';
    protected $table='setup_hr_departments';
    protected $fillable = ['DeptName','DeptCatID'];
}
