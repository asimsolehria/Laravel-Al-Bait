<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pharmacy extends Model
{
    protected $table = 'phar_item_infos';
    protected $fillable = [
        'ItemID', 'ItemName', 'ItemCatID', 'ItemBarCode', 'ReorderLevel', 'PacksNBox', 'ItemsPerPack'
    ];
}
