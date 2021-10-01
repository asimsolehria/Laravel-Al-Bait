<?php

namespace App\HR;

use Illuminate\Database\Eloquent\Model;

class DisciplinaryActionType extends Model

    {
        protected $table = 'setup_hr_disciplinary_action_types';
        protected $primaryKey = 'ActionID';

        protected $fillable = [
            'ActionID',
            'ActionType',
        ];
    }

