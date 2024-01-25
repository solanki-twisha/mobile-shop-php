
<html>

<head>
<style>
.button {
  background-color: #B7AFAD; 
  border: none;
  color: black;
  padding: 20px 50px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 30px;
  font:bold;
  font-family: cursive;
  margin: 6px 5px;
  cursor: pointer;
  height:90px
}

.button2 {background-color: #FACBBF;} 
.button3 {background-color: #EAE00A;}  
.button4 {background-color: #e7e7e7; color: black;}  
.button5 {background-color: #555555;} 

body {
  margin: 1;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: green;
}

.topnav a {
  float: left;
  color: red;
  text-align: center;
  padding: 20px 16px;
  text-decoration: none;
  font-size: 20px;
}

.topnav a:hover {
  background-color: black;
  color: black;
}

.topnav a.active {
  background-color: Green;
  color: white;
}
</style>
</head>
<body>
<div class="topnav">
  <a class="active" href="#home"><font color="white">Home</font></a>
  <a href="#news"><a href="ViewOrder.php"><font color="white">View Order</a></font>
  <a href="#contact"><a href="contact Sales.php"><font color="white">Contact Sales</font></a>
  <a href="#about"><a href="About.php"><font color="white">About</font></a>
  <a href="#about"><a href="LogOut.php"><font color="white">LogOut</font></a>

</div>


<h1 align="center"><font color="#990022">Admin Dashboard</font></h1>
<hr>
<br><br>
<center>
<h1><font color="green">User Tab</font></h1>
<hr>
<button class="button"><a href="viewUser.php">View User</a></button>
<button class="button button2"><a href="updateUser.php">Update User</a></button><br>
<h1><font color="green">Product Tab</font></h1>
<hr>
<button class="button"><a href="add_product.php">add product</a></button>
<button class="button button2"><a href="update_product.php">Update Product</a></button>
<button class="button"><a href="delete_product1.php">Delete Product</a></button>
<button class="button button2"><a href="category.php">Add Category</a></button><br>
<button class="button"><a href="Display_Product.php">Display Product</a></button>

<h1><font color="green">Order Tab</font></h1>

<hr>
<button class="button button2"><a href="ViewOrder.php">View Order</a></button>
<button class="button "><a href="ViewBills.php">View Bills</a></button>
<button class="button button2"><a href="ViewRports.php">View Reports</a></button>

</center>
</body>
</html>