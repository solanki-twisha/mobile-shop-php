<?php 
session_start();
if(isset($_SESSION["session_name"]))
{
		include("header.php");
		$connect=mysqli_connect("localhost","root","","mobileshop");
		$re=mysqli_query($connect,"delete from feedback where id=".$_REQUEST["id"]);
		// if ($re==true) {
		// 	echo "DONE";.
		// }
		// else {
		// 	echo "Fail";.
		// }


		echo "<script>window.location='feedback.php';</script>";
}
else	 
{
	echo "<script>window.location='login.php';</script>";
}
?>	

<?php

		include("footer.php");
		
?>



