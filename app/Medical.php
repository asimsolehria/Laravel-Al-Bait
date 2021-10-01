<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medical extends Model
{
    public $timestamps = false;
    protected $primaryKey='ReferOutSourceID';
    protected $table = 'setup_opd_referout_sources';
    protected $fillable = ['ReferOutSourceID' , 'ReferOutSource'];
}
