<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Geography_Province extends Model
{
    public $timestamps = false;
    protected $primaryKey='ProvinceID';
    protected $table = 'setup_ad_provinces';
    protected $fillable = ['ProvinceID' , 'ProvinceName', 'CountryID'];
}
