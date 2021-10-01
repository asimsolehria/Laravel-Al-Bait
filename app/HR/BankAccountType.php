<?php

namespace App\HR;

use Illuminate\Database\Eloquent\Model;

class BankAccountType extends Model
{
    protected $table = 'hr_setup_bankaccountype';
    protected $primaryKey = 'AccountTypeID';

    protected $fillable = [
        'Title'
    ];
}
