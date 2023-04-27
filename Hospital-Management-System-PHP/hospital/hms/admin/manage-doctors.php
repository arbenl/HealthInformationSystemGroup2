<?php
session_start();
error_reporting(0);
include('include/config.php');
if(strlen($_SESSION['id']==0)) {
 header('location:logout.php');
  } else{


if(isset($_GET['del']))
		  {
		  	$docid=$_GET['id'];
		          mysqli_query($con,"delete from doctors where id ='$docid'");
                  $_SESSION['msg']="data deleted !!";
		  }
?>

<?php
$sql=mysqli_query($con,"select * from doctors");
$cnt=1;
while($row=mysqli_fetch_array($sql))
{
?>

<!-- menaxhimi i doktorve nga admini

<?php } ?>
<?php } ?>