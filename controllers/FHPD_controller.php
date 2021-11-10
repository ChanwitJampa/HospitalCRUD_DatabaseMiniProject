<?php class FHPDController{
    public static function index()
        {
            
            $FHPDList=FHPD::getAll();
            $fieldHospitalList=FieldHospital::getAll();
            require_once('views/FHPD/index_FHPD.php');
        }
        public function newFHPD(){
            
            $fieldHospitalList = FieldHospital::getAll();
            echo "newFHPD";
            $colorList = array("Green","Yellow","Red");
            require_once('views/FHPD/new_FHPD.php');
        }
        public function addFHPD(){
            $FHPDID = $_GET['FHPDID'];
            $fieldHospitalID = $_GET['fieldHospitalID'];
            $FHPDColor = $_GET['FHPDColor'];
            $FHPDNumber = $_GET['FHPDNumber'];
            FHPD::add($FHPDID,$fieldHospitalID,$FHPDColor,$FHPDNumber);
            FHPDController::index();
        }

        public function updateForm(){
            $ID = $_GET['ID'];
            $FHPD = FHPD::get($ID);
            $fieldHospitalList = FieldHospital::getAll();
            $colorList = array("Green","Yellow","Red");
            require_once('views/FHPD/updateForm_FHPD.php');
        }

        public function update(){
            $ID = $_GET['ID'];
            $FHPDID = $_GET['FHPDIDNew'];
            $fielsHospitalID = $_GET['fieldHospitalIDNew'];
            $FHPDColor = $_GET['FHPDColorNew'];
            $FHPDNumber= $_GET['FHPDNumberNew'];
            FHPD::update( $FHPDID, $fielsHospitalID,$FHPDColor ,$FHPDNumber,$ID);
            FHPDController::index();

        }

        public function search(){
            $key = $_GET['key'];
            echo "$key";
            $FHPDList = FHPD::search($key); 
            require_once('views/FHPD/index_FHPD.php');
        }

        public function deleteConfirm(){
            $ID = $_GET['ID'];
            $FHPD = FHPD::get($ID);
            require_once('views/FHPD/deleteConfirm_FHPD.php');
        }

        public function delete(){
            $ID = $_GET['ID'];
            FHPD::delete($ID);
            FHPDController::index();
        }
}
?>