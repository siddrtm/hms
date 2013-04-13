<?php 
						$con=mysqli_connect("localhost","root","hms","hms");
						// Check connection
						session_start();
						if (mysqli_connect_errno())
						  {
						  echo "Failed to connect to MySQL: " . mysqli_connect_error();
						  }
						
						
								if ($_POST['shift'] != '' )
									{
										$var1 = 'shift' ;
										$var2 = "'" .  $_POST['shift']  . "'";
										$temp = "update wardboy set ". $var1 . "=" . $var2 ." where id='" . $_POST['id'] . "'";
										mysqli_query($con,$temp);
									}
								if ($_POST['salary'] != '' )
									{
										$var1 = 'salary' ;
										$var2 = "" .  $_POST['salary']  . "";
										$temp = "update wardboy set ". $var1 . "=" . $var2 ." where id='" . $_POST['id'] . "'";
										mysqli_query($con,$temp);
									}
								if ($_POST['name'] != '' )
									{
										$var1 = 'name' ;
										$var2 = "'" .  $_POST['name']  . "'";
										$temp = "update staff set ". $var1 . "=" . $var2 ." where id='" . $_POST['id'] . "'";
										mysqli_query($con,$temp);
									}
								if ($_POST['dob'] != '' )
									{
										$var1 = 'dob' ;
										$var2 =  "'" . $_POST['dob'] . "'"  ;
										$temp = "update staff set ". $var1 . "=" . $var2 ." where id='" . $_POST['id'] . "'";
										mysqli_query($con,$temp);
									}
								if ($_POST['sex'] != '' )
									{
										$var1 = 'sex' ;
										$var2 = "'" .  $_POST['sex']  . "'";
										$temp = "update staff set ". $var1 . "=" . $var2 ." where id='" . $_POST['id'] . "'";
										mysqli_query($con,$temp);
									}
								if ($_POST['address'] != '' )
									{
										$var1 = 'address' ;
										$var2 = "'" .  $_POST['address']  . "'";
										$temp = "update staff set ". $var1 . "=" . $var2 ." where id='" . $_POST['id'] . "'";
										mysqli_query($con,$temp);
									}
							
								
							
						
						
						
						mysqli_close($con);
						header ("Location:adminwardboy.html");
							
						
						
						
?>