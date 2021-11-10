<?php class RecordPatientIn{
    public $recordPatientInID,
    $recordPatientInDate,
    $recordPatientInDetail,
    $recordPatientInTem,
    $patientInID;
   

    public function __construct($ID, $date, $detail,$tem,$PID)
    {
        $this->recordPatientInID = $ID;
        $this->recordPatientInDate = $date;
        $this->recordPatientInDetail = $detail;
        $this->recordPatientInTem = $tem;
        $this->patientInID = $PID;
      
    }

    public static  function get($ID){
        require("connection_connect.php");
        $sql = "select * from RecordPatientIn where RecordPatientIn_ID = '$ID'";
        $result = $conn->query($sql);
        $myrow = $result->fetch_assoc();

        $recordPatientInID = $myrow['RecordPatientIn_ID'];
        $recordPatientInDate = $myrow['RecordPatientIn_Date'];
        $recordPatientInDetail = $myrow['RecordPatientIn_Detail'];
        $recordPatientInTem = $myrow['RecordPatientIn_Temperature'];
        $PatientIn_ID = $myrow['PatientIn_ID'];
        
        require("connection_close.php");
        return new RecordPatientIn($recordPatientInID, $recordPatientInDate, $recordPatientInDetail, $recordPatientInTem, $PatientIn_ID);
    }

    public static  function getAll(){
        $recordPatientInList =[];
        require("connection_connect.php");
        $sql = "select * from RecordPatientIn ";
        $result = $conn->query($sql);
        while($myrow = $result->fetch_assoc()){
            $recordPatientInID = $myrow['RecordPatientIn_ID'];
            $recordPatientInDate = $myrow['RecordPatientIn_Date'];
            $recordPatientInDetail = $myrow['RecordPatientIn_Detail'];
            $recordPatientInTem = $myrow['RecordPatientIn_Temperature'];
            $PatientIn_ID = $myrow['PatientIn_ID'];
            
            $recordPatientInList[] = new  RecordPatientIn($recordPatientInID, $recordPatientInDate, $recordPatientInDetail, $recordPatientInTem, $PatientIn_ID);

        }
        
        require("connection_close.php");
        
        return  $recordPatientInList;
    }

    public static function add($RID, $date, $detail, $tem, $PID){
        require("connection_connect.php");
        //echo "$RID, $date, $detail, $tem, $PID";
        $sql = "INSERT INTO `RecordPatientIn` (`RecordPatientIn_ID`, `RecordPatientIn_Date`, `RecordPatientIn_Detail`, `RecordPatientIn_Temperature`, `PatientIn_ID`) VALUES ('$RID', '$date', '$detail', '$tem', '$PID');";
        $result = $conn->query($sql);
        require("connection_close.php");
    }

    public static function delete($RID){
        require("connection_connect.php");
        $sql = "Delete from RecordPatientIn where RecordPatientIn.RecordPatientIn_ID='$RID'";
        $result = $conn->query($sql);
        require("connection_close.php");
    }

    public static function update($RID, $date, $detail, $tem, $PID,$ID){
        require("connection_connect.php");
        $sql = "UPDATE `RecordPatientIn` SET `RecordPatientIn_ID` = '$RID', `RecordPatientIn_Date` = '$date', `RecordPatientIn_Detail` = '$detail', `RecordPatientIn_Temperature` = '$tem' , `PatientIn_ID` = '$PID' WHERE `RecordPatientIn`.`RecordPatientIn_ID` = '$ID';";
        $result = $conn->query($sql);
        require("connection_close.php");
    }

    public static function search($key){
        $recordPatientInList =[];
        require("connection_connect.php");
        $sql = "SELECT * FROM RecordPatientIn 
        where RecordPatientIn_ID like '%$key%' or RecordPatientIn_Date like '%$key%' or RecordPatientIn_Detail like '%$key%' or RecordPatientIn_Temperature like '%$key%' or PatientIn_ID like '%$key%'";
        $result = $conn->query($sql);
        while($myrow = $result->fetch_assoc()){
            $recordPatientInID = $myrow['RecordPatientIn_ID'];
            $recordPatientInDate = $myrow['RecordPatientIn_Date'];
            $recordPatientInDetail = $myrow['RecordPatientIn_Detail'];
            $recordPatientInTem = $myrow['RecordPatientIn_Temperature'];
            $PatientIn_ID = $myrow['PatientIn_ID'];
            
            $recordPatientInList[] = new  RecordPatientIn($recordPatientInID, $recordPatientInDate, $recordPatientInDetail, $recordPatientInTem, $PatientIn_ID);

        }
        
        require("connection_close.php");
        
        return  $recordPatientInList;
    }

} 

?>