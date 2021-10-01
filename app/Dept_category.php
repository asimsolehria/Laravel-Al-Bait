<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dept_category extends Model
{
    public $timestamps = false;
    protected $primaryKey ='DeptCatID';
    protected $table='setup_hr_department_categories';
    protected $fillable = ['DeptCategoryTitle'];
}
