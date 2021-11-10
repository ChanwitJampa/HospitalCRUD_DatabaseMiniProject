<?php class Provinces{
    public $provincesID,
    $provincesCode,
    $provincesNameTH,
    $provincesNameENG;

    public function __construct($ID,$Code,$NameTH,$NameENG){
        $this->provincesID = $ID;
        $this->provincesCode = $Code;
        $this->provincesNameTH = $NameTH;
        $this->provincesNameENG = $NameENG;
    }
    
    public static function get($ID){
        require("connection_connect.php");
        $sql = "select * from Provinces where id='$ID'";
        $result = $conn->query($sql);
        $myRow = $result->fetch_assoc();

        $provincesID = $myRow['id'];
        $provincesCode = $myRow['code'];
        $provincesNameTH = $myRow['name_th'];
        $provincesNameENG = $myRow['name_en'];
        
        require("connection_close.php");

        $provinces = new Provinces( $provincesID, $provincesCode, $provincesNameTH, $provincesNameENG);
        return $provinces;
    }

    public static function getAll(){
        $provincesList = [];
        require("connection_connect.php");
        $sql = "select * from Provinces";
        $result = $conn->query($sql);
        while($myRow = $result->fetch_assoc()){
            $provincesID = $myRow['id'];
            $provincesCode = $myRow['code'];
            $provincesNameTH = $myRow['name_th'];
            $provincesNameENG = $myRow['name_en'];

            $provincesList[] = new Provinces($provincesID, $provincesCode, $provincesNameTH, $provincesNameENG);
        }
        require("connection_close.php");
        
        return $provincesList;

    }
}
?>