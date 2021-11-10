<?php class FHPD{
    public $FHPDID,
    $fieldHospitalID,
    $FHPDColor,
    $FHPDNumber,
    $fieldHospitalName;

    public function __construct($ID,$fieldID, $color, $number,$fieldHospitalName){
        $this->FHPDID = $ID;
        $this->fieldHospitalID = $fieldID;
        $this->FHPDColor = $color;
        $this->FHPDNumber = $number;
        $this->fieldHospitalName = $fieldHospitalName;
    }
    public static function get($ID){
        require("connection_connect.php");
        $sql = "SELECT * FROM FieldHospitalPatientDetail NATURAL JOIN FieldHospital where FieldHospitalPatientDetail_ID = '$ID'";
        $result = $conn->query($sql);
        $myRow = $result->fetch_assoc();

        $FHPDID = $myRow['FieldHospitalPatientDetail_ID'];
        $fieldHospitalID= $myRow['FieldHospital_ID'];
        $FHPDColor = $myRow['FieldHospitalPatientDetail_Color'];
        $FHPDNumber = $myRow['FieldHospitalPatientDetail_Number'];
        $fieldHospitalName = $myRow['FieldHospital_Name'];
        require("connection_close.php");

        return new FHPD( $FHPDID, $fieldHospitalID, $FHPDColor, $FHPDNumber,$fieldHospitalName);
    }

    public static function getAll(){
        $FHPDList = [];
        require("connection_connect.php");
        
        $sql = "SELECT * FROM FieldHospitalPatientDetail NATURAL JOIN FieldHospital";
        $result = $conn->query($sql);
        
        while($myRow = $result->fetch_assoc()){

            $FHPDID = $myRow['FieldHospitalPatientDetail_ID'];
            $fieldHospitalID= $myRow['FieldHospital_ID'];
            $FHPDColor = $myRow['FieldHospitalPatientDetail_Color'];
            $FHPDNumber = $myRow['FieldHospitalPatientDetail_Number'];
            $fieldHospitalName = $myRow['FieldHospital_Name'];
            $FHPDList[] = new FHPD( $FHPDID, $fieldHospitalID, $FHPDColor, $FHPDNumber,$fieldHospitalName);
        }
        
        require("connection_close.php");
        return $FHPDList;
    }

    public static function add($ID,$fieldHospitalID,$color,$number){
        require("connection_connect.php");
        echo ("$ID,$fieldHospitalID,$color,$number");
        $sql = "INSERT INTO `FieldHospitalPatientDetail` (`FieldHospitalPatientDetail_ID`, `FieldHospital_ID`, `FieldHospitalPatientDetail_Color`, `FieldHospitalPatientDetail_Number`) VALUES ('$ID', '$fieldHospitalID', '$color', '$number');";
        $result = $conn->query($sql);
        require("connection_close.php");
    }

    public static function update($FID,$fieldHospitalID,$color,$number,$ID){
        require("connection_connect.php");
        echo ("$FID,$fieldHospitalID,$color,$number");
        $sql = "UPDATE `FieldHospitalPatientDetail` SET `FieldHospitalPatientDetail_ID` = '$FID', `FieldHospital_ID` = '$fieldHospitalID', `FieldHospitalPatientDetail_Color` = '$color', `FieldHospitalPatientDetail_Number` = '$number' WHERE `FieldHospitalPatientDetail`.`FieldHospitalPatientDetail_ID` = '$ID';";
        $result=$conn->query($sql);
        echo "confirm update";
        require("connection_close.php");


    }

    public static function search($key){
        $FHPDList = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM FieldHospitalPatientDetail NATURAL JOIN FieldHospital
        where FieldHospitalPatientDetail_ID like '%$key%' or FieldHospital_Name like '%$key%' or FieldHospitalPatientDetail_Color like '%$key%' or FieldHospitalPatientDetail_Number like '%$key%'";
        $result = $conn->query($sql);
        while($myRow = $result->fetch_assoc()){

            $FHPDID = $myRow['FieldHospitalPatientDetail_ID'];
            $fieldHospitalID= $myRow['FieldHospital_ID'];
            $FHPDColor = $myRow['FieldHospitalPatientDetail_Color'];
            $FHPDNumber = $myRow['FieldHospitalPatientDetail_Number'];
            $fieldHospitalName = $myRow['FieldHospital_Name'];
            $FHPDList[] = new FHPD( $FHPDID, $fieldHospitalID, $FHPDColor, $FHPDNumber,$fieldHospitalName);
        }
        
        require("connection_close.php");
        return $FHPDList;
    }

    public static function delete($ID){
        require("connection_connect.php");
        $sql = "Delete from FieldHospitalPatientDetail where FieldHospitalPatientDetail.FieldHospitalPatientDetail_ID='$ID'";
        $result = $conn->query($sql);
        require("connection_close.php");
    }
    

}