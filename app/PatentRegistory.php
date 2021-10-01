<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PatentRegistory extends Model
{

    protected $table = 'cf_patient_visits';
    protected $fillable = [
        'cfpvID', 'cfpID', 'EvaluatorID', 'TitleOfEvaluaterID', 'VisitDate', 'relapse', 'LastExpectedVisit', 'NextVisitDate',
        'ReasonID','LF_Varus','LF_Caves','LF_Aductus','LF_Equines','LF_HF_Posterior','LF_HF_Empty','LF_HF_Rigid', 'LF_HF_Coverage',
        'LF_HF_Crease','LF_HF_Border','RF_Varus','RF_Caves','RF_Aductus','RF_Equines','RF_HF_Posterior','RF_HF_Empty','RF_HF_Rigid',
        'RF_HF_Coverage' , 'RF_HF_Crease' , 'RF_HF_Border','LF_TreatmentID','LF_NameCasterID','LF_CasterNumber','LF_DegreeAbduction',
        'LF_DegreeDorsiflexion','LF_BraceComplication','LF_Problem','LF_ActionTaken','LF_SurgaryTypeID','RF_TreatmentID','RF_NameCasterID',
        'RF_CasterNumber','RF_DegreeAbduction','RF_DegreeDorsiflexion','RF_BraceComplication','RF_Problem','RF_ActionTaken','RF_SurgaryTypeID',
        'Complication','ComplicationDesc','ComplicationTreatment','TreatmentResult','Comments','NextAdviceID','UserID'
    ];
}

