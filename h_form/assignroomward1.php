<?php 
						$con=mysqli_connect("localhost","root","hms","hms");
						// Check connection
						session_start();
						if (mysqli_connect_errno())
						  {
						  echo "Failed to connect to MySQL: " . mysqli_connect_error();
						  }
						
						
								$temp2 =  "insert into cleaningservice values (" . "'" .$_POST['id'] . "'," . $_POST['roomno']. ")";
								mysqli_query($con,$temp2);
							
								
							
						
						
						
						mysqli_close($con);
						header ("Location:adminroom.html");
							
						
						
						
?>