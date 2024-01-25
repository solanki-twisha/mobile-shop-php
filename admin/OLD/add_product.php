 <?php 
// session_start();
 //if(isset($_SESSION["admin_user"]))
//{ 

$conn=mysqli_connect("localhost","root","","admin_info");

 ?>

<center>
 <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>PRODUCT Details </h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
            <div class="row">
                    <div class="col-lg-6 col-md-6">      
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                Add Your product here!...
                            </div>
                            <form method="post" enctype="multipart/form-data">
                            <div class="panel-body">         
                                <select name="category" class="form-control" required>
                                    <?php
                                    $sql1="select * from category";
                                    $all_categories=mysqli_query($conn,$sql1);
                                     while ($category = mysqli_fetch_array(
                                                $all_categories,MYSQLI_ASSOC)):;
                                                
                                    ?>
                                    
                                    <option value="<?php echo $category["id"];?>">
                                      <?php echo $category["category_name"];
                                        ?>
                                    </option>
                                    <?php
                                         endwhile;  
                                    ?>
                                </select>
                                <br>
                                <input type="text" name="product_name" class="form-control" placeholder="product Name" />
                                <br>
                                <input type="text" name="product_price" class="form-control" placeholder="Price" />
                                <br>
                                <input type="text" name="product_description" class="form-control" placeholder="Description" />
                                <br>
                                <input type="file" name="product_image" class="form-control" placeholder="Select Image" />
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

    if(isset($_POST['submit']))
    {
        

        $cat =$_POST['category'];
        $pnm =$_POST['product_name'];
        $price =$_POST['product_price'];
        $pdesc =$_POST['product_description'];
              
        $path="upload/".$_FILES["product_image"]["name"];
        //move_uploaded_file($_FILES["product_image"]["tmp_name"],"../".$path);
        move_uploaded_file($_FILES["product_image"]["tmp_name"], "../".$path);

        $sql = "INSERT INTO add_product (id,product_name,product_price,product_description,product_image) VALUES ('$cat','$pnm','$price','$pdesc','$path')";
        if (mysqli_query($conn, $sql)) 
        {
            echo "<script>alert('Your product added successfully !');</script>";
        } 
        else 
        {
            echo "Error: " . $sql . "" . mysqli_error($conn);
        }
    }
?>
<?php 
//else
  //      echo "<script>window.location='login.php';</script>";
?>        