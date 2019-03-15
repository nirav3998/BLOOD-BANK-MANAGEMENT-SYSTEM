<?php
		session_start();

if (isset($_SESSION['Manager'])) {
	?>



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
    <title> BBM - Requests </title>
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
        <a class="navbar-brand logo" href="home.php">
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
                    <a class="nav-link " href="login.php">Logout</a>
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
<section class="inner_cover parallax-window" data-parallax="scroll" data-image-src="assets\img\bg\bg-img.png">
    <div class="overlay_dark"></div>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-12">
                <div class="inner_cover_content">
                    <h3>
                        Requests for Blood
                    </h3>
                </div>
            </div>
        </div>

        <div class="breadcrumbs">
            <ul>
                <li><a href="home.php">Home</a>  |  </li>
                <li><span>Requests for blood</span></li>
            </ul>
        </div>
    </div>
</section>
<!--page title section end-->
<br>
<br>

<section class="pb100">
    <div class="container">
        <div class="table-responsive">
            <table class="event_calender table">
                <thead class="event_title">
                <tr>
                    <th>
                        <span>From Patients</span>
                    </th>
                    <th></th>
					<th></th>
                 <!--   <th></th> -->
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        <img src="assets/img/cleander/c1.png" alt="event">
                    </td>
                    <td class="event_date">
                        <h4>
						<?php
									$lid=$_SESSION["Donor"]; 
                                    $conn=new mysqli("localhost","jay_golakiya","","project_dbms");
                                    $fq="select * from donor where D_L_ID='$lid'";
		                            $result=$conn->query($fq);
									 
										  $row = $result->fetch_assoc();
										  $var = $row["D_ID"];
											  echo $row["D_NAME"]."<br>";
							
						?></h4>
						<p><?php  echo "Age  :  ".$row["D_AGE"]."<br>";
								  echo "Blood group  :  ".$row["D_BGROUP"]."<br>";
								  echo "Gender  :  ".$row["D_GENDER"]."<br>";
								  echo "Weight  :  ".$row["D_WEIGHT"]."<br>";
								  echo "Email  :  ".$row["D_EMAIL"]."<br>";
								  echo "Address  :  ".$row["D_A_PLOTNO"].", ".$row["D_A_STREET"].", ".$row["D_A_AREA"].", ".$row["D_A_CITY"].", ".$row["D_A_PINCODE"]."<br>";
								  
								  $fq1="select * from d_contact where D_ID='$var'";
								$result1=$conn->query($fq1);
									$i = 1;
						
								if ($result1->num_rows > 0) 
								{
									while($row1 = $result1->fetch_assoc())
									{
										echo "Contact ".$i++." : ".$row1["D_CONTACT"]."<br>";
									}
								}
								  
								
								  ?></p>
                      
                    </td>
					<td><div class="price_footer">
                        <a href="#" class="btn btn-primary btn-rounded">Edit</a>
                    </div></td>
					
                </tr>
   
                </tbody>
				
				
				<thead class="event_title">
                <tr>
                    <th>
                        <span>From Hospitals</span>
                    </th>
                    <th></th>
					<th></th>
                 <!--   <th></th> -->
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        <img src="assets/img/cleander/c1.png" alt="event">
                    </td>
                    <td class="event_date">
                        <h4>
						
		
					
					
                </tr>
   
                </tbody>
            </table>
        </div>
    </div>
</section>
<!--event calender end -->

<!--Price section-->
<section class="pb100">
    <div class="container">
        <div class="section_title mb50">
            <h3 class="title">
                Donetion Details
            </h3>
        </div>

            <div class="col-md-12 ">
                <div class="price_box">
                    <div class="price_header">
                       <!-- <h4>
                            Start up
                        </h4>
                        <h6>
                            For the begginers
                        </h6>-->
						<table>
						
						<tbody>
						<?php
						
			
						$fq2="select * from d_date where D_ID='$var'";
		                $result2=$conn->query($fq2);
						
						$fq3="select * from camp_donate where D_ID='$var'";
						$result3=$conn->query($fq3);
					
						
						if ($result2->num_rows > 0) 
						{
							while($row2 = $result2->fetch_assoc())
							{
								echo "<tr>".$row2["D_DATE"];
							}
						}
						if ($result3->num_rows > 0) 
						{
							while($row3 = $result3->fetch_assoc())
							{
								echo "<tr>".$row3["C_CERTIFICATE"];
							}
						}
						
						$conn->close();
						?>
						<tr>
						
						</tr>
						
						</tbody>
						</table>
                    </div>
                    
                    
                </div>
            </div>
       
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


<?php
}
else
	header('location:./login.php');
?>