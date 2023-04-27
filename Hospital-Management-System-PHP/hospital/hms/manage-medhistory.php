<?php
session_start();
error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();

?>

<?php
$uid=$_SESSION['id'];
$sql=mysqli_query($con,"select tblpatient.* from tblpatient join users on users.email=tblpatient.PatientEmail where users.id='$uid'");
$cnt=1;
while($row=mysqli_fetch_array($sql))
{
?>
<?php } ?>

<!-- menagjimi i historis se recetes qe e ka marr nga doktori
