<?php class PatientIn
{
    public $patientInID,
        $patientInAddDate,
        $fieldHospitalID,
        $PT_PCR,
        $fieldHospitalName;

    public function __construct($patientInID, $patientInAddDate, $fieldHospitalID, $PT_PCR, $fieldHospitalName)
    {
        $this->patientInID = $patientInID;
        $this->patientInAddDate = $patientInAddDate;
        $this->fieldHospitalID = $fieldHospitalID;
        $this->PT_PCR = $PT_PCR;
        $this->fieldHospitalName = $fieldHospitalName;
    }

    public static function getAll()
    {
        $patientInList = [];
        require("connection_connect.php");

        $sql = "SELECT * from PatientIn NATURAL JOIN FieldHospital";
        $result = $conn->query($sql);

        while ($myRow = $result->fetch_assoc()) {

            $patientInID = $myRow['PatientIn_ID'];
            $patientInAddDate = $myRow['PatientIn_AddDate'];
            $fieldHospitalID = $myRow['FieldHospital_ID'];
            $PT_PCR = $myRow['PT-PCR_ID'];
            $fieldHospitalName = $myRow['FieldHospital_Name'];

            $patientInList[] = new PatientIn($patientInID, $patientInAddDate, $fieldHospitalID,  $PT_PCR, $fieldHospitalName);
        }
        require("connection_close.php");
        return $patientInList;
    }
    public static function get($ID)
    {
        require("connection_connect.php");
        $sql = "SELECT * from PatientIn NATURAL JOIN FieldHospital where PatientIn_ID = '$ID'";
        $result = $conn->query($sql);
        $myRow = $result->fetch_assoc();

        $patientInID = $myRow['PatientIn_ID'];
        $patientInAddDate = $myRow['PatientIn_AddDate'];
        $fieldHospitalID = $myRow['FieldHospital_ID'];
        $PT_PCR = $myRow['PT-PCR_ID'];
        $fieldHospitalName = $myRow['FieldHospital_Name'];

        require("connection_close.php");
        return new PatientIn($patientInID, $patientInAddDate, $fieldHospitalID,  $PT_PCR, $fieldHospitalName);
    }


    public static function add($ID, $date, $fieldHospitalID, $PT_PCR)
    {
        require("connection_connect.php");
        echo ("$ID,$date,$fieldHospitalID,$PT_PCR");
        $sql = "INSERT INTO `PatientIn` (`PatientIn_ID`, `PatientIn_AddDate`, `fieldHospital_ID`, `PT-PCR_ID`) values ('$ID', '$date', '$fieldHospitalID', '$PT_PCR') ";
        $result = $conn->query($sql);
        require("connection_close.php");
    }

    public static function delete($ID)
    {
        require("connection_connect.php");
        $sql = "Delete from PatientIn where PatientIn.PatientIn_ID='$ID'";
        $result = $conn->query($sql);
        require("connection_close.php");
    }

    public static function update($PID, $date, $fieldHospitalID, $PT_PCR, $ID)
    {
        require("connection_connect.php");
        echo "$PID,$date,$fieldHospitalID,$PT_PCR";
        $sql = "UPDATE `PatientIn` SET `PatientIn_ID` = '$PID', `PatientIn_AddDate` = '$date', `FieldHospital_ID` = '$fieldHospitalID', `PT-PCR_ID` = '$PT_PCR' WHERE `PatientIn`.`PatientIn_ID` = '$ID';";
        $result = $conn->query($sql);
        require("connection_close.php");
    }

    public static function search($key)
    {
        $patientInList = [];
        require("connection_connect.php");
        $sql = "SELECT * from PatientIn natural join FieldHospital where PatientIn_ID like '%$key%' or PatientIn_AddDate like '%$key%' or FieldHospital_Name like '%$key%' or  `PT-PCR_ID` like '%$key%'";

        $result = $conn->query($sql);

        while ($myRow = $result->fetch_assoc()) {

            $patientInID = $myRow['PatientIn_ID'];
            $patientInAddDate = $myRow['PatientIn_AddDate'];
            $fieldHospitalID = $myRow['FieldHospital_ID'];
            $PT_PCR = $myRow['PT-PCR_ID'];
            $fieldHospitalName = $myRow['FieldHospital_Name'];

            $patientInList[] = new PatientIn($patientInID, $patientInAddDate, $fieldHospitalID,  $PT_PCR, $fieldHospitalName);
        }
        require("connection_close.php");

        return $patientInList;
    }
}
