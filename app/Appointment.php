<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $table = 'as_appointment_infos';
    protected $primaryKey ='AppointmentID';
    protected $fillable = [
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
        'DepartmentID',
        'DoctorID',
        'UserID',
    ];
}
