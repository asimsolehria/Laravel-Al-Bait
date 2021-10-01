<?php

namespace App\HR;

use Illuminate\Database\Eloquent\Model;

class AcrGrading extends Model
{
    protected $table = 'acr_grading';
    protected $primaryKey = 'ACRGID';

    protected $fillable = [
        'RatingFrom',
        'RatingTo',
        'Definition'
    ];
}
