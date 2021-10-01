<?php

namespace App\HR;

use Illuminate\Database\Eloquent\Model;

class EmployeePromotion extends Model
{
    protected $table = 'hr_employee_promotions';
    protected $primaryKey = 'PromotionID';

    protected $fillable = [
        'EmployeeID',
        'DeptCatID',
        'DeptID',
        'DesignationID',
        'PayScaleID',
        'DateOfPosting',
        'PPStatusID'
    ];

    // public function promotionStatus(){
    //     return $this->hasOne('App\HR\SetupPromotionStatus', 'PromotionStatusID', 'PromotionStatusID');
    // }

    // public function employee(){
    //     return $this->belongsTo('App\HR\Employee', 'EmployeeID', 'EmployeeID');
    // }
}
