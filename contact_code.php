<?php
	
$connect=mysqli_connect("localhost","root","","mobileshop");
$name=$_POST['namee'];
$email=$_POST['emaill'];
$phone=$_POST['phonee'];
$msg=$_POST['msgg'];

	if (empty($name)){
        header("Location: contact.php?error=Name is required");
        exit();
    }
     elseif (empty($email)){
        header("Location: contact.php?error=Email is required");
        exit();
    }
    elseif (empty($phone)){
        header("Location: contact.php?error=Phone is required");
        exit();
    }
    elseif (empty($msg)){
        header("Location: contact.php?error=Message is required");
        exit();
    }
    else{

    $exe_query="INSERT INTO contact_info (contact_name,contact_email,contact_phone,contact_msg) VALUES ('$name','$email
	','$phone','$msg')";
    mysqli_query($connect,$exe_query);
	 header("Location: contact.php?error=Contact Submited");

    }
?>