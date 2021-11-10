
<form method="get" action="">

<?php echo"## $fieldHospital->fieldHospitalID ##";?>
<label>FieldHospitalID <input type="text" name="fieldHospitalIDNew" value ="<?php echo $fieldHospital->fieldHospitalID;?>"/></label><br>
<label>FieldHospitalName <input type="text" name="fieldHospitalNameNew" value ="<?php echo $fieldHospital->fieldHospitalName;?>"/></label><br>
<label>FieldHospitalDate<input type="date" name="fieldHospitalDateNew" value ="<?php echo $fieldHospital->fieldHospitalDate;?>"/></label><br>
<label>FieldHospitalProvinces <select name="provincesNew">
    <?php 
    foreach($provincesList as $provinces){
        echo "<option value=$provinces->provincesNameTH";
        if($provinces->provincesID==$amphuresNow->amphuresProvince){echo " selected='selected'";}
            echo "> $provinces->provincesNameTH </option>";
    }
    ?>  
</select></label><br>

<label>FieldHospitalAmpures <select name="amphuresNew">
    <?php 
    foreach($amphuresList as $amphures){
        echo "<option value=$amphures->amphuresID";
        if($amphures->amphuresID==$fieldHospital->fieldHospitalAmphures){echo " selected='selected'";$amphuresNow=$amphures;}
            echo "> $amphures->amphuresNameTH </option>";
    } 
    ?>
</select></label><br>


<input type = "hidden" name ="controller" value ="fieldHospital"/>
<input type = "hidden" name ="ID" value ="<?php echo $fieldHospital->fieldHospitalID;?>"/>
<button type="submit" name="action" value="index">Back</button>
<button type="submit" name="action" value="update">update</button>
</form>

