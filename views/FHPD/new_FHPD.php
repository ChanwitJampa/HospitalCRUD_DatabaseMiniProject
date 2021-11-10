<form method="get" action="">
    <label>fieldHospitalPatientDetailID <input type="text" name="FHPDID" placeholder="กรุณากรอกID" /></label><br>

    <label>fieldHospitalID <select name="fieldHospitalID">
            <option value="" selected disabled hidden>เลือกโรงพยาบาล</option>
            <?php foreach ($fieldHospitalList as $fieldHospital) {
                echo "<option value=$fieldHospital->fieldHospitalID>$fieldHospital->fieldHospitalName</option>";
            }
            ?>
        </select></label><br>


    <label>Color <select name="FHPDColor">
            <option value="" selected disabled hidden>เลือกสี</option>
            <?php foreach ($colorList as $color) {
                echo "<option value=$color>$color</option>";
            }
            ?>
        </select></label><br>
    <label>fieldHospitalPatientDetailNumber <input type="number" name="FHPDNumber" placeholder="กรุณากรอกตัวเลข" /></label><br>

    <input type="hidden" name="controller" value="FHPD" />
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="addFHPD">save</button>


</form>