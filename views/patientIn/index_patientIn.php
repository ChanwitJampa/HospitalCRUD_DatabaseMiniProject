

<table class="table table-striped">
<tr> <td>  PatientInID  </td><td>  PatientIn_AddDate  </td><td>  FieldHospital Name  </td><td>  PT-PCR_ID  </td>
<td> update </td><td> delete </td></tr>
<br>ชาญวิชญ์ จำปา 6220504640 <br>
<br><br>add patientIn <a href=?controller=patientIn&action=newPatientIn>: click</a><br><br>

<form method="get"action="" >
    <input type="text" name="key">
    <input type="hidden" name="controller" value="patientIn"/>
    <button type="submit" name="action" value="search">
Search</button>
</form>


<?php 
       
        foreach($patientInList as $patientIn){
            echo "<tr><td>$patientIn->patientInID</td>

            <td>$patientIn->patientInAddDate</td>
            <td>$patientIn->fieldHospitalName</td>
            <td>$patientIn->PT_PCR</td>
";?>
            <td><a  class="btn btn-outline-info" href=?controller=patientIn&action=updateForm&<?php echo "ID=$patientIn->patientInID" ?> >update </a></td>
            <td><a  class="btn btn-outline-danger" href=?controller=patientIn&action=deleteConfirm&<?php echo "ID=$patientIn->patientInID"?> >delete</a></td>
            </tr>
    <?php } ?>
    
 </table>


