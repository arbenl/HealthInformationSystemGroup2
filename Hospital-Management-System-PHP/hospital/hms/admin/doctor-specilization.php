<?php
session_start();
error_reporting(0);
include('include/config.php');
if(strlen($_SESSION['id']==0)) {
 header('location:logout.php');
  } else{

if(isset($_POST['submit']))
{
$doctorspecilization=$_POST['doctorspecilization'];
$sql=mysqli_query($con,"insert into doctorSpecilization(specilization) values('$doctorspecilization')");
$_SESSION['msg']="Doctor Specialization added successfully !!";
}
//Code Deletion
if(isset($_GET['del']))
{
$sid=$_GET['id'];	
mysqli_query($con,"delete from doctorSpecilization where id = '$sid'");
$_SESSION['msg']="data deleted !!";
}
?>

<?php
$sql=mysqli_query($con,"select * from doctorSpecilization");
$cnt=1;
while($row=mysqli_fetch_array($sql))
{
?>

<!-- insertimi i ndonje specializimi te ri ose fshirja e tij
											
<?php } ?>											
<?php } ?>
