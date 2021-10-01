<?php

namespace App\HR;

use Illuminate\Database\Eloquent\Model;

class EmployeeReward extends Model
{
    protected $table = 'hr_employee_rewards';
    protected $primaryKey = 'RewardID';

    protected $fillable = [
        'EmployeeID',
        'Title',
        'Description',
        'DateOfIssue'
    ];

    public function employee(){
        return $this->belongsTo('App\HR\Employee', 'EmployeeID', 'EmployeeID');
    }
}
