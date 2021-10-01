<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChartofAccount extends Model
{
    protected $table = 'chartofaccounts';
	protected $primaryKey  = 'SeqID';
	protected $fillable = [
		'Account_Code', 
        'Account_Name', 
        'Description', 
        'IsFirstLevel', 
        'Level', 
        'Parent_Code', 
        'Is_Transaction',
        'Is_Active', 
        'project_id', 
        'created_by', 
        'created_at', 
        'updated_by', 
        'updated_at'
	];
}
