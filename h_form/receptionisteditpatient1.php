<?php 
						$con=mysqli_connect("localhost","root","hms","hms");
						// Check connection
						session_start();
						if (mysqli_connect_errno())
						  {
						  echo "Failed to connect to MySQL: " . mysqli_connect_error();
						  }
						
						
								if ($_POST['name'] != '' )
									{
										$var1 = 'name' ;
										$var2 = "'" .  $_POST['name']  . "'";
										$temp = "update patient set ". $var1 . "=" . $var2 ." where id=" . $_POST['id'] . "";
										mysqli_query($con,$temp);
									}
								if ($_POST['bloodgroup'] != '' )
									{
										$var1 = 'bloodgroup' ;
										$var2 = "'" .  $_POST['bloodgroup']  . "'";
										$temp = "update patient set ". $var1 . "=" . $var2 ." where id=" . $_POST['id'] . "";
										mysqli_query($con,$temp);
									}
								if ($_POST['dob'] != '' )
									{
										$var1 = 'dob' ;
										$var2 = "" .  $_POST['dob']  . "";
										$temp = "update patient set ". $var1 . "=" . $var2 ." where id=" . $_POST['id'] . "";
										mysqli_query($con,$temp);
									}
								if ($_POST['sex'] != '' )
									{
										$var1 = 'sex' ;
										$var2 = "'" .  $_POST['sex']  . "'";
										$temp = "update patient set ". $var1 . "=" . $var2 ." where id=" . $_POST['id'] . "";
										mysqli_query($con,$temp);
									}
								if ($_POST['address'] != '' )
									{
										$var1 = 'address' ;
										$var2 =  "'" . $_POST['address'] . "'"  ;
										$temp = "update patient set ". $var1 . "=" . $var2 ." where id=" . $_POST['id'] . "";
										mysqli_query($con,$temp);
									}
								if ($_POST['nurseid'] != '' )
									{
										$var1 = 'nurseid' ;
										$var2 = "'" .  $_POST['nurseid']  . "'";
										$temp = "update patient set ". $var1 . "=" . $var2 ." where id=" . $_POST['id'] . "";
										mysqli_query($con,$temp);
									}
								if ($_POST['roomno'] != '' )
									{
										$var1 = 'roomno' ;
										$var2 = "" .  $_POST['roomno']  . "";
										$temp = "update patient set ". $var1 . "=" . $var2 ." where id=" . $_POST['id'] . "";
										mysqli_query($con,$temp);
									}
								
								if ($_POST['description'] != '' )
									{
										$var1 = 'description' ;
										$var2 = "'" .  $_POST['description']  . "'";
										$temp = "update patient set ". $var1 . "=" . $var2 ." where id=" . $_POST['id'] . "";
										mysqli_query($con,$temp);
									}
								if ($_POST['pass'] != '' )
									{
										$var1 = 'pass' ;
										$var2 = "'" .  $_POST['pass']  . "'";
										$temp = "update patient set ". $var1 . "=" . $var2 ." where id=" . $_POST['id'] . "";
										mysqli_query($con,$temp);
									}
							
						
						
						
						mysqli_close($con);
						header ("Location:receptionist.php");
							
						
						
						
?>