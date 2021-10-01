<?php

namespace App\HR;

use Illuminate\Database\Eloquent\Model;

class SetupPromotionStatus extends Model
{
    protected $table = 'setup_hr_promotion_status';
    protected $primaryKey = 'PromotionStatusID';

    protected $fillable = ['Status'];

    public function promotions(){
        return $this->hasMany('App\HR\EmployeePromotion', 'PromotionStatusID', 'PromotionStatusID');
    }
}
