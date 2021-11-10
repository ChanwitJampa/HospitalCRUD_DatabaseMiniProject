

<table class="table table-striped">
<tr> <td>  RecordID </td><td> Date  </td><td>  Detail  </td><td>  Temperature </td><td>  Patient </td>
<td> update </td><td> delete </td></tr>
<br>ชาญวิชญ์ จำปา 6220504640 <br>
<br><br>new Record <a href=?controller=recordPatientIn&action=newRecordPatientIn>: click</a><br><br>

<div class="container-fluid">
    <form class="d-flex">
      <input class="form-control me-2" type="text" placeholder="Search" aria-label="Search" name="key">
      <input type="hidden" name="controller" value="recordPatientIn"/>
      <button class="btn btn-outline-success" type="submit" name="action" value="search">Search</button>
    </form>
  </div>

<?php 
       
        foreach($recordPatientInList as $recordPatientIn){
            echo "<tr><td>$recordPatientIn->recordPatientInID</td>
            <td>$recordPatientIn->recordPatientInDate</td>
            <td>$recordPatientIn->recordPatientInDetail</td>
            <td>$recordPatientIn->recordPatientInTem</td>
            <td>$recordPatientIn->patientInID</td>
";?>
            <td><a class="btn btn-outline-info" href=?controller=recordPatientIn&action=updateForm&<?php echo "ID=$recordPatientIn->recordPatientInID" ?> >update </a></td>
            <td><a class="btn btn-outline-danger" href=?controller=recordPatientIn&action=deleteConfirm&ID=<?php echo"ID=$recordPatientIn->recordPatientInID" ?> >delete</a></td>
            </tr>
    <?php } ?>
    
</table>


