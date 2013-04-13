<?php 
						$con=mysqli_connect("localhost","root","hms","hms");
						// Check connection
						if (mysqli_connect_errno())
						  {
						  echo "Failed to connect to MySQL: " . mysqli_connect_error();
						  }
						$temp = "insert into medicine values (" . "'" .$_POST['name'] . "'," . $_POST['price'] . ")";
												
						echo $temp;
						echo $temp1;
						mysqli_query($con,$temp);
						mysqli_query($con,$temp1);
						mysqli_close($con);
						header ("Location:adminmedicine.html");
							
						
						
						
?>