<?php
    require_once("models/amphuresModel.php");
    $Province_Id = $_GET['Province_Id'];
    $Amphures_List = Amphures::getByProvince($Province_Id);
    echo "<option hidden='hidden'>เลือกอำเภอ</option>";
    foreach($Amphures_List as $Amphure){
        echo "<option value=$Amphure->amphuresID>$Amphure->amphuresNameTH</option>";
    }
?>