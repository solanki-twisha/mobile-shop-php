<?php
session_start();
if(isset($_SESSION["session_name"]))
{

	include("header.php");
	$connect=mysqli_connect("localhost","root","","mobileshop");
	$result=mysqli_query($connect,"select * from feedback");

	?>

	<section class="w3ls-bnrbtm py-5" id="about">
		<div class="container py-xl-5 py-lg-3">
			<div class="row pb-5">
				<div class="col-lg-12">

<?php
	echo "<center><h1><b>Feedback Data</b></h1>";
	echo "<br> </br>";
	echo "<table border=3 width=100%>";
	echo "<tr>";
	$no=mysqli_num_fields($result);
	for ($i=0;$i<$no;$i++)
	{
		$fieldinfo=mysqli_fetch_field_direct($result,$i);
		echo "<th>".$fieldinfo->name."</th>";
	}
	echo "<th>Delete</th></tr>";
	while($row=mysqli_fetch_array($result))
	{
		echo"<tr>";
		echo "<td>".$row[0]."</td>";
		echo "<td>".$row[1]."</td>";
		echo "<td>".$row[2]."</td>";
		echo "<td>".$row[3]."</td>";
		echo "<td>".$row[4]."</td>";
		
		echo "<td><a href='feedback_delete.php?id=$row[0]'>Delete</a></td>";
		echo "</tr>";
	}
	echo"</table>";
	echo "</center>";
?>


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