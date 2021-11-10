<?php
if (isset($_GET['controller']) && isset($_GET['action'])) {
  $controller = $_GET['controller'];
  $action = $_GET['action'];
} else {
  $controller = 'pages';
  $action = 'home';
}
?>
<html>

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <!-- ajax -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
  
</head>

<body>
  <?php echo "controller = " . $controller . ",action = " . $action; ?>
  <br>
  [<a href="?controller=pages&action=home">Home(หน้าหลัก) </a>]
  [<a href="?controller=fieldHospital&action=index">fieldHospital </a>]
  [<a href="?controller=FHPD&action=index">fieldHospitalPatientDetail </a>]
  [<a href="?controller=patientIn&action=index">PatientIn </a>]
  [<a href="?controller=recordPatientIn&action=index">recordPatientIn </a>]
  <br>
  
  <?php require_once("routes.php"); ?>


  <br><br><br><br><br><br><br><br><br><br><br><br><br>
  .<a style="color:white" href="?controller=map&action=index">ทดลอง</a>
</body>


</html>