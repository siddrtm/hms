<!DOCTYPE HTML>
<?php 
						$con=mysqli_connect("localhost","root","hms","hms");
						// Check connection
						if (mysqli_connect_errno())
						  {
						  echo "Failed to connect to MySQL: " . mysqli_connect_error();
						  }
						$temp = "update testsuggestion set result='" . $_POST['result'] . "' where docid='" . $_POST['docid'] . "' and patientid='" . $_POST['patientid'] . "' and testname='" . $_POST['testname'] . "'";
						
						echo $temp;
						mysqli_query($con,$temp);
						mysqli_close($con);
						header ("Location:nursetestresults.php");
						
												
						
?>