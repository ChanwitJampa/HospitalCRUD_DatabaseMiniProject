<?php class FieldHospitalController{
    public static function  index()
        {
            $fieldHospitalList=FieldHospital::getAll();
            $amphuresList=Amphures::getAll();
            require_once('views/fieldHospital/index_fieldHospital.php');
        }
    public function updateForm(){
        $ID = $_GET['ID'];
        echo "ID is $ID";
        $fieldHospital=FieldHospital::get($ID);
        $amphuresList=Amphures::getAll();
        $provincesList=Provinces::getAll();

        echo "UpdateNow id is $fieldHospital->fieldHospitalID , $fieldHospital->fieldHospitalName";
        require_once('views/fieldHospital/updateForm_fieldHospital.php');
    }

    public function update(){
        $ID = $_GET['ID'];
        $fielsHospitalID = $_GET['fieldHospitalIDNew'];
        $fielsHospitalName = $_GET['fieldHospitalNameNew'];
        $fieldHospitalDate = $_GET['fieldHospitalDateNew'];
        $fieldHospitalAmphures= $_GET['amphuresNew'];
        FieldHospital::update( $fielsHospitalID, $fielsHospitalName,$fieldHospitalDate ,$fieldHospitalAmphures,$ID);
        FieldHospitalController::index();
    }

    public function deleteConfirm(){
        $ID = $_GET['fieldHospitalID'];
        echo "$ID";
        $fieldHospital = FieldHospital::get($ID);
        require_once('views/fieldHospital/deleteConfirm_fieldHospital.php');

    }

    public function delete(){
        $ID = $_GET['ID'];
        FieldHospital::delete($ID);
        FieldHospitalController::index();
    }
    
    public function newFieldHospital(){
        $amphuresList = Amphures::getAll();
        $provincesList = Provinces::getAll();
        require_once('views/fieldHospital/new_fieldHospital.php');
    }

    public function addFieldHospital(){
        $fieldHospitalID = $_GET['fieldHospitalID'];
        $fieldHospitalName = $_GET['fieldHospitalName'];
        $fieldHospitalDate = $_GET['fieldHospitalDate'];
        $fieldHospitalAmphures = $_GET['amphures'];
        FieldHospital::add($fieldHospitalID,$fieldHospitalName,$fieldHospitalDate,$fieldHospitalAmphures);
        FieldHospitalController::index();
    }

    public function search(){
        $key = $_GET['key'];
        $fieldHospitalList = FieldHospital::search($key);
        require_once('views/fieldHospital/index_fieldHospital.php');
    }
}
?>