<?php
session_start();
if(isset($_SESSION["session_name"]))
{

	include("header.php");
	$connect=mysqli_connect("localhost","root","","mobileshop");

	$selcat=mysqli_query($connect,"select * from mobilebrand where brand_id=".$_REQUEST["id"]);
	$r_cat=mysqli_fetch_row($selcat);
	?>
<section class="w3ls-bnrbtm py-5" id="about">
		<div class="container py-xl-5 py-lg-3">
			<div class="row pb-5">
				<div class="col-lg-12">
<center>


<form name="form1" method="post"  action="brand_edit.php"enctype="multipart/form-data">
		<h1>Mobile Brand Data</h1>
		<br />
		<table border="3">
			<tr>
				<td>name</td>
				<td><input type="text" name="brand_name" value="<?php echo $r_cat[1];?>" />
				</td>
			</tr>
			
			<?php /*?><tr>
				<td>image</td>
				<td><input type="file" name="img" />
					<input type="hidden" name="old_img" value="<?php echo $r_cat[2]; ?>" />
				
				<img src="../<?php echo $r_cat[2]; ?>" height="220px" width="220px" />
					</td>

			</tr><?php */?>
			<tr>
				<td>
					<input type="hidden" name="brand_id" value="<?php echo $r_cat[0]; ?>" />	
				</td>
			</tr>
			<tr align="center">
				<td colspan="2"><input type="submit" name="brand_upd" value="submit" /></td>
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
	}	
	else
		echo "<script>window.location='login.php';</script>";

?>