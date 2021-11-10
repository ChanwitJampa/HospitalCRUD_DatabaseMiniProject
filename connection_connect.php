<?php
$servername = "localhost";
$username = "db21_080";
$password = "db21_080";
$dbname = "db21_080";

$conn = new mysqli($servername,$username,$password);
$conn->set_charset("utf8");
if($conn->connect_error)
{
  echo "failed to join";
  die("Connection failed: ".$conn->connect_error);
}
if(!$conn->select_db($dbname))
{
  echo "failed to join";
  die("Connection failed: ".$conn->connect_error);
}
?>
