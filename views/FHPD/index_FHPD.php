

<table class="table table-striped">
<tr> <td>FHPDID</td><td>Hospital Name</td><td>FHPD_Date</td><td>Number</td>
<td>update</td><td>delete</td></tr>
<br>ชาญวิชญ์ จำปา 6220504640 <br>
<br><br>New FHPD <a href=?controller=FHPD&action=newFHPD>: click</a><br><br>

<form method="get"action="">
    <input type="text" name="key">
    <input type="hidden" name="controller" value="FHPD"/>
    <button type="submit" name="action" value="search">
Search</button>
</form>


<?php 
       
        foreach($FHPDList as $FHPD){
            echo "<tr><td>$FHPD->FHPDID</td>

            <td>$FHPD->fieldHospitalName</td>
            <td>$FHPD->FHPDColor</td>
            <td>$FHPD->FHPDNumber</td>
";?>
            <td><a class="btn btn-outline-info" href=?controller=FHPD&action=updateForm&<?php echo "ID=$FHPD->FHPDID" ;?> >update </a></td>
            <td><a class="btn btn-outline-danger" href=?controller=FHPD&action=deleteConfirm&<?php echo "ID=$FHPD->FHPDID" ;?> >delete</a></td>
            </tr>
    <?php } ?>
    
</table>


