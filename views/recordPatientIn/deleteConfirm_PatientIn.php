<?php
echo "<br>Are you sure to delete this recordPatientIn<br>
            
            <br>$recordPatientIn->recordPatientInID
            $recordPatientIn->recordPatientInDate
            $recordPatientIn->recordPatientInDetail
            $recordPatientIn->recordPatientInTem
            $recordPatientIn->PatientID
            <br>"; ?>
<form method="get" action="">
    <input type="hidden" name="controller" value="recordPatientIn" />
    <input type="hidden" name="ID" value="<?php echo $recordPatientIn->recordPatientInID; ?>" />
    <button type="submit" name="action" value="index">back</button>
    <button type="submit" name="action" value="delete">Delete</button>
    <from>