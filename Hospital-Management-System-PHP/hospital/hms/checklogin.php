<?php
function check_login()
{
if(strlen($_SESSION['login'])==0)
	{	
		$host = $_SERVER['HTTP_HOST'];
		$uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
		$extra="../admin.php";		
		$_SESSION["login"]="";
		header("Location: http://$host$uri/$extra");
	}
}
?>
<!-- kontrollimi se ku do ket qasje kjo email qe do te logohet