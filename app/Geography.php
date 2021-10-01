<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Geography extends Model
{
    public $timestamps = false;
    protected $primaryKey='CountryID';
    protected $table = 'setup_ad_countries';
    protected $fillable = ['CountryID' , 'CountryName'];

}
