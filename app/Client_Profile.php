<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client_Profile extends Model
{
    use HasFactory;

    public $table = 'client_profiles';

    protected $primaryKey  = 'ClientId';

    protected $fillable = [
		'Client_Name', 
        'Contact_No',
        'CNIC',
        'Address'
	];
}
