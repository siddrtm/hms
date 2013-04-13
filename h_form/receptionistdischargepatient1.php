<?php 
						$con=mysqli_connect("localhost","root","hms","hms");
						// Check connection
						if (mysqli_connect_errno())
						  {
						  echo "Failed to connect to MySQL: " . mysqli_connect_error();
						  }
						
						$temp = "INSERT INTO patient( datedischarged) VALUES (NOW()) where patient.id='" .  $_POST['id']   . "'" ;
							
						echo $temp;
						mysqli_query($con,$temp);
						mysqli_close($con);
						header ("Location:receptionist.php");
						
												
						
?>