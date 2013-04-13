<!DOCTYPE HTML>
<?php 
include('totalbill.php');
if (!isset($_POST['docid'])) {
	header ("Location:doctorlogin.html");
	}
else if(!isset($_POST['docid'])){
	header ("Location:doctorlogin.html");
	}
else {
		$con=mysqli_connect("localhost","root","hms","hms");
		// Check connection
		if (mysqli_connect_errno())
		  {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		  }

		$result = mysqli_query($con,"SELECT * FROM doctor");

			
		mysqli_close($con);
		
		while($row = mysqli_fetch_array($result) )
		  {
			if ( $row['id'] == $_POST['docid'] and $row['pass'] == $_POST['pass']) {
				break;
				}
		  }
		  
		 
		 
		 if ($row['id'] == $_POST['docid'] and $row['pass'] == $_POST['pass']) {
			session_start();
			if(isset($_SESSION['id'])){
				echo "you were logged in as ".$_SESSION['id']."but now you are logged in as ".$_POST['docid'] . "\n";
				$_SESSION['id'] = $_POST['docid'];
				}
			else {
				$_SESSION['id'] = $_POST['docid'];
				
				}
			echo $_SESSION['id'];
			header ("Location:doctor.php");
		
			} 
			else
			{
				header ("Location:doctorlogin.html");
			}
		
	}
?>