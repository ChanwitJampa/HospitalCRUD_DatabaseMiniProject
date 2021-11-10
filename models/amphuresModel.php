<?php class Amphures{
    public $amphuresID,
    $amphuresCode,
    $amphuresNameTH,
    $amphuresNameENG,
    $amphuresProvince;
    
    public function __construct( $amphuresID,$amphuresCode,$amphuresNameTH,$amphuresNameENG,$amphuresProvince ){
        $this->amphuresID = $amphuresID;
        $this->amphuresCode = $amphuresCode;
        $this->amphuresNameTH = $amphuresNameTH;
        $this->amphuresNameENG = $amphuresNameENG;
        $this->amphuresProvince = $amphuresProvince;
    }

    public static function get($ID){
        require("connection_connect.php");
        $sql = "select * from Amphures where id='$ID'";
        $result = $conn->query($sql);
        $myRow = $result->fetch_assoc();

        $amphuresID = $myRow['id'];
        $amphuresCode = $myRow['code'];
        $amphuresNameTH = $myRow['name_th'];
        $amphuresNameENG = $myRow['name_en'];
        $amphuresProvince = $myRow['provine_id'];
        
        require("connection_close.php");

        $amphures = new Amphures( $amphuresID, $amphuresCode, $amphuresNameTH, $amphuresNameENG,$amphuresProvince);
        return $amphures;
    }

    public static function getAll(){
        $amphuresList = [];
        require("connection_connect.php");
        $sql = "select * from Amphures";
        $result = $conn->query($sql);

        while($myRow = $result->fetch_assoc()){
            $amphuresID = $myRow['id'];
            $amphuresCode = $myRow['code'];
            $amphuresNameTH = $myRow['name_th'];
            $amphuresNameENG = $myRow['name_en'];
            $amphuresProvince = $myRow['provine_id'];
            $amphuresList[] = new Amphures( $amphuresID, $amphuresCode, $amphuresNameTH, $amphuresNameENG,$amphuresProvince);
        }
        require("connection_close.php");
        return $amphuresList;
    }

    public static function getByProvince($Province_Id){
        $amphureList = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM Amphures WHERE Amphures.province_id = '$Province_Id' ORDER BY Amphures.name_th";
        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {
            $Amphure_Id = $my_row["id"];
            $Amphure_Code = $my_row["code"];
            $Amphure_NameTH = $my_row["name_th"];
            $Amphure_NameEN = $my_row["name_en"];
            $Province_Id = $my_row["province_id"];

            $amphureList[] = new Amphures($Amphure_Id ,$Amphure_Code ,$Amphure_NameTH ,$Amphure_NameEN ,$Province_Id);
        }
        require("connection_close.php");
        return $amphureList;
    }

}

?>