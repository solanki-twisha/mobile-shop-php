 <?php 
//session_start();
//if(isset($_SESSION["admin"]))
//{
 include('adminheder.php'); 
?>
<center>
 <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>CATEGORY Details </h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
            <div class="row">
                    <div class="col-lg-6 col-md-6">      
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                Add Your Category here!...
                            </div>
                            <form method="post">
                            <div class="panel-body">
                                <input type="text" name="category_name" class="form-control" placeholder="Add Category" />
                            </div>
                            <div class="panel-footer">
                                <input type="submit" name="submit" value="Submit" class="btn btn-primary"> 
                            </div> 
                            </form>                     
                        </div>
                    </div>
                 <!-- /. ROW  -->           
            </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
    </center>
<?php

$conn=mysqli_connect("localhost","root","","admin_info");
    
    if(isset($_POST['submit']))
    {
        $cname =$_POST['category_name'];
      
        $sql = "INSERT INTO `category`(`category_name`) VALUES ('$cname')";
        if (mysqli_query($conn, $sql)) 
        {
            echo "<script>alert('Your Category added successfully !');</script>";
        } 
        else 
        {
            echo "Error: " . $sql . "" . mysqli_error($conn);
        }

        //echo "Resord Inserted Successfully";
    }
?>
<?php 
//include('footer1.php'); 
   // else
       // echo "<script>window.location='login.php';</script>";
?>        