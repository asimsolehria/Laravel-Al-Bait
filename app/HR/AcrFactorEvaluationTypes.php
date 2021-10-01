<?php

namespace App\HR;

use Illuminate\Database\Eloquent\Model;

class AcrFactorEvaluationTypes extends Model
{
    protected $table = 'acr_factor_evaluation_types';
    protected $primaryKey = 'FETID';

    protected $fillable = [
        'QuestionTypeTitle'
    ];
}
