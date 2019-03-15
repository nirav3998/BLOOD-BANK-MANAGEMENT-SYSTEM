<?php
	$conn=new mysqli("localhost","jay_golakiya","","project_dbms");
	
	if(isset($_POST['login']))
    {
    	$lid=$_POST['lid'];
    	$password=$_POST['password'];
		session_start();
    	
    	$fq="select USERID from login_table where USERID='$lid' and PASSWORD='$password'";
		$result=$conn->query($fq);
		
		if ($result->num_rows > 0) {
    // output data of each row
	
    while($row = $result->fetch_assoc()) {
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
		else if($temp=='M')
		{
			$_SESSION["DBA"] =$lid;
			
			header('location:./dba.php');
		}
		else if($temp=='R')
		{
			$_SESSION["Recepatanist"] =$lid;
			
			header('location:./Recepatanist.php');
		}
		
		
		
    }
} else {
    ?>
		<script type="text/javascript">
			alert("Something went Wrong.! please Try again..!");
		</script>
		<?php
		//???????????header('location:./Recepatanist.php');
}
	}	
		$conn->close();

?>