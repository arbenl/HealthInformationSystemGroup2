<?php
session_start();
error_reporting(0);
include('include/config.php');
if(strlen($_SESSION['id']==0)) {
 header('location:logout.php');
  } else{

if(isset($_GET['del']))
		  {
		  	$uid=$_GET['id'];
		          mysqli_query($con,"delete from users where id ='$uid'");
                  $_SESSION['msg']="data deleted !!";
		  }
?>

<?php
$sql=mysqli_query($con,"select * from users");
$cnt=1;
while($row=mysqli_fetch_array($sql))
{
?>
<!-- menaxhimi i userave nga e adminit
											
<?php } ?>
<?php } ?>