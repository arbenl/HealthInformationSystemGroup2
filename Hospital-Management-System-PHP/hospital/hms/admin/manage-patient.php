<?php
session_start();
error_reporting(0);
include('include/config.php');
if(strlen($_SESSION['id']==0)) {
 header('location:logout.php');
  } else{

?>

<?php

$sql=mysqli_query($con,"select * from tblpatient");
$cnt=1;
while($row=mysqli_fetch_array($sql))
{
?>
<!-- menaxhimi i pacientave nga e adminit
<?php } ?>
<?php } ?>
