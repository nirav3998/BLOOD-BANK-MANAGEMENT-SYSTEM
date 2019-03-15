<!DOCTYPE html>

<html lang="en">
<head>

    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta name="description" content="Evento -Event Html Template">
    <meta name="keywords" content="Evento , Event , Html, Template">
    <meta name="author" content="ColorLib">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- ========== Title ========== -->
    <title> BBM - Home </title>
    <!-- ========== Favicon Ico ========== -->
    <!--<link rel="icon" href="fav.ico">-->
    <!-- ========== STYLESHEETS ========== -->
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Fonts Icon CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/et-line.css" rel="stylesheet">
    <link href="assets/css/ionicons.min.css" rel="stylesheet">
    <!-- Carousel CSS -->
    <link href="assets/css/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/css/owl.theme.default.min.css" rel="stylesheet">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">
</head>
<body>
<div class="loader">
    <div class="loader-outter"></div>
    <div class="loader-inner"></div>
</div>

<!--header start here -->
<header class="header navbar fixed-top navbar-expand-md">
    <div class="container">
        <a class="navbar-brand logo" href="home.html">
            <img src="assets/img/logo.png" alt="logo"/>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#headernav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="lnr lnr-text-align-right"></span>
        </button>
        <div class="collapse navbar-collapse flex-sm-row-reverse" id="headernav">
            <ul class=" nav navbar-nav menu">
                <li class="nav-item">
                    <a class="nav-link active" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="logout.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="finddonor.php">find donor</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="bloodbank.php">blood bank</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="contactus.php">Contact us</a>
               </li>
            </ul>
        </div>
    </div>
</header>
<!--header end here-->

<!--cover section slider -->
<section id="home" class="home-cover">
    <div class="cover_slider owl-carousel owl-theme">
        <div class="cover_item" style="background: url('assets/img/bg/slider.png');">
             <div class="slider_content">
                <div class="slider-content-inner">
                    <div class="container">
                        <div class="slider-content-center">
                            <h2 class="cover-title">
                                Blood Donation Camp
                            </h2>
                            <strong class="cover-xl-text">રક્તદાન જીવનદાન</strong>
							
							<?php
							/*$conn=new mysqli("localhost","jay_golakiya","","project_dbms");
                                   

							$date = date("Y-d-m");
							 $fq="select * from blood_donationcamp where C_DATE <= '$date'";
		                            $result=$conn->query($fq);
							$row = $result->fetch_assoc();
							if ($result->num_rows > 0) 
															{
																while($row = $result->fetch_assoc())
																{
																	
																	echo '<p class="cover-date">'."<br>".$row["C_DATE"]."<br> ".$row["C_TIME"]." <br> "."</p>";
																	break;
																}
														
															}*/
																
							?>
                            
                         
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cover_item" style="background: url('assets/img/bg/slider.png');">
            <div class="slider_content">
                <div class="slider-content-inner">
                    <div class="container">
                        <div class="slider-content-left">
                            <h2 class="cover-title">
                                Blood Donation Camp
                            </h2>
                            <strong class="cover-xl-text">They Live<br>When You Give</strong>
                            <?php  //echo '<p class="cover-date">'."<br>".$row["C_DATE"]."<br> ".$row["C_TIME"]." <br> "."</p>";?>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cover_item" style="background: url('assets/img/bg/slider.png');">
            <div class="slider_content">
                <div class="slider-content-inner">
                    <div class="container">
                        <div class="slider-content-center">
                            <h2 class="cover-title">
                                Blood Donation camp
                            </h2>
                            <strong class="cover-xl-text">Give Blood <br>Give Life </strong>
                            <?php //echo '<p class="cover-date">'."<br>".$row["C_DATE"]."<br> ".$row["C_TIME"]." <br> "."</p>";?>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="cover_nav">
        <ul class="cover_dots">
            <li class="active" data="0"><span>1</span></li>
            <li  data="1"><span>2</span></li>
            <li  data="2"><span>3</span></li>
        </ul>
    </div>
</section>
<!--cover section slider end -->

<!--event info -->
<section class="pt100 pb100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6 col-md-3  ">
                <div class="icon_box_two">
                    <i class="ion-ios-calendar-outline"></i>
                    <div class="content">
                        <h5 class="box_title">
                            DATE
                        </h5>
                        <?php //echo "<p>".$row["C_DATE"]."</p>";?>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-3  ">
                <div class="icon_box_two">
                    <i class="ion-ios-location-outline"></i>
                    <div class="content">
                        <h5 class="box_title">
                            location
                        </h5>
                        
                            <?php //echo "<p>".$row["C_ADD"]."</p>";?>
                       
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-3  ">
                <div class="icon_box_two">
                    <i class="ion-ios-timer-outline"></i>
                    <div class="content">
                        <h5 class="box_title">
                            time
                        </h5>
                        <?php //echo '<p>'.$row["C_TIME"]."</p>";?>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-3  ">
                <div class="icon_box_two">
                    <i class="ion-waterdrop"></i>
                    <div class="content">
                        <h5 class="box_title">
                            organized by
                        </h5>
                        <?php
						/*$cid=$row["C_ID"];
						$fq1="select BK_ID from camp_organization where C_ID = '$cid' ";
							$result1=$conn->query($fq1);
						$bk_id = $result1->fetch_assoc();
						$bkid = $bk_id["BK_ID"];
						$fq2="select BK_NAME from blood_bank where BK_ID = '$bkid' ";
						$result2 = $conn->query($fq2);
						$bk_name = $result2->fetch_assoc();
						echo '<p>'.$bk_name["BK_NAME"]."</p>";*/
					
						?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--event info end -->






<!--event countdown -->
<section class="bg-img pt70 pb70" style="background-image: url('assets/img/bg/bg-img-2.png');">
    <div class="overlay_dark"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10">
                <h4 class="mb30 text-center color-light">Coming soon</h4>
                <div class="countdown" id='demo'></div>
				
				
            </div>
        </div>
    </div>
</section>
<!--event count down end-->


<!--about the event -->
<section class="pt100 pb100">
    <div class="container">
        <div class="section_title">
            <h3 class="title">
                About the camp
            </h3>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 ">
                <p>
                    <?php 
					//echo " ".$row["C_ABOUT"];
					//$conn->close();
						?>
                </p>
            </div>
        </div>
</section>
      <!-- jquery -->
<script src="assets/js/jquery.min.js"></script>
<!-- bootstrap -->
<script src="assets/js/popper.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<!--slick carousel -->
<script src="assets/js/owl.carousel.min.js"></script>
<!--parallax -->
<script src="assets/js/parallax.min.js"></script>
<!--Counter up -->
<script src="assets/js/jquery.counterup.min.js"></script>
<!--Counter down -->
<script src="assets/js/jquery.countdown.min.js"></script>
<!-- WOW JS -->
<script src="assets/js/wow.min.js"></script>
<!-- Custom js -->
<script src="assets/js/main.js"></script>
</body>
</html>