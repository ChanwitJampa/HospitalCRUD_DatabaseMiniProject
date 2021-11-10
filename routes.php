<?php
$controllers = array('pages'=>['home','error'],
'fieldHospital'=>['index','updateForm','update','deleteConfirm','delete','newFieldHospital','addFieldHospital','search'],
'FHPD'=>['index','updateForm','update','deleteConfirm','delete','newFHPD','addFHPD','search'],
'patientIn'=>['index','updateForm','update','deleteConfirm','delete','newPatientIn','addPatientIn','search'],
'recordPatientIn'=>['index','updateForm','update','deleteConfirm','delete','newRecordPatientIn','addRecordPatientIn','search'],

); //list controller and action
function call($controller,$action)
{
    require_once("controllers/".$controller."_controller.php");
    switch($controller)
    {
        case "pages":   $controller = new PagesController();
                        break;
        case "fieldHospital": 
                        require_once("models/fieldHospitalModel.php"); 
                        require_once("models/amphuresModel.php");
                        require_once("models/provincesModel.php");
                        $controller = new FieldHospitalController();
                        break;
        case "FHPD":
                        require_once("models/fieldHospitalModel.php");
                        require_once("models/FHPDModel.php");
                        $controller = new FHPDController();
                        break;
        case "patientIn":
                       
                        require_once("models/fieldHospitalModel.php") ; 
                        require_once("models/patientInModel.php");
                        $controller = new PatientInController();   
                        break;    
        case "recordPatientIn":
                        require_once("models/patientInModel.php");
                        require_once("models/recordPatientIn.php");
                        $controller = new RecordPatientInController();
                        break;   
    
                      
    }

    $controller->{$action}();
}

if(array_key_exists($controller,$controllers))
{
    if(in_array($action,$controllers[$controller]))
    {
      call($controller,$action);
    }
    else
    {
      call('pages','error');
    }
}
else
{
  call('pages','error');
}
?>
