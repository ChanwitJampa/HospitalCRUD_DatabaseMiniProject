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

<body style="background-color:#F5FFFA;">
  <?php echo "controller = " . $controller . ",action = " . $action; ?>
  <br>
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #4169E1;">
  <div class="container-fluid">
    <a class="navbar-brand" href="?controller=pages&action=home">โรงพยาบาลสนาม</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="http://158.108.207.4/db21/db21_080/">Home</a>
        <a class="nav-link active" href="?controller=fieldHospital&action=index">fieldHospital</a>
        <a class="nav-link active" href="?controller=FHPD&action=index">fieldHospitalPatientDetail</a>
        <a class="nav-link active" href="?controller=patientIn&action=index">PatientIn</a>
        <a class="nav-link active" href="?controller=recordPatientIn&action=index">recordPatientIn</a>
      </div>
    </div>
  </div>
</nav>
  <br>
  <?php require_once("routes.php"); ?>


  
  
</body>


</html>