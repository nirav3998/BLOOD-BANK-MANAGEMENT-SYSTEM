<?php
session_start();

if (isset($_SESSION["Manager"])){

$conn=new mysqli("localhost","jay_golakiya","","project_dbms");

if(isset($_POST["submit"]))
{
$name=$_POST['name'];
$mail=$_POST['mail'];
$epost=$_POST['epost'];
$shift=$_POST['shift'];
$cpno=$_POST['cpno'];
$cstreet=$_POST['cstreet'];
$carea=$_POST['carea'];
$ccity=$_POST['ccity'];
$cpincode=$_POST['cpincode'];
$ppno=$_POST['ppno'];
$pstreet=$_POST['pstreet'];
$parea=$_POST['parea'];
$pcity=$_POST['pcity'];
$ppincode=$_POST['ppincode'];
$salary=$_POST['salary'];
$gender=$_POST['gender'];
$edoj=$_POST['edoj'];
$contactno1=$_POST['contactno1'];
$contactno2=$_POST['contactno2'];
$pass1=$_POST['pass1'];
$pass2=$_POST['pass2'];

$lid=$_SESSION["Manager"]; 

$fq5="select * from employee where E_L_ID = '$lid'";
$result5=$conn->query($fq5);
$row = $result5->fetch_assoc();

$bkid=$row['BK_ID'];





if($pass1 == $pass2)
{
 $fq="select * from employee";
 $result=$conn->query($fq);
 $rowcount=mysqli_num_rows($result);
 $rowcount=$rowcount+1;
 $E_ID = "E".$rowcount;
 $l = $rowcount + 10000;
 $d = substr($bkid, 1, 5);
 $b = $d + 100;
 
 if(isset($epost) == "Doctor")
 {
	$EL_ID = "E".$l."D".$b;
 }
 else if(isset($epost) == "Receptionist")
 {
	 $EL_ID = "E".$l."R".$b;
 }
 else if(isset($epost) == "Peon")
 {
	 $EL_ID = "E".$l."P".$b;
 }
 else if(isset($epost) == "Cashier")
 {
	$EL_ID = "E".$l."C".$b;
 }
 
 
 
 $E_L_ID = $EL_ID;

 
 
 $fq1="insert into employee (E_ID,E_L_ID,BK_ID,E_NAME,E_EMAIL,E_POST,E_SHIFT,E_SALARY,E_P_A_PLOTNO,E_P_A_STREET,E_P_A_AREA,E_P_A_CITY,E_P_A_PINCODE,E_C_A_PLOTNO,E_C_A_STREET,E_C_A_AREA,E_C_A_CITY,E_C_A_PINCODE,E_DOJ) 
						values ('$E_ID','$E_L_ID','$bkid','$name','$mail','$epost','$shift','$salary','$cpno','$cstreet','$carea','$ccity','$cpincode','$ppno','$pstreet','$parea','$pcity','$ppincode','$edoj')";
 $fq2="insert into login_table(USERID,PASSWORD)values('$E_L_ID','$pass1')";
 
 $result1=$conn->query($fq1);
 $result2=$conn->query($fq2);	

 $fq3="insert into e_contact(E_ID,E_CONTACT)values('$E_ID','$contactno1')";
 $result3=$conn->query($fq3);
 
  $fq4="insert into e_contact(E_ID,P_CONTACT)values('$E_ID','$contactno2')";
 $result4=$conn->query($fq4);
	
		
 
	 if (isset($result1) && isset($result2) && ( isset($result3) || isset($result4 )) )
	 {
		echo ' 
		<script>
			alert("Employee added Sucessfully... ");
		</script>';
		
		header('location:./addemployee.php');
		
	 } else {
		 echo '
		<script type="text/javascript">
			alert("Retry!!!");
		</script>';
		
		header('location:./addemployee.php');
	 }
 
}
	else
	{?>
		<script type="text/javascript">
			alert("Check Passwords...");
			header('location:./addemployee.php');
		</script>
	<?php	
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
    <title> BBM - ADD EMPLOYEE </title>
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
                        ADD EMPLOYEE
						</h3>
                </div>
            </div>
        </div>

        <div class="breadcrumbs">
            <ul>
                <li><a href="home.php">Home</a>  |  </li>
                <li><span>Add Employee</span></li>
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
                            ADD Employee
                        </h4>
                    </div>
                    <div class="footer_box_body">
                        <div class="newsletter_form">
                            <form method="POST">
							<h6>Name:</h6>
                            <input type="text" class="form-control" placeholder="Enter Name" name="name" required>
							<h6>Email:</h6>
							<input type="email" class="form-control" placeholder="Enter email address" name="mail" required>						
							
							<select name="epost" class="form-control" required>
							<option value="Doctor" >Doctor</option>
							<option value="Peon">Peon</option>
							<option value="Receptionist">Receptionist</option>
							<option value="Cashier">Cashier</option>
							</select>
							
							
							<select name="shift" class="form-control" required>
							<option value="Day" >Day</option>
							<option value="Night">Night</option>
							</select>
							
							<h6>Date of Joining</h6>
							<input type="date" class="form-control" placeholder="Date of joining" name="edoj" required>
							
							<h6>Salary</h6>
							<input type="number" class="form-control" placeholder="Enter Salary" name="salary" required>
							
							<h6>Current Address:</h6>
							<input type="number" class="form-control" placeholder="ADDRESS : Plot no" name="cpno" required>
							<input type="text" class="form-control" placeholder="ADDRESS : Street " name="cstreet">
							<input type="text" class="form-control" placeholder="ADDRESS : Area" name="carea">
							<input type="text" class="form-control" placeholder="ADDRESS : City" name="ccity"  required>
							<input type="number" class="form-control" placeholder="ADDRESS : Pincode" name="cpincode" maxlength="6" size="6" required>
							<h6>Permenent Address:</h6>
							<input type="number" class="form-control" placeholder="ADDRESS : Plot no" name="ppno" required>
							<input type="text" class="form-control" placeholder="ADDRESS : Street " name="pstreet">
							<input type="text" class="form-control" placeholder="ADDRESS : Area" name="parea">
							<input type="text" class="form-control" placeholder="ADDRESS : City" name="pcity"  required>
							<input type="number" class="form-control" placeholder="ADDRESS : Pincode" name="ppincode" maxlength="6" size="6" required>
							<h6>Contact no.:</h6>
							<input type="number" class="form-control" placeholder="Contact 1" name="contactno1" pattern=".{10,13}" required>
							<input type="number" class="form-control" placeholder="Contact 2" name="contactno2" pattern=".{10,13}">
							<h6>Set Password</h6>
							<input type="password" class="form-control" placeholder="Set Password" name="pass1" pattern=".{8,16}" required>
							<h6>Re-enter Password:</h6>
							<input type="password" class="form-control" placeholder="Re Enter Password" name="pass2"  pattern=".{8,16}" required>
							<h6>Gender:</h6>
							<input type="radio"   name="gender" value="male" checked> Male
							  <input type="radio"  name="gender" value="female"> Female
							  <input type="radio"  name="gender" value="other"> Other
							  <p><br></p>
							
							
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
