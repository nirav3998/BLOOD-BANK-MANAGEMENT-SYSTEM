<?php
session_start();

if (isset($_SESSION["Manager"])){

$conn=new mysqli("localhost","jay_golakiya","","project_dbms");

if(isset($_POST["submit"]))
{
	
$lid=$_SESSION["Manager"];
$name=$_POST['name'];
$date=$_POST['date'];
//$stime=$_POST['stime'];
$stime=date('h:i A', strtotime($_POST['stime']));
$etime=date('h:i A', strtotime($_POST['etime']));
$time= "".$stime." TO ".$etime;



$add=$_POST['add'];
$c_about=$_POST['c_about'];

$fq5="select * from employee where E_L_ID = '$lid'";
$result5=$conn->query($fq5);
$row = $result5->fetch_assoc();

$bkid=$row['BK_ID'];



	

 $fq="select * from blood_donationcamp";
 $result=$conn->query($fq);
 $rowcount=mysqli_num_rows($result);
 $rowcount=$rowcount+1;
 $C_ID = "C".$rowcount;
 
 
 
 $fq1="insert into blood_donationcamp (C_ID,BK_ID,C_TIME,C_DATE,C_ADD,C_ABOUT) values ('$C_ID','$bkid','$time','$date','$add','$c_about')";
 
 $result1=$conn->query($fq1);	

 
		
 
	 if (isset($result1)  )
	 {
		echo ' 
		<script>
			alert("CAMP added Sucessfully... ");
		</script>';
		header('location:./addcamp.php');
		
	 } else {
		 echo '
		<script type="text/javascript">
			alert("Retry!!!");
		</script>';
		header('location:./addcamp.php');
		
	 }
 
}
	


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
    <title> BBM - ADD CAMP</title>
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
                        ADD CAMP
						</h3>
                </div>
            </div>
        </div>

        <div class="breadcrumbs">
            <ul>
                <li><a href="home.php">Home</a>  |  </li>
                <li><span>Add CAMP</span></li>
            </ul>
        </div>
    </div>
</section>
<!--page title section end-->


<!--about section -->
<section class="pt100 pb100">
    <div class="container">
		<div class="section_title">
			<div class="col-12 ">
               <div class="footer_box">
                    <div class="footer_header">
                        <h4 class="title">
                            ADD CAMP
                        </h4>
                    </div>
                    <div class="footer_box_body">
                        <div class="newsletter_form">
                            <form method="POST">
							<h6>Name:</h6>
                            <input type="text" class="form-control" placeholder="Enter Camp Name" name="name" required>
							<h6>Date</h6>
							<input type="date" class="form-control" placeholder="Date of Camp" name="date" required>
							<h6>START Time</h6>
							<input type="time" class="form-control" placeholder="start time" name="stime" required>
							<h6>END Time</h6>
							<input type="time" class="form-control" placeholder="end time" name="etime" required>
							
							<h6>ADDRESS:</h6>
                            <input type="text" class="form-control" placeholder="Enter Address" name="add" required>
							
							<h6>About Camp</h6>
                            <input type="text" class="form-control" placeholder="Enter Address" name="c_about" required>
							
                        </div>
							<button type="submit" class="btn_login btn-rounded  btn-primary" name="submit">Submit</button>
							<button type="reset" class="btn_login btn-rounded  btn-primary" name="reset">Reset</button>
							</form>
					</div>
                </div>
            </div>
		</div>
    </div>
</section>
<!--get tickets section end-->



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
