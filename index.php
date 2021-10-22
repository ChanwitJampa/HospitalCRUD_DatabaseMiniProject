<?php
if(isset($_GET['controller'])&&isset($_GET['action']))
{
  $controller = $_GET['controller'];
  $action = $_GET['action'];
}
else
{
  $controller = 'pages';
  $action = 'home';
}
?>
<html>
<head></head>
<body>
   <?php //echo "controller = ".$controller.",action = ".$action;?>
    controller = pages , action = home 
   <br>
        [<a href="">Home(หน้าหลัก) </a>]
        [<a href="?controller = order & action=index">order/Dream </a>]
        [<a href="?controller = orderDetail & action=index">orderDetail </a>]
        [<a href="?controller = priceRange & action=index">priceRange/T </a>]
   <br>
   <?php require_once("routes.php");?>
</body>
</html> 
