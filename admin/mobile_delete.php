<?php 
session_start();
if(isset($_SESSION["session_name"]))
{

include("header.php");
		$connect=mysqli_connect("localhost","root","","mobileshop");

$delsel=mysqli_query($connect,"select mobile_img from mobile where mobile_id=".$_REQUEST["id"]);
if($r=mysqli_fetch_row($delsel))
{
	unlink("../".$r[0]);
	mysqli_query($connect,("delete from mobile where mobile_id=".$_REQUEST['id']));
}

echo "<script>window.location='mobile_view.php';</script>";
include("footer.php"); 
}	
	else
		echo "<script>window.location='login.php';</script>";

?>
