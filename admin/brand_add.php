<?php 
session_start();
if(isset($_SESSION["session_name"]))
{
include("header.php"); ?>
<br />
<br />

<section class="w3ls-bnrbtm py-5" id="about">
		<div class="container py-xl-5 py-lg-3">
			<div class="row pb-5">
				<div class="col-lg-12">
<center>
		<form name="form1" method="post" enctype="multipart/form-data">
		<h1>Mobile Brand</h1>
		<table border="3">
			<tr>
				<td>name  </td>
				<td><input type="text" name="brand_name" /></td>
			</tr>
			
			
			<tr align="center">
				<td colspan="2"><input type="submit" name="sub" value="submit" /></td>
			</tr>
		</table>
		
		</form>
	</center>
	</div>
	</div>
	</div>
	</section>

<?php
	include("footer.php");
	$connect=mysqli_connect("localhost","root","","mobileshop");
	
	if(isset($_POST["sub"]))
	{
		$nm=$_POST["brand_name"];
		//$path="upload/".$_FILES["img"]["name"];
		move_uploaded_file($_FILES["img"]["tmp_name"],"../".$path);
		mysqli_query($connect,"insert into mobilebrand  values(null,'$nm')");
		
		echo "<script>window.location='brand_view.php';</script>";
	}
}	
	else
		echo "<script>window.location='login.php';</script>";
?>