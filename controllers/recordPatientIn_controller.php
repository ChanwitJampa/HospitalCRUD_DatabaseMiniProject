<?php class RecordPatientInController{
    public static function index(){
        
        $recordPatientInList = RecordPatientIn::getAll();
        require_once("views/recordPatientIn/index_recordPatientIn.php");
    }
    public function newRecordPatientIn(){
        $patientInList = PatientIn::getAll();
        require_once("views/recordPatientIn/new_recordPatientIn.php");
    }

    public function addRecordPatientIn(){
        $RID = $_GET['recordPatientInID'];
        $date = $_GET['recordPatientInDate'];
        $detail = $_GET['recordPatientInDetail'];
        $tem = $_GET['recordPatientInTem'];
        $PID = $_GET['patientInID'];

        RecordPatientIn::add($RID, $date, $detail, $tem ,$PID);
        RecordPatientInController::index();
    }

    public function deleteConfirm(){
        $RID = $_GET['ID'];
        $recordPatientIn = RecordPatientIn::get($RID);
        require_once("views/recordPatientIn/deleteConfirm_PatientIn.php");
    }

    public function delete(){
        $RID = $_GET['ID'];
        RecordPatientIn::delete($RID);
        RecordPatientInController::index();
    }

    public function updateForm(){
        $ID = $_GET['ID'];
        $recordPatientIn = RecordPatientIn::get($ID);
        $patientInList = PatientIn::getAll();
        require_once("views/recordPatientIn/updateForm_patientIn.php");
    }

    public function update(){
        $RID = $_GET['recordPatientInIDNew'];
        $date = $_GET['recordPatientInDateNew'];
        $detail = $_GET['recordPatientInDetailNew'];
        $tem = $_GET['recordPatientInTemNew'];
        $PID = $_GET['patientInIDNew'];
        $ID = $_GET['ID'];

        RecordPatientIn::update($RID, $date, $detail, $tem, $PID, $ID);
        RecordPatientInController::index();
    }

    public function search(){
        $key = $_GET['key'];
        $recordPatientInList = RecordPatientIn::search($key);
        require_once("views/recordPatientIn/index_recordPatientIn.php");
    }





}
?>