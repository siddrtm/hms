<?php 
						$con=mysqli_connect("localhost","root","hms","hms");
						// Check connection
						if (mysqli_connect_errno())
						  {
						  echo "Failed to connect to MySQL: " . mysqli_connect_error();
						  }
						$temp = "delete  FROM staff where id=" ;
						$temp1 =  $_POST['docid'];
						$temp = $temp . "'". "$temp1" . "'";
						echo $temp;
						mysqli_query($con,$temp);
						mysqli_close($con);
						header ("Location:admindoctor.html");
							
						
						
						
?>