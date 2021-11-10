<form method="get" action="">
    <label>fieldHospitalID <input type="text" name="fieldHospitalID" placeholder="กรุณากรอกID"/></label><br>
    <label>fieldHospitalName <input type="text" name="fieldHospitalName" placeholder="กรุณากรอกชื่อ" /></label><br>
    <label>fieldHospitalDate <input type="date" name="fieldHospitalDate" /></label><br>

    <label>Province <select name="provinces" id="Provinces" class="form-control">
            <option value="" selected disabled hidden>เลือกจังหวัด</option>
            <?php foreach ($provincesList as $provinces) {
                echo "<option value=$provinces->provincesID>$provinces->provincesNameTH</option>";
            }
            ?>
        </select></label><br>

    <label>fieldHospitalAmphures <select name="amphures" id="amphures" class="form-control">
            <option value="" selected disabled hidden>เลือกอำเภอ</option>

        </select></label><br>

    <input type="hidden" name="controller" value="fieldHospital" />
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="addFieldHospital">save</button>


    <script type="text/javascript">
        $(document).ready(function() {
            $("#Provinces").change(function() {
                var Province_id = $(this).val();
                $.ajax({
                    url: "provinceOnChange.php",
                    method: "GET",
                    data: {
                        Province_Id: Province_id
                    },
                    success: function(result) {
                        $("#amphures").html(result);
                    }
                });
            });
        });
    </script>
</form>