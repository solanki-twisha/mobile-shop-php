<?php 
    $connect=mysqli_connect("localhost","root","","mobileshop");
?>

<!DOCTYPE html>
<html>
<head>
	<!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Mobile Shop</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<body>
	<header>
        <!-- header inner -->
        <div class="header">

            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="index.php"><img src="images/LOGOO.png" alt="#"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <div class="menu-area">
                            <div class="limit-box">
                                <nav class="main-menu">
                                    <ul>
                                        <li class="active"> <a href="index.php">Home</a> </li>
                                        <li> <a href="about.php">About</a> </li>
                                        <!-- <li ><a href="brand.php">Brand</a>
                                            
                                        </li> -->
                                        <li>
                                            <!-- First Tier Drop Down -->
                                            <label for="drop-2" class="toggle toogle-2"><font color="black" size="3">mobile Brands 
                                            </font><span class="fa fa-angle-down" aria-hidden="true"></span></label>
                                            <!-- <a href="../#">Categories <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                                            <input type="checkbox" id="drop-2" /> -->
                                            <ul>
                                                <?php
                                                $cat=mysqli_query($connect,"select * from mobilebrand");
                                                while($rcat=mysqli_fetch_array($cat))
                                                {
                                                ?>
                                                <li><a href="mobile.php?brand_id=<?php echo $rcat[0]; ?>" class="drop-text"><?php echo $rcat[1]; ?></a></li>
                                                <?php
                                                }
                                                ?>
                                                <!--<li><a href="#chefs" class="drop-text">Our Chef's</a></li>
                                                <li><a href="Blog.php" class="drop-text">Blog Posts</a></li>
                                                <li><a href="#services" class="drop-text">Services</a></li>
                                                <li><a href="Achievements.php" class="drop-text">Achievements</a></li>
                                                <li><a href="Reviews.php" class="drop-text">Reviews</a></li>
                                                <li><a href="#subscribe" class="drop-text">Subscribe</a></li>-->
                                            </ul>

                                        </li>

                                        <li><a href="contact.php">Contact Us</a></li>
                                        <li><a href="feedback.php">FeedBack</a></li>
                                        <li><a href="login.php" class="btn">LOG IN</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-md-6 offset-md-6">
                        <div class="location_icon_bottum">
                            <ul>
                                <li><img src="icon/call.png" />(+91) 1234898200</li>
                                <li><img src="icon/email.png" />mobileshop@gmail.com</li>
                                <li><img src="icon/loc.png" />Location</li>
                            </ul>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- end header inner -->
    </header>

    
</body>
</html>