<?php
session_start();
error_reporting(0);
include('include/config.php');
if(strlen($_SESSION['id']==0)) {
 header('location:logout.php');
  } else{

?>
<!-- Me bo ni pjes ku i selekton 2 data edhe ta shfaq mesazhet qe ju kan derg
<?php } ?>
