<?php
         echo "<br>Are you sure to delete this fieldHospital<br>
            
            <br>$fieldHospital->fieldHospitalID
            $fieldHospital->fieldHospitalName
            $fieldHospital->fieldHospitalDate
            $fieldHospital->fieldHospitalAmphuresName
            <br>";?>
<form method="get" action="">
   <input type = "hidden" name="controller" value="fieldHospital"/>
   <input type = "hidden" name="ID" value ="<?php echo $fieldHospital->fieldHospitalID;?>"/>
   <button type="submit" name="action" value ="index">back</button>
   <button type="submit" name="action" value="delete">Delete</button>
<from>

