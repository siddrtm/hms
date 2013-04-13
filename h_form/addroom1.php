<?php 
						$con=mysqli_connect("localhost","root","hms","hms");
						// Check connection
						if (mysqli_connect_errno())
						  {
						  echo "Failed to connect to MySQL: " . mysqli_connect_error();
						  }
						$temp = "insert into room values (" . "" .$_POST['no'] . ",'" . $_POST['type']. "'," . $_POST['cost'] . ")";
												
						echo $temp;
						echo $temp1;
						mysqli_query($con,$temp);
						mysqli_query($con,$temp1);
						mysqli_close($con);
						header ("Location:adminroom.html");
							
						
						
						
?>