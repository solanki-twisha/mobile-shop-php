<?php
session_start();
if(isset($_SESSION["session_name"]))
{

	include("header.php");
	$connect=mysqli_connect("localhost","root","","mobileshop");
	?>
	<section class="w3ls-bnrbtm py-5" id="about">
		<div class="container py-xl-5 py-lg-3">
			<div class="row pb-5">
				<div class="col-lg-12">
					<h1 align="center"><b>Mobile Brands</b></h1><br />
	<?php
	$result=mysqli_query($connect, "select * from mobilebrand");
	echo "<center>";
	echo "<table border=5 width=110% textsize=50px>";
/*	echo "<tr>
			<th>ID</th>
			<th>Name</th>
			
			<th>Update</th>
			<th>Delete</th>
			</tr>";
*/			
		echo "<tr>";
			
	$no=mysqli_num_fields($result);
	for ($i=0;$i<$no;$i++)
	{
		$fieldinfo=mysqli_fetch_field_direct($result,$i);
		echo "<th>".$fieldinfo->name."</th>";
	}
	echo "<th>Update</th>
				<th>Delete</th></tr>";
		
			
			
			
			
			
	while($row=mysqli_fetch_array($result))
	{
		echo"<tr>";
		echo "<td>".$row[0]."</td>";
		echo "<td>".$row[1]."</td>";
		//echo "<td><img src='../".$row[2]."' height=50px width=50px></td>";
		echo "<td> <a href='brand_Update.php?id=$row[0]'>Update</a></td>";
		echo "<td> <a href='brand_Delete.php?id=$row[0]'>Delete</a></td>";

		echo "</tr>";

	}
		echo"</table>";
		echo "</center>";
	
?>
<a href="brand_add.php"><h3 align="center"><b>Add new</b></h3></a>

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