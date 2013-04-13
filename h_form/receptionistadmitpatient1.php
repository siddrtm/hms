<?php 
						$con=mysqli_connect("localhost","root","hms","hms");
						// Check connection
						if (mysqli_connect_errno())
						  {
						  echo "Failed to connect to MySQL: " . mysqli_connect_error();
						  }
						
						if ($_POST['nurseid'] != '' and $_POST['roomno'] != '')
							{
							$temp = "INSERT INTO patient( name, bloodgroup, dob, sex, address, nurseid, roomno, description,pass) VALUES ('" . $_POST['name'] . "','" . $_POST['bloodgroup'] . "','" . $_POST['dob'] . "','" . $_POST['sex'] . "','" . $_POST['address'] . "','" . $_POST['nurseid'] . "'," . $_POST['roomno'] . ",'" . $_POST['description'] . "','" .$_POST['pass']."')" ;
							}
						else if ($_POST['nurseid'] != '' and $_POST['roomno'] == '')
							{
							$temp = "INSERT INTO patient( name, bloodgroup, dob, sex, address, nurseid, description,pass) VALUES ('" . $_POST['name'] . "','" . $_POST['bloodgroup'] . "','" . $_POST['dob'] . "','" . $_POST['sex'] . "','" . $_POST['address'] . "','" . $_POST['nurseid'] . "','" . $_POST['description'] . "','" .$_POST['pass']. "')" ;
							}
						else if ($_POST['nurseid'] == '' and $_POST['roomno'] != '')
							{
							$temp = "INSERT INTO patient( name, bloodgroup, dob, sex, address, roomno, description,pass) VALUES ('" . $_POST['name'] . "','" . $_POST['bloodgroup'] . "','" . $_POST['dob'] . "','" . $_POST['sex'] . "','" . $_POST['address'] . "'," . $_POST['roomno'] . ",'" . $_POST['description'] . "','" .$_POST['pass']. "')" ;
							}
						else
							{
							$temp = "INSERT INTO patient( name, bloodgroup, dob, sex, address, description,pass) VALUES ('" . $_POST['name'] . "','" . $_POST['bloodgroup'] . "','" . $_POST['dob'] . "','" . $_POST['sex'] . "','" . $_POST['address'] . "','" . $_POST['description'] . "','" .$_POST['pass']. "')" ;
							}
						echo $temp;
						mysqli_query($con,$temp);
						mysqli_close($con);
						header ("Location:receptionist.php");
						
												
						
?>