<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rewards extends Model
{
    protected $table = 'hr_employee_rewards';
    protected $primaryKey = 'RewardID';

    protected $fillable = [
        'EmployeeID',
        'Title',
        'Description',
        'DateOfIssue',
        'IssuedByPerson',
        'IssuedByOrgnization',
        'Attachment',
        'UserID'
    ];
}
