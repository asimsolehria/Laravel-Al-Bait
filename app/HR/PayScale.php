<?php

namespace App\HR;

use Illuminate\Database\Eloquent\Model;

class PayScale extends Model
{
    protected $table = 'setup_hr_payscale';
    protected $primaryKey = 'PayScaleID';

    protected $fillable = [
        'PayScaleTitle'
    ];
}
