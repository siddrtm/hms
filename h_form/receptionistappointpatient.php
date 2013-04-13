<?php 
						session_start();
						$con=mysqli_connect("localhost","root","hms","hms");
						// Check connection
						if (mysqli_connect_errno())
						  {
						  echo "Failed to connect to MySQL: " . mysqli_connect_error();
						  }
						
						$temp = "select * from appointpatient where appointpatient.receptionistid='". $_SESSION['id'] ."' and appointpatient.docid='" .  $_POST['docid'] . "' and appointpatient.patientid=".$_POST['patientid'];
						
						while($row = mysqli_fetch_array($temp))
							{
								if((strtotime(date('y-m-d')) - strtotime($row['date'])) > 0)
								{
								$var = $row['no'] +1;
								$temp1 = "update appointpatient set time='".$_POST['time']."' , date='" . $_POST['date']. "' , no=" .$var . "where appointpatient.receptionistid='". $_SESSION['id'] ."' and appointpatient.docid='" .  $_POST['docid'] . "' and appointpatient.patientid=".$_POST['patientid'];
								
								echo $temp1;
								mysqli_query($con,$temp1);
								}
								mysqli_close($con);
								header ("Location:receptionist.php");
								
							 }
						
						
						
						
						
						
						
						
						
						$temp = "INSERT INTO appointpatient (receptionistid,docid,time,date,fee,patientid) VALUES ('" . $_SESSION['id'] . "','" . $_POST['docid'] . "','" . $_POST['time'] . "','" . $_POST['date'] . "'," . $_POST['fee'] . "," . $_POST['patientid']  .")" ;
						
						echo $temp;
						mysqli_query($con,$temp);
						mysqli_close($con);
						header ("Location:receptionist.php");
						
												
						
?>