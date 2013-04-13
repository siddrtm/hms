<?php 
						$con=mysqli_connect("localhost","root","hms","hms");
						// Check connection
						session_start();
						if (mysqli_connect_errno())
						  {
						  echo "Failed to connect to MySQL: " . mysqli_connect_error();
						  }
						
						$temp = "insert into medicineprescription (docid,patientid,duration,dose,medicinename) values ('" . $_SESSION['id'] . "'," . $_POST['id'] . "," . $_POST['duration'] . ",". $_POST['dose'] . ",'" .$_POST['medicinename']  . "')" ;
						
						
						echo $temp;
						mysqli_query($con,$temp);
						mysqli_close($con);
						header ("Location:doctor.php");
						
						
						
?>