<?php
session_start();
ob_start();

    if ($_SESSION['sessionPermission'] == "admin" ) {
  header("Location: about.php ");
      		exit();
    } else if ($_SESSION['sessionPermission'] == "client" ) {
    	header("Location: index1.php");
      		exit();
    }

 if (isset($_GET['logout'])) {
  session_destroy();
  header("Location: home.php ");
  exit();
  
  }

?>