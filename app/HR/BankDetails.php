<?php

namespace App\HR;

use Illuminate\Database\Eloquent\Model;

class BankDetails extends Model
{
    protected $table = 'hr_employee_bankdetails';
    protected $primaryKey = 'BankdetID';

    protected $fillable = [
        'EmployeeID',
        'AccountNo',
        'bankBranch',
        'OpeningYear',
        'MainSource',
        'balanceon30june',
        'year',
        'AccountTypeID',
        'StatusID'
    ];
}
