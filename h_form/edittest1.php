<?php 
						$con=mysqli_connect("localhost","root","hms","hms");
						// Check connection
						session_start();
						if (mysqli_connect_errno())
						  {
						  echo "Failed to connect to MySQL: " . mysqli_connect_error();
						  }
						
						
								
								if ($_POST['cost'] != '' )
									{
										$var1 = 'cost' ;
										$var2 = "" .  $_POST['cost']  . "";
										$temp = "update test set ". $var1 . "=" . $var2 ." where name='" . $_POST['name'] . "'";
										mysqli_query($con,$temp);
									}
								
							
								
							
						
						
						
						mysqli_close($con);
						header ("Location:admintest.html");
							
						
						
						
?>