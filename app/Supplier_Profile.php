<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier_Profile extends Model
{
    use HasFactory;

    public $table = 'supplier_profiles';

    protected $primaryKey  = 'SupplierId';

    protected $fillable = [
		'SupplierName', 
        'ContactNo', 
	];
}
