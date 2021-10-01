<?php

namespace App\HR;

use Illuminate\Database\Eloquent\Model;

class AcrEvaluationFactor extends Model
{
    protected $table = 'acr_factor_evaluations';
    protected $primaryKey = 'FEID';

    protected $fillable = [
        'FETID',
        'MainQuestion',
        'SubQuestion',
        'option1',
        'option2',
        'option3',
        'option4',
        'option5',
        'option6',
        'FEStatus',
        'UserID'


    ];
}
