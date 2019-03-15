<?php
		session_start();

if (isset($_SESSION['Donor'])) {
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
    <title> BBM - Donor </title>
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
	<link href="assets/css/form.css" rel="stylesheet">
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
                    <a class="nav-link " href="logout.php">Logout</a>
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
                        DONOR
                    </h3>
                </div>
            </div>
        </div>

        <div class="breadcrumbs">
            <ul>
                <li><a href="home.php">Home</a>  |  </li>
                <li><span>Donor</span></li>
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
                Donor Details
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
					
				
					<div class="form-popup" id="myForm" >
                        <div>
                            <form class="form-container" 
							>
                            <input type="text"  placeholder="Enter Name" name="name" required>
							<input type="email"  placeholder="Enter email address" name="mail" required>
							<input type="number"  placeholder="Enter age" name="age" max="150" required>							
							<input type="text"  placeholder="Blood group" name="bgroup" maxlength="3" required>
							<input type="number"  placeholder="Enter weight" name="weight" maxlength="3" required>
							<input type="number"  placeholder="ADDRESS : Plot no" name="pno" required>
							<input type="text"  placeholder="ADDRESS : Street " name="street">
							<input type="text" placeholder="ADDRESS : Area" name="area">
							<input type="text"  placeholder="ADDRESS : City" name="city"  required>
							<input type="number"  placeholder="ADDRESS : Pincode" name="pincode" maxlength="6" size="6" required>
							<input type="number" placeholder="Contact 1" name="contactno1" pattern=".{10,13}" required>
							<input type="number"  placeholder="Contact 2" name="contactno2" pattern=".{10,13}">
							<input type="password"  placeholder="Set Password" name="pass1" pattern=".{8,16}" required>
							<input type="password"  placeholder="Re Enter Password" name="pass2"  pattern=".{8,16}" required>
							
							<input type="radio"   name="gender" value="male" checked> Male
							  <input type="radio"  name="gender" value="female"> Female
							  <input type="radio"  name="gender" value="other"> Other
							  <p><br></p>
							
							
                        </div>
							<button type="submit" name="submit" onclick="closeForm()">Submit</button>
							<button type="reset"  name="reset">Reset</button>
							</form>
						</div>	
					</div>
					<?php
					echo '<script>
						function openForm() {
							document.getElementById("myForm").style.display = "block";
						}

						function closeForm() {
							document.getElementById("myForm").style.display = "none";
						}
					</script>';
						?>
					
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
                    <div class="price_header" >
                      
						<table class="table table-hover table-striped table-active">
						
						<thead>
					   <tr>
					   <th>Date</th>
					   <th>Donation Place</th>
					   <th>Certificate no</th>
					   
					   </tr>
					   </thead>
						<tbody>
						<?php
					
						
						$fq2="select * from indirect_donate where D_ID='$var'";
		                $result2=$conn->query($fq2);
						
						if ($result2->num_rows > 0) 
						{
							while($row2 = $result2->fetch_assoc())
							{
								echo '<tr>';
								echo "<td>".$row2["D_DATE"]."</td>";
								$bk_id = $row2["BK_ID"];
								$fq4="select BK_NAME from blood_bank where BK_ID='$bk_id'";
								$result4=$conn->query($fq4);
								$ans=$result4->fetch_assoc();
								echo "<td>".$ans["BK_NAME"]."</td>";
								
								echo "<td>".$row2["BK_CERTIFICATE"]."</td>";
								echo '</tr>';
							}
						}
						
						$fq3="select * from camp_donate where D_ID='$var'";
						$result3=$conn->query($fq3);
					
						
						if ($result3->num_rows > 0) 
						{
							while($row3 = $result3->fetch_assoc())
							{
								echo '<tr>';
								
								$c_id = $row3["C_ID"];
								$fq5="select C_DATE from blood_bank where C_ID='$c_id'";
								$result5=$conn->query($fq5);
								$ans=$result5->fetch_assoc();
								echo "<td>".$ans["C_DATE"]."</td>";
								echo "<td>Camp Donate</td>";
								
								echo "<td>".$row3["C_CERTIFICATE"]."</td>";
								echo '</tr>';
							}
						}
			
						
						
						$conn->close();
						?>
						
						</tbody>
						</table>
                    </div>
                    
                    
                </div>
            </div>
       
        </div>
    </div>
</section>
<!--price section end -->

<!--brands section -->
<section class="bg-gray pt100 pb100">
    <div class="container">
        <div class="section_title mb50">
            <h3 class="title">
                our partners
            </h3>
        </div>
        <div class="brand_carousel owl-carousel">
            <div class="brand_item text-center">
                <img src="assets/img/brands/b1.png" alt="brand">
            </div>
            <div class="brand_item text-center">
                <img src="assets/img/brands/b2.png" alt="brand">
            </div>

            <div class="brand_item text-center">
                <img src="assets/img/brands/b3.png" alt="brand">
            </div>
            <div class="brand_item text-center">
                <img src="assets/img/brands/b4.png" alt="brand">
            </div>
            <div class="brand_item text-center">
                <img src="assets/img/brands/b5.png" alt="brand">
            </div>
        </div>
    </div>
</section>
<!--brands section end-->

                     
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