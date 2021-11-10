<?php
         echo "<br>Are you sure to delete this fieldHospitalPatientDetail<br>
            
            <br>$FHPD->FHPDID
            $FHPD->fieldHospitalName
            $FHPD->FHPDColor
            $FHPD->FHPDNumber
            <br>";?>
<form method="get" action="">
   <input type = "hidden" name="controller" value="FHPD"/>
   <input type = "hidden" name="ID" value ="<?php echo $FHPD->FHPDID;?>"/>
   <button type="submit" name="action" value ="index">back</button>
   <button type="submit" name="action" value="delete">Delete</button>
<from>

