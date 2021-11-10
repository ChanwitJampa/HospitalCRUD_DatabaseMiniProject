
<form method="get" action="">

<?php echo"## $recordPatientIn->recordPatientInID ##";?>
<label>ID <input type="text" name="recordPatientInIDNew" value ="<?php echo $recordPatientIn->recordPatientInID;?>"/></label><br>
<label>Date <input type="date" name="recordPatientInDateNew" value ="<?php echo $recordPatientIn->recordPatientInDate;?>"/></label><br>
<label>Detail <input type="text" name="recordPatientInDetailNew" value ="<?php echo $recordPatientIn->recordPatientInDetail;?>"/></label><br>
<label>tem <input type="double" name="recordPatientInTemNew" value ="<?php echo $recordPatientIn->recordPatientInTem;?>"/></label><br>

<label> PatientIn ID <select name="patientInIDNew">
    <?php 
    foreach($patientInList as $patientIn){
        echo "<option value=$patientIn->patientInID";
        if($patientIn->patientInID==$recordPatientIn->patientInID){echo " selected='selected'";}
            echo "> $patientIn->patientInID</option>";
    } 
    ?>
</select></label><br>

<input type = "hidden" name ="controller" value ="recordPatientIn"/>
<input type = "hidden" name ="ID" value ="<?php echo $recordPatientIn->recordPatientInID;?>"/>
<button type="submit" name="action" value="index">Back</button>
<button type="submit" name="action" value="update">update</button>
</form>