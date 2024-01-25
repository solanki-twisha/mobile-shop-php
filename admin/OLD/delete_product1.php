<?php
//session_start();
//if(isset($_SESSION["admin_user"]))
//{
include "adminheder.php";

$query = "DELETE FROM `category` WHERE 0='" . $_GET["userid"] . "'";
$conn=mysqli_connect("localhost","root","","admin_info");
    

if (mysqli_query($conn, $query)) 
{
    echo "Record deleted successfully";
    header("Location: display_product.php");
} 
else 
{
    echo "Error deleting record: " . mysqli_error($conn);
}
//else
  //      echo "<script>window.location='login.php';</script>";
?>  