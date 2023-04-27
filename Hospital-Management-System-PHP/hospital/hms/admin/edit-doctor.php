<?php
session_start();
error_reporting(0);
include('include/config.php');
if(strlen($_SESSION['id']==0)) {
 header('location:logout.php');
  } else{

$did=intval($_GET['id']);// get doctor id
if(isset($_POST['submit']))
{
	$docspecialization=$_POST['Doctorspecialization'];
$docname=$_POST['docname'];
$docaddress=$_POST['clinicaddress'];
$docfees=$_POST['docfees'];
$doccontactno=$_POST['doccontact'];
$docemail=$_POST['docemail'];
$sql=mysqli_query($con,"Update doctors set specilization='$docspecialization',doctorName='$docname',address='$docaddress',docFees='$docfees',contactno='$doccontactno',docEmail='$docemail' where id='$did'");
if($sql)
{
$msg="Doctor Details updated Successfully";

}
}
?>


<?php $sql=mysqli_query($con,"select * from doctors where id='$did'");
while($data=mysqli_fetch_array($sql))
{
?>




<?php $ret=mysqli_query($con,"select * from doctorspecilization");
while($row=mysqli_fetch_array($ret))
{
?>
									
									<!-- editimi i doktorit, ndryshimi i te dhenave ose i specializimit.
<?php } ?>													
<?php } ?>
<?php } ?>
