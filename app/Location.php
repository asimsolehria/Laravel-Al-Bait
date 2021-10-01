<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $table = 'setup_phar_items_location';
    protected $fillable = [
        'ItemLocID', 'ItemLocation'
    ];
}
