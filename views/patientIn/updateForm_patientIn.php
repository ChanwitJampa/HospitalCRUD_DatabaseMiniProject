
<form method="get" action="">

<?php echo"## $patientIn->patientInID ##";?>
<label>ID <input type="text" name="patientInIDNew" value ="<?php echo $patientIn->patientInID;?>"/></label><br>
<label>Date <input type="date" name="patientInAddDateNew" value ="<?php echo $patientIn->patientInAddDate;?>"/></label><br>
<label>fieldHospitalID <select name="fieldHospitalIDNew">
    <?php 
    foreach($fieldHospitalList as $fieldHospital){
        echo "<option value=$fieldHospital->fieldHospitalID";
        if($fieldHospital->fieldHospitalID==$patientIn->fieldHospitalID){echo " selected='selected'";}
            echo "> $fieldHospital->fieldHospitalName </option>";
    } 
    ?>
</select></label><br>
<label>PT-PCR <input type="text" name="PT_PCRNew" value ="<?php echo $patientIn->PT_PCR;?>"/></label><br>


<input type = "hidden" name ="controller" value ="patientIn"/>
<input type = "hidden" name ="ID" value ="<?php echo $patientIn->patientInID;?>"/>
<button type="submit" name="action" value="index">Back</button>
<button type="submit" name="action" value="update">update</button>
</form>