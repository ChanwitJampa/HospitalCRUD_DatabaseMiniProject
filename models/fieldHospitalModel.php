<?php class FieldHospital
{
    public $fieldHospitalID,
        $fieldHospitalName,
        $fieldHospitalDate,
        $fieldHospitalAmphures,
        $fieldHospitalAmphuresName;

    // public function __construct( $ID,$name, $date,$amphures){
    //     $this->fieldHospitalID = $ID;
    //     $this->fieldHospitalName = $name;
    //     $this->fieldHospitalDate = $date;
    //     $this->fieldHospitalAmphures = $amphures;
    // }

    public function __construct($ID, $name, $date, $amphures, $amphuresName)
    {
        $this->fieldHospitalID = $ID;
        $this->fieldHospitalName = $name;
        $this->fieldHospitalDate = $date;
        $this->fieldHospitalAmphures = $amphures;
        $this->fieldHospitalAmphuresName = $amphuresName;
    }

    public static function getAll()
    {
        $fieldHospitalList = [];
        require("connection_connect.php");

        $sql = "select FieldHospital_ID,FieldHospital_Name,FieldHospital_Date,FieldHospital_Amphures,Amphures.name_th
        from FieldHospital inner JOIN Amphures ON Amphures.id=FieldHospital_Amphures";
        $result = $conn->query($sql);

        while ($myRow = $result->fetch_assoc()) {

            $fieldHospitalID = $myRow['FieldHospital_ID'];
            $fieldHospitalName = $myRow['FieldHospital_Name'];
            $fieldHospitalDate = $myRow['FieldHospital_Date'];
            $fieldHospitalAmphures = $myRow['FieldHospital_Amphures'];
            $fieldHospitalAmphuresName = $myRow['name_th'];

            $fieldHospitalList[] = new FieldHospital($fieldHospitalID, $fieldHospitalName, $fieldHospitalDate, $fieldHospitalAmphures, $fieldHospitalAmphuresName);
        }
        require("connection_close.php");
        return $fieldHospitalList;
    }

    public static function get($ID)
    {
        require("connection_connect.php");
        $sql = "select FieldHospital_ID,FieldHospital_Name,FieldHospital_Date,FieldHospital_Amphures,Amphures.name_th
        from FieldHospital inner JOIN Amphures ON Amphures.id=FieldHospital_Amphures where FieldHospital_ID='$ID'";
        $result = $conn->query($sql);
        $myRow = $result->fetch_assoc();

        $fieldHospitalID = $myRow['FieldHospital_ID'];
        $fieldHospitalName = $myRow['FieldHospital_Name'];
        $fieldHospitalDate = $myRow['FieldHospital_Date'];
        $fieldHospitalAmphures = $myRow['FieldHospital_Amphures'];
        $fieldHospitalAmphuresName = $myRow['name_th'];
        require("connection_close.php");

        $fieldHospital = new FieldHospital($fieldHospitalID, $fieldHospitalName, $fieldHospitalDate, $fieldHospitalAmphures, $fieldHospitalAmphuresName);
        return $fieldHospital;
    }

    public static function update($fieldHospitalID, $fieldHospitalName, $fieldHospitalDate, $fieldHospitalAmphures, $ID)
    {
        require("connection_connect.php");
        echo ">>>$fielsHospitalID, $fielsHospitalName,$fieldHospitalDate ,$fieldHospitalAmphures,$ID";
        $sql = "UPDATE `FieldHospital` SET `FieldHospital_ID` = '$fieldHospitalID', `FieldHospital_Name` = '$fieldHospitalName', `FieldHospital_Date` = '$fieldHospitalDate', `FieldHospital_Amphures` = '$fieldHospitalAmphures' WHERE `FieldHospital`.`FieldHospital_ID` = '$ID';";
        $result = $conn->query($sql);
        require("connection_close.php");
    }

    public static function delete($ID)
    {
        require("connection_connect.php");
        $sql = "Delete from FieldHospital where FieldHospital.FieldHospital_ID='$ID'";
        $result = $conn->query($sql);
        require("connection_close.php");
    }

    public static function add($ID, $name, $date, $amphures)
    {
        require("connection_connect.php");
        echo ("$ID,$name,$date,$amphures");
        $sql = "INSERT INTO `FieldHospital` (`FieldHospital_ID`, `FieldHospital_Name`, `FieldHospital_Date`, `FieldHospital_Amphures`) VALUES ('$ID', '$name', '$date', '$amphures');";
        $result = $conn->query($sql);
        require("connection_close.php");
    }

    public static function search($key)
    {
        require("connection_connect.php");
        $sql = $sql = "SELECT FieldHospital_ID, FieldHospital_Name,FieldHospital_Date,FieldHospital_Amphures,name_th FROM FieldHospital inner JOIN Amphures on FieldHospital_Amphures = id
             where FieldHospital_ID like '%$key%' or FieldHospital_Name like '%$key%' or FieldHospital_Date like '%$key%' or FieldHospital_Amphures like '%$key%' or name_th like '%$key%'";
        $result = $conn->query($sql);

        while ($myRow = $result->fetch_assoc()) {

            $fieldHospitalID = $myRow['FieldHospital_ID'];
            $fieldHospitalName = $myRow['FieldHospital_Name'];
            $fieldHospitalDate = $myRow['FieldHospital_Date'];
            $fieldHospitalAmphures = $myRow['FieldHospital_Amphures'];
            $fieldHospitalAmphuresName = $myRow['name_th'];

            $fieldHospitalList[] = new FieldHospital($fieldHospitalID, $fieldHospitalName, $fieldHospitalDate, $fieldHospitalAmphures, $fieldHospitalAmphuresName);
        }
        require("connection_close.php");

        return $fieldHospitalList;
    }
}
