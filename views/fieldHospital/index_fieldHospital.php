

<table class="table table-striped">
<tr> <td>FielHospitalID</td><td>Hospital Name</td><td>FieldHospital_Date</td><td>Amphures</td>
<td>update</td><td>delete</td></tr>
<br>ชาญวิชญ์ จำปา 6220504640 <br>
<br><br>New FieldHospital <a href=?controller=fieldHospital&action=newFieldHospital>: click</a><br><br>

<form method="get"action="">
    <input type="text" name="key">
    <input type="hidden" name="controller" value="fieldHospital"/>
    <button type="submit" name="action" value="search">
Search</button>
</form>


<?php 
       
        foreach($fieldHospitalList as $fieldHospital){
            echo "<tr><td>$fieldHospital->fieldHospitalID</td>
            <td>$fieldHospital->fieldHospitalName</td>
            <td>$fieldHospital->fieldHospitalDate</td>
            <td>$fieldHospital->fieldHospitalAmphuresName</td>
";?>
            <td><a class="btn btn-outline-info" href=?controller=fieldHospital&action=updateForm&<?php echo "ID=$fieldHospital->fieldHospitalID";?>>update </a></td>
            <td><a class="btn btn-outline-danger" href= ?controller=fieldHospital&action=deleteConfirm&<?php echo "ID=$fieldHospital->fieldHospitalID";?> >delete</a></td>
            </tr>
    <?php
    } ?>
    
</table>
