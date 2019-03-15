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
    <title> BBM - Manager </title>
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
                        Manager
                    </h3>
                </div>
            </div>
        </div>

        <div class="breadcrumbs">
            <ul>
                <li><a href="home.php">Home</a>  |  </li>
                <li><span>Manager</span></li>
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
                Expired Blood units
				</h3>
        </div>

            <div class="col-md-12 ">
                <div class="price_box">
                    <div class="price_header" >
                      
						<table class="table table-hover table-striped table-active">
						
						<thead>
					   <tr>
					   <th>B_ID</th>
					   <th>DATE</th>
					  
					   
					   </tr>
					   </thead>
						<tbody>
						<?php
							$lid=$_SESSION["Manager"]; 
                             $conn=new mysqli("localhost","jay_golakiya","","project_dbms");
							$date = date("Y-d-m");
							$fq10= "select * from indirect_donate";
							$result10=$conn->query($fq10);
							$row10 = $result10->fetch_assoc();
							$i = 1;
							if ($result10->num_rows > 0) 
									{
										while($row10 = $result10->fetch_assoc())
										{
											
										$date1 = $row10["D_DATE"];
										
										$fq12="select DATEDIFF('$date','$date1')";
										$result12=$conn->query($fq12);
									
										
										
							while($row12 = $result12->fetch_assoc())
										{
											
										$did = $row10["D_ID"];
										$fq11 = "select B_ID from blood where D_ID = '$did'";
										$result11=$conn->query($fq11);
										
										$row11 = $result11->fetch_assoc();
								echo "<tr>";
											echo "<td>".$row11["B_ID"]."</td>";
											echo "<td>".$row10["D_DATE"]."</td>";echo "</tr>";
											$i = $i + 1;
											
							}
							
							
							
							
							
							
							
							
							if($i == 5)
											{break;}
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
						
<!--event calender-->
<section class="pb100">
    <div class="container">
		<div align="right">
			<a href="./adddonor.php" class="btn btn-primary btn-rounded">Add Donor</a>
			<a href="./addpatient.php" class="btn btn-primary btn-rounded">Add Patient</a>
			<a href="./addemployee.php" class="btn btn-primary btn-rounded">Add Employee</a>
			<a href="./addhospital.php" class="btn btn-primary btn-rounded">Add Hospital</a>
			<a href="./addcamp.php" class="btn btn-primary btn-rounded">Add Camp</a>
			
			<a href="./manage.php" class="btn btn-primary btn-rounded">Mange Requests</a>
			
        </div>
    </div>
</section>
<!--event calender end -->
<!--Price section-->
<section class="pb100">
    <div class="container">
        
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
								
                                    $fq="select * from employee where E_L_ID='$lid'";
		                            $result=$conn->query($fq);
									 
										  $row = $result->fetch_assoc();
										  $var = $row["E_ID"];
											  echo $row["E_NAME"]."<br>";
							
						?></h4>
						<p><?php 
								  echo "Email  :  ".$row["E_EMAIL"]."<br>";
								  echo "Address  :  ".$row["E_C_A_PLOTNO"].", ".$row["E_C_A_STREET"].", ".$row["E_C_A_AREA"].", ".$row["E_C_A_CITY"].", ".$row["E_C_A_PINCODE"]."<br>";
								  echo "Date of joining  :  ".$row["E_DOJ"]."<br>";
								  $fq1="select * from e_contact where E_ID='$var'";
								$result1=$conn->query($fq1);
									$i = 1;
						
								if ($result1->num_rows > 0) 
								{
									while($row1 = $result1->fetch_assoc())
									{
										echo "Contact ".$i++." : ".$row1["E_CONTACT"]."<br>";
									}
								}
								  
								
								  ?></p>
                      
                    </td>
					<div class="newsletter_form">
                            <form method="POST">
                            <input type="date" class="form-control" placeholder="Date of Leaving" name="dol">
							<input type="text" class="form-control" placeholder="Employee Login ID" name="e_l_id">
                        </div>
							
							<button type="submit" class="btn_login btn-rounded btn-block btn-primary" name="delete" onclick="del_employee()">Date of Leaving</button>
							</form>
							<br>
							<br><br><br><br><br>
					
                </tr>
   
                </tbody>
            </table>
        </div>

    </div>
</section>


<?php

	function del_employee(){
		
		$dol=$_POST['dol'];
		$e_l_id=$_POST['e_l_id'];
		
		$fq3="insert into employee(E_DOL)values('$dol')";
		$result3=$conn->query($fq3);
		
		
		$fq2="select * from employee where E_L_ID='$e_l_id'";
		   $result2=$conn->query($fq2);
		   
		   $row2 = $result2->fetch_assoc();
		   $eid=$row2['E_ID'];
		$fq3="DELETE FROM e_contact WHERE E_ID='$eid'";
		$result3=$conn->query($fq3);
		
		$fq4="DELETE FROM employee WHERE E_ID='$eid'";
		$result3=$conn->query($fq4);
		
		
		
		
		
	}




?>



 
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