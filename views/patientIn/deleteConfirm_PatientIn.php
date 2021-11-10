<?php
echo "<br>Are you sure to delete this PatientIn<br>
            
            <br>$patientIn->patientInID
            $patientIn->patientInaddDate
            $patientIn->fieldHospitalName
            $patientIn->PT_PCR
            <br>"; ?>
<form method="get" action="">
    <input type="hidden" name="controller" value="patientIn" />
    <input type="hidden" name="ID" value="<?php echo $patientIn->patientInID; ?>" />
    <button type="submit" name="action" value="index">back</button>
    <button type="submit" name="action" value="delete">Delete</button>
    <from>