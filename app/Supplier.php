<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table = 'phar_suppliers_infos';
    protected $fillable = [
        'SupplierID', 'CompanayTitle', 'SupplierAccountNo', 'SupplierFocalPerson', 'FocalPersonContact', 'CompanyAddress', 'CompanyContact'
    ];
}
