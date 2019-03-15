<?php
session_start();

if (isset($_SESSION['Donor']) || isset($_SESSION["Patient"]) || isset($_SESSION["dba"]) || isset($_SESSION["Recepatanist"]) || isset($_SESSION["Manager"]))
{
	$conn=new mysqli("localhost","jay_golakiya","","project_dbms");
	
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
    <title> BBM - Manage Requests </title>
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
                       Manage Requests
                    </h3>
                </div>
            </div>
        </div>

        <div class="breadcrumbs">
            <ul>
                <li><a href="home.php">Home</a>  |   </li>
                <li><span> Manage Requests </span></li>
            </ul>
        </div>
    </div>
</section>
<!--page title section end-->


	<section class="pb100 pt100">
    <div class="container">
        <div class="section_title mb50">
            <h3 class="title">
               Pending requests 
				</h3>
        </div>

            <div class="col-md-12 ">
                <div class="price_box">
                    <div class="price_header" >
                      
						<table class="table table-hover table-striped table-active">
						
						<thead>
					   <tr>
					   <th>Name</th>
					   <th>Blood Group</th>
					   <th>No of Bottles</th>
					  
					   
					   </tr>
					   </thead>
						<tbody>
						
						
						
						
						<?php
						$fq="select * from p_request ";
						$result=$conn->query($fq);	
						
						if ($result->num_rows > 0) 
						{
							while($row = $result->fetch_assoc())
							{	
								
								$pid=$row["P_ID"];
								$req=$row["BOTTLES"];
								
								$fq1="select * from patient where P_ID='$pid' ";
								$result1=$conn->query($fq1);
								$row1 = $result1->fetch_assoc();
									
								
								
						
								
								echo '<tr>';
								echo "<td>".$row1["P_NAME"]."</td>";
								echo "<td>".$row1["P_BGROUP"]."</td>";
								echo "<td>".$req."</td>";
								echo '</tr>';
						
							}
						}
						
						
						
						
						
						?>
						
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
