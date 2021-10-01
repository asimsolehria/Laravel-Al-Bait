<?php

namespace App\HR;

use Illuminate\Database\Eloquent\Model;

class SetupDisciplinaryActionType extends Model
{
    protected $table = 'setup_hr_disciplinary_action_types';
    protected $primaryKey = 'ActionID';

    protected $fillable = ['ActionType'];

    public function disciplinaryActions(){
        return $this->hasMany('App\HR\EmployeeDisciplinaryAction', 'ActionID', 'ActionID');
    }
}
