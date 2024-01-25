<?php
$connect=mysqli_connect("localhost","root","","mobileshop");
$firstnm=$_POST['fname'];
$lastnm=$_POST['lname'];
$email=$_POST['email'];
$username=$_POST['uname'];
$password=$_POST['password'];
$confirmpass=$_POST['cpassword'];

    if (empty($firstnm)){
        header("Location: registration.php?error=First Name is required");
        exit();
    }
     elseif (empty($lastnm)){
        header("Location: registration.php?error=Last Name is required");
        exit();
    }
    elseif (empty($email)){
        header("Location: registration.php?error=Email is required");
        exit();
    }
    elseif (empty($username)){
        header("Location: registration.php?error=User Name is required");
        exit();
    }
    elseif (empty($password)){
        header("Location: registration.php?error=Password is required");
        exit();
    }
    elseif (empty($confirmpass)){
        header("Location: registration.php?error=Confirm Password is required");
        exit();
    }
    elseif ($password!=$confirmpass) {
        header("Location: registration.php?error=Please enter same Password");
        exit();
    }
    else{
	$exe_query="INSERT INTO `registration`(`fname`, `lname`, `email`, `uname`, `password`) VALUES ('$firstnm','$lastnm
	','$email','$username','$password')";
	mysqli_query($connect,$exe_query);
	 header("Location: registration.php?error=Accout Created");
	}
	
?>