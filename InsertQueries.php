
<?php
$conn=new mysqli("localhost","jay_golakiya","","project_dbms");

$date = date("Y-d-m");
$fq="select * from blood_donationcamp where C_DATE >= '$date' ";
$result=$conn->query($fq);
if ($result->num_rows > 0) 
								{
									while($row = $result->fetch_assoc())
									{
										echo $row["C_DATE"]."  ".$row["C_TIME"]."  ".$row["C_ADD"]."<br>";
									}
								}
								
?>