<?php
session_start();
if(isset($_SESSION["session_name"]))
{

$connect=mysqli_connect("localhost","root","","mobileshop");
if(isset($_REQUEST["mobile_upd"]))
{
	if($_FILES["mobile_img"]["name"]=="")
		$path=$_REQUEST["old_img"];
	else
	{
		$path="upload/".$_FILES["mobile_img"]["name"];
		move_uploaded_file($_FILES["mobile_img"]["tmp_name"],"../".$path);
		unlink("../".$_REQUEST["old_img"]);
	}
	$query=mysqli_query($connect,"update mobile set brand_id=".$_REQUEST["brand_id"].",mobile_name='".$_REQUEST["mobile_name"]."',mobile_price=".$_REQUEST["mobile_price"].",mobile_img='".$path."' where mobile_id=".$_REQUEST["mobile_id"]);
		// if ($query==true) {
		// 	echo "Update";
		// }
		// else{
		// 	echo "Error";
		// }

	echo "<script>window.location='mobile_view.php';</script>";
}
}	
	else
		echo "<script>window.location='login.php';</script>";

?>