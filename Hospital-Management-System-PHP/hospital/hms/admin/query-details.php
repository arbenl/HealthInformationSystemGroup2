<?php
session_start();
error_reporting(0);
include('include/config.php');
if(strlen($_SESSION['id']==0)) {
 header('location:logout.php');
  } else{

//updating Admin Remark
if(isset($_POST['update']))
		  {
$qid=intval($_GET['id']);
$adminremark=$_POST['adminremark'];
$isread=1;
$query=mysqli_query($con,"update tblcontactus set  AdminRemark='$adminremark',IsRead='$isread' where id='$qid'");
if($query){
echo "<script>alert('Admin Remark updated successfully.');</script>";
echo "<script>window.location.href ='read-query.php'</script>";
}
		  }
?>

<!-- konsumatoret kur te dergojn email edhe pse nuk jan te regjistruar, admini mund ti shof

<?php } ?>
