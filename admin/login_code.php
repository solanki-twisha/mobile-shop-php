<?php
session_start();
$connect=mysqli_connect("localhost","root","","mobileshop");
if(isset($_REQUEST["login"]))
{
	$getuser=mysqli_query($connect,"select * from admin_login where name='".$_REQUEST["unm"]."' AND password='".$_REQUEST["psw"]."'");
	$res=mysqli_fetch_row($getuser);
	$nores=mysqli_num_rows($getuser);
	if($nores>0)
	{
		$_SESSION["session_name"]=$res[1];
		echo "<script>window.location='index.php';</script>";
	}	
	else
		echo "<script>window.location='login.php';</script>";
}
else
	echo "<script>window.location='login.php';</script>";
?>