<?php
	
$connect=mysqli_connect("localhost","root","","mobileshop");
$name=$_POST['namee'];
$email=$_POST['emaill'];
$phone=$_POST['phonee'];
$msg=$_POST['msgg'];

	if (empty($name)){
        header("Location: feedback.php?error=Name is required");
        exit();
    }
     elseif (empty($email)){
        header("Location: feedback.php?error=Email is required");
        exit();
    }
    elseif (empty($phone)){
        header("Location: feedback.php?error=Phone is required");
        exit();
    }
    elseif (empty($msg)){
        header("Location: feedback.php?error=Message is required");
        exit();
    }
    else{

    $exe_query="INSERT INTO `feedback`(`feedback_name`, `feedbak_email`, `feedback_phone`, `feedback_message`) VALUES ('$name','$email
	','$phone','$msg')";
    mysqli_query($connect,$exe_query);
	 header("Location: feedback.php?error=FeedBack Submited");

    }
?>