<?php
session_start();
//error_reporting(0);
include('include/config.php');
if(strlen($_SESSION['id']==0)) {
 header('location:logout.php');
  } else{

date_default_timezone_set('Europe/Tirane');
$currentTime = date( 'd-m-Y h:i:s A', time () );
if(isset($_POST['submit']))
{
$cpass=$_POST['cpass'];	
$uname=$_SESSION['login'];
$sql=mysqli_query($con,"SELECT password FROM  admin where password='$cpass' && username='$uname'");
$num=mysqli_fetch_array($sql);
if($num>0)
{
$npass=$_POST['npass'];
 $con=mysqli_query($con,"update admin set password='$npass', updationDate='$currentTime' where username='$uname'");
$_SESSION['msg1']="Password Changed Successfully !!";
}
else
{
$_SESSION['msg1']="Old Password not match !!";
}
}
?>
<!-- ndryshimi i passwordit tek admini
<?php } ?>
