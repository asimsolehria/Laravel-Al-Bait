<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project_Profile extends Model
{
    use HasFactory;

    public $table = 'project_profiles';

    protected $primaryKey  = 'ProjectId';

    protected $fillable = [
		'Project_Code', 
        'Project_title',
        'location', 
        'Project_Overview', 
        'ClientID', 
        'Focal_PersonID', 
        'SupervisorID',
	];
}
