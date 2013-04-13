
					<?php 
					
						$con=mysqli_connect("localhost","root","hms","hms");
						// Check connection
						
						if (mysqli_connect_errno())
						  {
						  echo "Failed to connect to MySQL: " . mysqli_connect_error();
						  }
						$loop = mysqli_query($con,"SELECT * FROM patient");
						
						while($loopvar = mysqli_fetch_array($loop))
							{
						
						
						
								
								$result = mysqli_query($con,"SELECT * FROM patient where patient.id=" . "" . $loopvar['id'] . "");
								$patient = mysqli_fetch_array($result);
								$tests = mysqli_query($con,"SELECT * FROM testsuggestion where testsuggestion.patientid=" . "'" . $loopvar['id'] . "'");
								$bill = 0;
								while($row = mysqli_fetch_array($tests))
									{
										$testcost = mysqli_query($con,"SELECT * FROM test where test.name=" . "'" . $row['testname'] . "'");
										$row1 = mysqli_fetch_array($testcost);
										
											$bill += $row1['cost'];
										
									
									}
								$medicine = mysqli_query($con,"SELECT * FROM medicineprescription where medicineprescription.patientid=" . "" . $loopvar['id'] . "");
								//echo "test bill" . $bill ."<br/>";
								while($row = mysqli_fetch_array($medicine))
									{
										$testcost = mysqli_query($con,"SELECT * FROM medicine where medicine.name=" . "'" . $row['medicinename'] . "'");
										$row1 = mysqli_fetch_array($testcost);
										  // echo "cost" . $row1['price'] ."<br/>";
										   //echo "dose" . $row['dose'] ."<br/>";
										   //echo "duration" . $row['duration'] ."<br/>";
											$bill += $row1['price'] * $row['dose'] * $row['duration'];
										
									
									}
								//echo $bill;
								if ($patient['roomno'] != '') {
									$roomno = mysqli_query($con,"SELECT * FROM room where room.no=" . "" . $patient['roomno'] . "");
									$room = mysqli_fetch_array($roomno);
									if ($patient['datedischarged'] == '') 
										{
											$bill += $room['cost'] * (((strtotime(date('y-m-d')) - strtotime(substr($patient['dateadmitted'],0,9))) / (24*60*60))+1) ;
										}
									else
										{
											$bill += $room['cost'] * ((((strtotime(substr($patient['datedischarged'],0,9))) - strtotime(substr($patient['dateadmitted'],0,9))) / (24*60*60)) + 1) ;
										}
									
								}
								$appointbill  = "select * from appointpatient where appointpatient.patientid=".$loopvar['id'];
								$appointbill1 = mysqli_query($con,$appointbill);
								while($row4 = mysqli_fetch_array($appointbill1))
									{
										
										
										  // echo "cost" . $row1['price'] ."<br/>";
										   //echo "dose" . $row['dose'] ."<br/>";
										   //echo "duration" . $row['duration'] ."<br/>";
											$bill += $row4['fee'] * $row4['no'] ;
										
									
									}
								
								
								//echo "update patient set patient.totalbill=". $bill." where patient.id=" . "" . $loopvar['id'] . "";
								mysqli_query($con,"update patient set patient.totalbill=". $bill." where patient.id=" . "" . $loopvar['id'] . "");
								
						
						
						
						
						
						

							}
							
							
						mysqli_close($con);
						
						
						
					?>
