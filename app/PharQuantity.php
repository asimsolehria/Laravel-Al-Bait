<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PharQuantity extends Model
{
    protected $table = 'setup_phar_quantity_types';
    protected $fillable = [
        'ItemQtyTypeID', 'ItemQtyType'
    ];
}
