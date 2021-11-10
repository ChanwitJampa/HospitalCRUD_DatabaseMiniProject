<?php class PatientInController{
    public static function index(){
        $patientInList = PatientIn::getAll();
        
        require_once("views/patientIn/index_patientIn.php");
    }

    public function newPatientIn(){
        $fieldHospitalList = FieldHospital::getAll();
        require_once("views/patientIn/new_patientIn.php");
    }

    public function addPatientIn(){
        $ID = $_GET['patientInID'];
        $date = $_GET['patientInDate'];
        $fieldHospitalID = $_GET['fieldHospitalID'];
        $PT_PCR = $_GET['PT_PCR'];
        PatientIn::add($ID, $date, $fieldHospitalID, $PT_PCR);
        PatientInController::index();
    }

    public function deleteConfirm(){
        $ID = $_GET['ID'];
        $patientIn = PatientIn::get($ID);
        require_once("views/patientIn/deleteConfirm_PatientIn.php");
    }

    public function delete(){
        $ID = $_GET['ID'];
        PatientIn::delete($ID);
        PatientInController::index();
    }

    public function updateForm(){
        $ID = $_GET['ID'];
        $patientIn = PatientIn::get($ID);
        $fieldHospitalList = FieldHospital::getAll();
        require_once("views/patientIn/updateForm_patientIn.php");
    }

    public function update(){
        $ID = $_GET['ID'];
        $PID = $_GET['patientInIDNew'];
        $date = $_GET['patientInAddDateNew'];
        $fieldHospitalID =$_GET['fieldHospitalIDNew'];
        $PT_PCR = $_GET['PT_PCRNew'];

        PatientIn::update($PID,$date,$fieldHospitalID,$PT_PCR,$ID);
        PatientInController::index();
    }

    public function search(){
        $key = $_GET['key'];
        
        $patientInList = PatientIn::search($key);
        require_once("views/patientIn/index_patientIn.php");
    }
}
?>