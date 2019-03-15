<?php
	$conn=new mysqli("localhost","jay_golakiya","","project_dbms");
	if(isset($_POST['login']))
    {
    	$lid=$_POST['lid'];
    	$password=$_POST['password'];
		session_start();
    	
    	$fq="select USERID from login_table where USERID='$lid' and PASSWORD='$password'";
		$result=$conn->query($fq);
		
		if ($result->num_rows > 0) 
		{
		// output data of each row
			
			while($row = $result->fetch_assoc())
			{
				$temp=substr($lid, 0, 1);
				if($temp=='P')
				{
					
					$_SESSION["Patient"] =$lid;
					header('location:./Patient.php');
				}
				else if($temp=='D')
				{
					$_SESSION["Donor"] =$lid;
					
					header('location:./Donor.php');
				}
				else if($temp=='E')
				{
					$temp2=substr($lid, 6, 1);
					if($temp2=='M')
						{
							$_SESSION["Manager"] =$lid;
							
							header('location:./Manager.php');
						}
					else if($temp2=='R')
						{
							$_SESSION["Receptionist"] =$lid;
					
							header('location:./Receptionist.php');
						}
					else if($temp2=='C')
						{
							$_SESSION["Cashier"] =$lid;
					
							header('location:./cashier.php');
						}
				}
				else if($temp=='H')
				{
					$_SESSION["Hospital"] =$lid;
					
					header('location:./Hospital.php');
				}
				else 
				{
					$_SESSION["dba"] =$lid;
					
					header('location:./dba.php');
				}
			
			}
		}
	 else 
		{
			echo '<script type="text/javascript">
			alert("Retry!!!");
		</script>';
		
		}
	}	
		$conn->close();

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
    <title> BBM - Login </title>
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
                    <a class="nav-link " href="login.php">login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="finddonor.php">find donor</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="bloodbank.php">Blood Bank</a>
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
                        LOGIN 
                    </h3>
                </div>
            </div>
        </div>

        <div class="breadcrumbs">
            <ul>
                <li><a href="home.php">Home</a>  |  </li>
                <li><span>Login</span></li>
            </ul>
        </div>
    </div>
</section>
<!--page title section end-->


<!--about section -->
<section class="pt100 pb100">
    <div class="container">
		<div class="section_title">
			<div class="col-12 col-md-4">
               <div class="footer_box">
                    <div class="footer_header">
                        <h4 class="title">
                            LOGIN 
                        </h4>
                    </div>
                    <div class="footer_box_body">
                        <div class="newsletter_form">
                            <form method=POST>
                            <input type="text" class="form-control" placeholder="login Id" name="lid">
							<input type="password" class="form-control" placeholder="Password" name="password">
                        </div>
							<button class="btn_login btn-rounded btn-block btn-primary" name="login">Login</button>
							</form>
					</div>
                </div>
            </div
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