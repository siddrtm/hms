<?php 
						$con=mysqli_connect("localhost","root","hms","hms");
						// Check connection
						if (mysqli_connect_errno())
						  {
						  echo "Failed to connect to MySQL: " . mysqli_connect_error();
						  }
						$temp = "update staff set available=0 where staff.id='" . $_POST['id']. "'";
						echo $temp;
						mysqli_query($con,$temp);
						
						$temp = "select * from doctor where doctor.id='" . $_POST['id']. "'";
						echo $temp;
						$row = mysqli_query($con,$temp);
						
						while($row1 = mysqli_fetch_array($row))
							{
							$temp1 = "delete  from appointpatient where appointpatient.docid='" . $_POST['id']. "'";
							 mysqli_query($con,$temp1);
							
							 }
						
						
						$temp = "select * from nurse where nurse.id='" . $_POST['id']. "'";
						echo $temp;
						$row = mysqli_query($con,$temp);
						
						while($row1 = mysqli_fetch_array($row))
							{
							$temp2 = "update patient set nurseid=NULL where nurseid='" . $_POST['id']. "'";
							 echo $temp1 .$_POST['id'] ;
							echo mysqli_query($con,$temp2);
							
							 }
						$temp = "select * from wardboy where wardboy.id='" . $_POST['id']. "'";
						echo $temp;
						$row = mysqli_query($con,$temp);
						
						while($row1 = mysqli_fetch_array($row))
							{
							$temp1 = "delete from cleaningservice where cleaningservice.wardboyid='" . $_POST['id']. "'";
							 mysqli_query($con,$temp1);
							
							 }
						
						
						
						
						
						
						
						
						
						
						
						
						
						mysqli_close($con);
						header ("Location:admin.php");
							
						
						
						
?>