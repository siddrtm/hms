3<?php 
						$con=mysqli_connect("localhost","root","hms","hms");
						// Check connection
						if (mysqli_connect_errno())
						  {
						  echo "Failed to connect to MySQL: " . mysqli_connect_error();
						  }
						$temp = "insert into staff(id,name,dob,sex,address) values (" . "'" .$_POST['id'] . "','" . $_POST['name']. "','" . $_POST['dob'] . "','" . $_POST['sex']. "','" . $_POST['address'] . "')";
						$temp1 =  "insert into receptionist values (" . "'" .$_POST['id'] . "'," . $_POST['salary'] . ",'" . $_POST['shift']. "','". $_POST['pass']."')";
						
						echo $temp;
						echo $temp1;
						mysqli_query($con,$temp);
						mysqli_query($con,$temp1);
						mysqli_close($con);
						header ("Location:adminreceptionist.html");
							
						
						
						
?>