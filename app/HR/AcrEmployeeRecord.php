<?php

namespace App\HR;

use Illuminate\Database\Eloquent\Model;

class AcrEmployeeRecord extends Model
{
    protected $table = 'acr_employee_record';
    protected $primaryKey = 'ACRID';

    protected $fillable = [
        'Acr_IssueDate',
        'EmployeeID',
        'FromPeriod',
        'ToPeriod',
        'AdditionalDuties',
        'CareerDevelopment',
        'LeaveSick',
        'LeaveWithoutFullPay',
        'LeaveShort',
        'ReportingOfficer1',
        'RO1Designation',
        'RO1Status',
        'RO1Updated_on',
        'PenPicture',
        'ReportingOfficer2',
        'RO2Designation',
        'RO2Status',
        'RO2Updated_on',
        'GeneralRemarks',
        'CounterSignOfficer',
        'CSDesignation',
        'CSStatus',
        'CSUpdated_on',
        'UserID'


    ];
}
