<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OccupationCatagory extends Model

    {
        public $timestamps = false;
        protected $primaryKey='OccupationCatID';
        protected $table = 'setup_hr_occupation_categories';
        protected $fillable = ['OccupationCatID' , 'OccupationCategory'];
    }


