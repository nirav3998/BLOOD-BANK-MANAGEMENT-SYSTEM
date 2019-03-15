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
    <title> BBM - Find Donor </title>
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
                       Find Donor
                    </h3>
                </div>
            </div>
        </div>

        <div class="breadcrumbs">
            <ul>
                <li><a href="home.php">Home</a>  |   </li>
                <li><span> Find Donor</span></li>
            </ul>
        </div>
    </div>
</section>
<!--page title section end-->

<section class="pt100 pb100">
    <div class="container">
		<div class="section_title">
			<div class="col-12 col-md-4">
               <div class="footer_box">
                    <div class="footer_header">
                        <h4 class="title">
                            FIND DONOR
                        </h4>
                    </div>
                    <div class="footer_box_body">
						<form method="POST" class="form-container">
                        <div class="newsletter_form">
                            <input type="text" class="form-control" placeholder="Blood Group" name="BGroup">
					
							<select name="DCity" class="form-control">
							<option value="Ahmedabad" >Ahmedabad</option>
							<option value="Anand">Anand</option>
							<option value="Ankleshwar">Ankleshwar</option>
							<option value="Bharuch">Bharuch</option>
							<option value="Bhavnagar">Bhavnagar</option>
							<option value="Bhuj">Bhuj</option>
							<option value="Gandhinagar">Gandhinagar</option>
							<option value="Gir">Gir</option>
							<option value="Jamnagar">Jamnagar</option>
							<option value="Kandla">Kandla</option>
							<option value="Porbandar">Porbandar</option>
							<option value="Rajkot">Rajkot</option>
							<option value="Surat">Surat</option>
							<option value="Vadodara">Vadodara/Baroda</option>
							<option value="Valsad">Valsad</option>
							<option value="Vapi">Vapi</option>
							</select>
							
				
							
							
                            <button type="submit" name="submit" value="Get Selected Values" class="btn btn-rounded btn-block btn-primary">Find</button>
                        </form>
			
				</div>
						
                    </div>
                </div>
            </div>
		</div>
	</div>
</section>
<?php
						if(isset($_POST['submit'])){
						$BGroup = $_POST['BGroup'];
						$DCity = $_POST['DCity'];  // Storing Selected Value In Variable
						
						
						
?>	<section class="pb100">
    <div class="container">
        <div class="section_title mb50">
            <h3 class="title">
                Donor in your area
				</h3>
        </div>

            <div class="col-md-12 ">
                <div class="price_box">
                    <div class="price_header" >
                      
						<table class="table table-hover table-striped table-active">
						
						<thead>
					   <tr>
					   <th>Name</th>
					   <th>Contact No</th>
					  
					   
					   </tr>
					   </thead>
						<tbody>
						
						
						
						
						<?php
						$fq1="select * from donor  where D_BGROUP='$BGroup' AND D_A_CITY='$DCity'";
		                $result1=$conn->query($fq1);
						if ($result1->num_rows > 0) 
						{
							while($row1 = $result1->fetch_assoc())
							{	
								
								$con=$row1["D_ID"];
								$fq2="select * from d_contact  where D_ID='$con'";
								$result2=$conn->query($fq2);		
								
								echo '<tr>';
								echo "<td>".$row1["D_NAME"]."</td>";
								
								if ($result2->num_rows > 0) 
								{
									while($row2 = $result2->fetch_assoc())
									{
										echo "<td>".$row2["D_CONTACT"]."</td>";
										break;
									}
								}
								echo '<tr>';}
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
