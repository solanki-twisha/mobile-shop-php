<?php
	$connect=mysqli_connect("localhost","root","","mobileshop");
	$username=$_POST['username'];
	$password=$_POST['password'];

    
 	if (empty($username) && empty($password)) {
        header("Location: login.php?error=User Name and Password are required");
        exit();
    }
    elseif (empty($username)) {
        header("Location: login.php?error=User Name is required");
        exit();
    }
    elseif (empty($password)) {
        header("Location: login.php?error=password is required");
        exit();
        }    
    else{

    $sql = "select * from registration where uname = '$username' and password = '$password'";

    $result = mysqli_query($connect, $sql);  
    //$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $row = mysqli_fetch_assoc($result);
        if ($row['uname'] == $username && $row['password'] == $password) 
        {
                //echo "Logged in!";
                header("Location: index.php");
                exit();
        }
        else
        {
            //echo "ERROR...";
            header("Location: login.php?error=Incorect User name or password");
        }
    }
?>