<?php
		session_start();

if (isset($_SESSION['Patient'])) {
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
    <title> BBM - Patient </title>
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
                    <a class="nav-link " href="logout.php" >Logout</a>
					
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
                        Patient
                    </h3>
                </div>
            </div>
        </div>

        <div class="breadcrumbs">
            <ul>
                <li><a href="#">Home</a>  |  </li>
                <li><span>Patient</span></li>
            </ul>
        </div>
    </div>
</section>
<!--page title section end-->
<br>
<br>



<section class="pb100">
    <div class="container">
		
		<div class="section_title mb50">
		
            <h3 class="title">
                Patient Details
            </h3>
		
		</div>
		
        <div class="table-responsive">
            <table class="event_calender table">
                <thead class="event_title">
                <tr>
                    <th>
                        <span>Personal Information</span>
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
									$lid=$_SESSION["Patient"]; 
                                    $conn=new mysqli("localhost","jay_golakiya","","project_dbms");
                                    $fq="select * from patient where P_L_ID='$lid'";
		                            $result=$conn->query($fq);
									 
										  $row = $result->fetch_assoc();
										  $var = $row["P_ID"];
											  echo $row["P_NAME"]."<br>";
							
						?></h4>
						<p><?php  echo "Age  :  ".$row["P_AGE"]."<br>";
								  echo "Blood group  :  ".$row["P_BGROUP"]."<br>";
								  echo "Email  :  ".$row["P_EMAIL"]."<br>";
								  echo "Address  :  ".$row["P_A_PLOTNO"].", ".$row["P_A_STREET"].", ".$row["P_A_AREA"].", ".$row["P_A_CITY"].", ".$row["P_A_PINCODE"]."<br>";
								  
								  $fq1="select * from p_contact where P_ID='$var'";
								$result1=$conn->query($fq1);
									$i = 1;
						
								if ($result1->num_rows > 0) 
								{
									while($row1 = $result1->fetch_assoc())
									{
										echo "Contact ".$i++." : ".$row1["P_CONTACT"]."<br>";
									}
								}
								  
								
								  ?></p>
                      
                    </td>
					<td>
					
						<div class="newsletter_form">
							<form method="POST">
                            <input type="number" class="form-control" name="bottles" placeholder="No of Bottles">
                            <button class="btn btn-rounded btn-block btn-primary" name="request">Request</button>
							</form>
							<?php
							if(isset($_POST["request"]))
							{
							$bot = $_POST["bottles"];
							$fq2="INSERT INTO p_request (P_ID,BOTTLES) values ('$var','$bot')";
							$result2=$conn->query($fq2);
							if ($result2)
								{
							echo ' 
							<script>
								alert("Sent request Sucessfully... ");
							</script>';
		
								}
							}
							?>
                        </div>
	
                    </div>
					</td>
					
                </tr>
   
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


<?php
}
else
	header('location:./login.php');
?>