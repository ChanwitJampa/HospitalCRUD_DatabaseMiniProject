<form method="get" action="">
    <label>Record ID <input type="text" name="recordPatientInID" placeholder="กรุณากรอกID" /></label><br>
    <label>Record Date <input type="date" name="recordPatientInDate" /></label><br>
    <label>Detail <input type="text" name="recordPatientInDetail" placeholder="กรุณากรอกรายละเอียด" /></label><br>
    <label>Temperature <input type="double" name="recordPatientInTem" placeholder="กรุณากรอกอุณหภูมิ" /></label><br>

    <label>Patient <select name="patientInID">
            <option value="" selected disabled hidden>เลือกคนไข้</option>
            <?php foreach ($patientInList as $patientIn) {
                echo "<option value=$patientIn->patientInID>$patientIn->patientInID</option>";
            }
            ?>
        </select></label><br>

    <input type="hidden" name="controller" value="recordPatientIn" />
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="addRecordPatientIn">save</button>


</form>