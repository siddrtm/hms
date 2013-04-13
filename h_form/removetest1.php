<?php 
						$con=mysqli_connect("localhost","root","hms","hms");
						// Check connection
						if (mysqli_connect_errno())
						  {
						  echo "Failed to connect to MySQL: " . mysqli_connect_error();
						  }
						$temp = "delete  FROM test where name=" ;
						$temp1 =  $_POST['name'];
						$temp = $temp . "'". "$temp1" . "'";
						echo $temp;
						mysqli_query($con,$temp);
						mysqli_close($con);
						header ("Location:admintest.html");
							
						
						
						
?>