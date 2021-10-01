<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class as_appointment_info extends Model
{
    public $primaryKey = 'AppointmentID ';
    public $fillable = [
        'PatientType',
        'PatientName',
        'PASSPORT',
        'CNIC',
        'FName',
        'ContactNumber',
        'Gender',
        'AgeYear',
        'toYear',
        'AgeMonth',
        'DOB',
        'CountryID',
        'ProvinceID',
        'DistrictID',
        'PostalAddress',
        'RelationType',
        'MobileNetworkID',
        'OccupationCatID',
        'OccupationID',
        'DepartmentID',
        'DoctorID',
        'UserID'
    ];
}