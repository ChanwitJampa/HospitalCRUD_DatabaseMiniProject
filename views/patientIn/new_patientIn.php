<form method="get" action="">
    <label>PatientInID <input type="text" name="patientInID" placeholder="กรุณากรอกID" /></label><br>
    <label>Date <input type="date" name="patientInDate" placeholder="กรุณากรอกID" /></label><br>

    <label>fieldHospitalID <select name="fieldHospitalID">
            <option value="" selected disabled hidden>เลือกโรงพยาบาล</option>
            <?php foreach ($fieldHospitalList as $fieldHospital) {
                echo "<option value=$fieldHospital->fieldHospitalID>$fieldHospital->fieldHospitalName</option>";
            }
            ?>
        </select></label><br>
    <label>PT-PCR_ID <input type="text" name="PT_PCR" /></label><br>

    <input type="hidden" name="controller" value="patientIn" />
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="addPatientIn">save</button>


</form>