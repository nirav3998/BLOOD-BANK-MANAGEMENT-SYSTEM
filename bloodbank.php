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
    <title> BBM - Blood Banks </title>
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
            <img src="assets/img/logo.png" alt="Evento"/>
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
                    <a class="nav-link " href="logout.php">logout</a>
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

<!--page title section-->
<section class="inner_cover parallax-window" data-parallax="scroll" data-image-src="assets/img/bg/bg-img.png">
    <div class="overlay_dark"></div>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-12">
                <div class="inner_cover_content">
                    <h3>
                        Blood Banks
                    </h3>
                </div>
            </div>
        </div>

        <div class="breadcrumbs">
            <ul>
                <li><a href="home.php">Home</a>   |  </li>
                <li><span>Blood Banks</span></li>
            </ul>
        </div>
    </div>
</section>
<!--page title section end-->

<p><br></p>

<!--event calender-->
<section class="pb100">
    <div class="container">
        <div class="table-responsive">
            <table class="event_calender table">
                <thead class="event_title">
                <tr>
                    <th>
                        <i class="ion-waterdrop"></i>
                        <span>Blood banks</span>
                    </th>
                    <th></th>
                    <th></th>
                    <th></th>
                 <!--   <th></th> -->
                </tr>
                </thead>
                <tbody>
				<?php
					$conn=new mysqli("localhost","jay_golakiya","","project_dbms");
					$fq2="select * from blood_bank ";
		                $result2=$conn->query($fq2);
						
						if ($result2->num_rows > 0) 
						{
							while($row2 = $result2->fetch_assoc())
							{
				
					  echo	
					  '<tr>
						<td>
                        <img src="assets/img/cleander/c1.png" alt="event">
						</td>
                    <td class="event_date">
                        <h4> '.$row2["BK_NAME"].'</h4>
							
						
						<p>'.$row2["BK_ADD"]."	<br>	".$row2["BK_CONTACT2"].'<br>'
						.$row2["BK_CONTACT1"].'</p>
                       <!-- <span>February</span> --->
                    </td>
					</tr>';
							}
						}
						?>
					
					<tr>
					
                    
                <!--    <td>
                        <div class="event_place">
                           <h5>Contact 1</h5>
                            <h5>Contact 2</h5>
                         <p>Speaker: Daniel Hill</p> 
                        </div>
                    </td>
                    <td>  --->
                    <!--    <a href="#" class="btn btn-primary btn-rounded">Read More</a>
                    </td>
                    <td class="buy_link">
                        <a href="#">buy now</a> --->
						
                    </td>
                </tr>
    <!--            <tr> 
                    <td>
                        <img src="assets/img/cleander/c2.png" alt="event">
                    </td>
                    <td class="event_date">
                        18
                        <span>February</span>
                    </td>
                    <td>
                        <div class="event_place">
                            <h5>Conference in Amsterdam</h5>
                            <h6>08 AM - 04 PM</h6>
                            <p>Speaker: Daniel Hill</p>
                        </div>
                    </td>
                    <td>
                        <a href="#" class="btn btn-primary btn-rounded">Read More</a>
                    </td>
                 <!--   <td class="buy_link">
                        <a href="#">buy now</a>
                    </td> 
                </tr>
                <tr>
                    <td>
                        <img src="assets/img/cleander/c3.png" alt="event">
                    </td>
                    <td class="event_date">
                        22
                        <span>February</span>
                    </td>
                    <td>
                        <div class="event_place">
                            <h5>Conference in Amsterdam</h5>
                            <h6>08 AM - 04 PM</h6>
                            <p>Speaker: Daniel Hill</p>
                        </div>
                    </td>
                    <td>
                        <a href="#" class="btn btn-primary btn-rounded">Read More</a>
                    </td>
                <!--    <td class="buy_link">
                        <a href="#">buy now</a>
                    </td> 
					[
                </tr> -->
                </tbody>
            </table>
        </div>
    </div>
</section>
<!--event calender end -->



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