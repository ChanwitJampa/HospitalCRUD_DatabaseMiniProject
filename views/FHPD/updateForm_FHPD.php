
<form method="get" action="">

<?php echo"## $FHPD->FHPDID ##";?>
<label>fieldHospitalPatientID <input type="text" name="FHPDIDNew" value ="<?php echo $FHPD->FHPDID;?>"/></label><br>

<label>fieldHospitalID <select name="fieldHospitalIDNew">
    <?php 
    foreach($fieldHospitalList as $fieldHospital){
        echo "<option value=$fieldHospital->fieldHospitalID";
        if($fieldHospital->fieldHospitalID==$FHPD->fieldHospitalID){echo " selected='selected'";}
            echo "> $fieldHospital->fieldHospitalName </option>";
    } 
    ?>
</select></label><br>

<label>Color <select name="FHPDColorNew">
    <?php 
    foreach($colorList as $color){
        echo "<option value=$color";
        if($color==$FHPD->FHPDColor){echo " selected='selected'";}
            echo "> $color </option>";
    } 
?>
</select></label><br>
<label>fieldHospitalPatientFieldHospitalNumber <input type="number" name="FHPDNumberNew" value ="<?php echo $FHPD->FHPDNumber;?>"/></label><br>


<input type = "hidden" name ="controller" value ="FHPD"/>
<input type = "hidden" name ="ID" value ="<?php echo $FHPD->FHPDID;?>"/>
<button type="submit" name="action" value="index">Back</button>
<button type="submit" name="action" value="update">update</button>
</form>

