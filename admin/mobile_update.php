<?php
session_start();
if(isset($_SESSION["session_name"]))
{

	include("header.php");
	$connect=mysqli_connect("localhost","root","","mobileshop");
	$selpro=mysqli_query($connect,"select * from mobile where mobile_id=".$_REQUEST["id"]);
	$r_pro=mysqli_fetch_row($selpro);
?>
<center>
		<form name="form1" method="post" action="mobile_edit.php" enctype="multipart/form-data">
		<h1>Mobile Details</h1>
		<br />
		<table border="3">
	
			<tr>
				<td>brand_id<?php echo $r_pro[1]; ?></td>
				<td>
					<select name="brand_id">
					<?php
						$selcat=mysqli_query($connect,"select * from mobilebrand");
					while($cat=mysqli_fetch_array($selcat))
					{
						?>
							<option <?php if($r_pro[1]==$cat[0])
							echo "selected"; ?> value="<?php echo $cat[0]; ?>"><?php echo $cat[1]; ?></option>
						<?php
					}
					?>
					</select>
				</td>
			</tr>

			<tr>
				<td>mobile_name  </td>
				<td><input type="text" name="mobile_name" value="<?php echo $r_pro[2]; ?>" /></td>
			</tr>
			
			<!-- <tr>
				<td>pro_detail</td>
				<td><input type="text" name="pro_detail" value="<?php echo $r_pro[3]; ?>" /></td>
			</tr> -->
			
			<tr>
				<td>mobile_price</td>
				<td><input type="text" name="mobile_price" value="<?php echo $r_pro[3]; ?>" /></td>
			</tr>

			<tr>
				<td>mobile_image</td>
				<td>
				<input type="file" name="mobile_img" />
				<input type="hidden" name="old_img" value="<?php echo $r_pro[4]; ?>" />
				<input type="hidden" name="mobile_id" value="<?php echo $r_pro[0]; ?>" />	
				<img src="../<?php echo $r_pro[4]; ?>" height="220px" width="220px" />
				</td>
			</tr>
			
			<tr align="center">
				<td colspan="2"> <input type="submit" name="mobile_upd" value="submit" /></td>
			</tr>
		</table>
		
		</form>
</center>
<br />
<br />
<?php
	include("footer.php");
	}	
	else
		echo "<script>window.location='login.php';</script>";

?>