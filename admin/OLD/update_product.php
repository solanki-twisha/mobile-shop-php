 <?php 
//session_start();
//if(isset($_SESSION["admin_user"]))
//{
    include('adminheder.php'); 
$conn=mysqli_connect("localhost","root","","admin_info");
   
    
	$qry = "select * from product where product_id='" . $_REQUEST["userid"] . "'";
	$records= mysqli_query($conn,$qry);
	$data = mysqli_fetch_array($records);
                                       
	
    if(isset($_POST['submit']))
    {
		$cat =$_POST['category'];
        $pnm =$_POST['product_name'];
        $price =$_POST['product_price'];
        $pdesc =$_POST['product_desc'];
		

        if($_FILES["product_image"]["name"]=="")
            $path=$_REQUEST["old_image"];
        else
        {
            $path="upload/".$_FILES["product_image"]["name"];
            move_uploaded_file($_FILES["product_image"]["tmp_name"],"../".$path);
            unlink("../".$_REQUEST["old_image"]);
        }
		
        $sql ="update product set id='$cat',product_name='$pnm',product_price='$price',product_description='$pdesc',product_image='$path' where product_id='" . $_REQUEST["userid"] . "'";
        
        if (mysqli_query($conn, $sql)) 
        {
            echo "<script>window.location='display_product.php';</script>";
        } 
        else 
        {
            echo "Error: " . $sql . "" . mysqli_error($conn);
        }       
    }
?>
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
                                Update Your Category here!...
                            </div>
                            <form method="post" 
                                enctype="multipart/form-data">
                            <div class="panel-body">
                                
								<select name="category" class="form-control" required>
                                    <?php
                                    $sql1="select * from category";
                                    $all_categories=mysqli_query($conn,$sql1);
                                     while ($category = mysqli_fetch_array(
                                                $all_categories)):; 
                                    ?>
                                    
                                    <option <?php if($data[1]==$category[0])
                                        echo "selected"; ?> value="<?php echo $category[0]; ?>"><?php echo $category[1]; ?></option>

                                    <?php
                                         endwhile; 
                                    ?>
                                </select>

                                <br>
                                <input type="text" value="<?php echo $data['product_name']; ?>" name="product_name" class="form-control" placeholder="Name" />
                                <br>
                                <input type="text" value="<?php echo $data['pprice']; ?>" name="product_price" class="form-control" placeholder="Price" />
                                <br>
                                <input type="text" value="<?php echo $data['pdesc']; ?>" name="product_description" class="form-control" placeholder="Description" />
                                <br>
                                <img src="../<?php echo $data["product_image"]; ?>" height="100" width="100">

                                <input type="file" name="product_image" class="form-control" placeholder="Select Image" />

                                <input type="text" name="old_img" 
                                        value="<?php echo $data['pimg']; ?>">
                                <input type="text" name="pro_id" 
                                        value="<?php echo $data['pid']; ?>">   
                            </div>
                            <div class="panel-footer">
                                <input type="submit" name="submit" value="Update" class="btn btn-primary"> 
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

<?php 
 
//}   
  //  else
   //     echo "<script>window.location='login.php';</script>";
?>     