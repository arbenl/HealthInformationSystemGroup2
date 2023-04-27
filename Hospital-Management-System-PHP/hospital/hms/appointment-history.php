<?php
session_start();
error_reporting(0);
include('include/config.php');
if(strlen($_SESSION['id']==0)) {
 header('location:logout.php');
  } else{
if(isset($_GET['cancel']))
		  {
		          mysqli_query($con,"update appointment set userStatus='0' where id = '".$_GET['id']."'");
                  $_SESSION['msg']="Your appointment canceled !!";
		  }
?>

<?php
$sql=mysqli_query($con,"select doctors.doctorName as docname,appointment.*  from appointment join doctors on doctors.id=appointment.doctorId where appointment.userId='".$_SESSION['id']."'");
$cnt=1;
while($row=mysqli_fetch_array($sql))
{
?>

<?php } ?>
<?php } ?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>

<!-- historia e termineve