<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OccupationDetail extends Model
{
    public $timestamps = false;
    protected $primaryKey='OccupationID';
    protected $table = 'setup_hr_occupations';
    protected $fillable = ['OccupationID' , 'OccupationTitle','OccupationCategoryID'];
}
