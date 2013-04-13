<?php 
						$con=mysqli_connect("localhost","root","hms","hms");
						// Check connection
						session_start();
						if (mysqli_connect_errno())
						  {
						  echo "Failed to connect to MySQL: " . mysqli_connect_error();
						  }
						
						$temp = "insert into testsuggestion (docid,patientid,testname) values ('" . $_SESSION['id'] . "'," . $_POST['id'] . ",'" . $_POST['testname'] . "')" ;
						
						
						echo $temp;
						mysqli_query($con,$temp);
						mysqli_close($con);
						header ("Location:doctor.php");
						
						
						
?>