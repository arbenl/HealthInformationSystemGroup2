<?php
session_start();
//error_reporting(0);
include('include/config.php');
if(strlen($_SESSION['id']==0)) {
 header('location:logout.php');
  } else{

?>

<?php
$sql=mysqli_query($con,"select * from doctorslog ");
$cnt=1;
while($row=mysqli_fetch_array($sql))
{
?>

<?php } ?>
<?php } ?>

<!-- admini munet mi pa kush ka hi ne web, dmth historia e log in
