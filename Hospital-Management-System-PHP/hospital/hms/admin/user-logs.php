<?php
session_start();
error_reporting(0);
include('include/config.php');
if(strlen($_SESSION['id']==0)) {
 header('location:logout.php');
  } else{
?>

<?php
$sql=mysqli_query($con,"select * from userlog ");
$cnt=1;
while($row=mysqli_fetch_array($sql))
{
?>
<!-- te shfaqen log in-at e userave
<?php } ?>
<?php } ?>
