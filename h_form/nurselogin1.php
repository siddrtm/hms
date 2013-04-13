<!DOCTYPE HTML>
<?php 
include('totalbill.php');
if (!isset($_POST['nurseid'])) {
	header ("Location:nurselogin.html");
	}
else if(!isset($_POST['nurseid'])){
	header ("Location:nurselogin.html");
	}
else {
		$con=mysqli_connect("localhost","root","hms","hms");
		// Check connection
		if (mysqli_connect_errno())
		  {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		  }

		$result = mysqli_query($con,"SELECT * FROM nurse");

			
		mysqli_close($con);
		
		while($row = mysqli_fetch_array($result) )
		  {
			if ( $row['id'] == $_POST['nurseid'] and $row['pass'] == $_POST['pass']) {
				break;
				}
		  }
		  
		 
		 
		 if ($row['id'] == $_POST['nurseid'] and $row['pass'] == $_POST['pass']) {
			session_start();
			if(isset($_SESSION['id'])){
				echo "you were logged in as ".$_SESSION['id']."but now you are logged in as ".$_POST['nurseid'] . "\n";
				$_SESSION['id'] = $_POST['nurseid'];
				}
			else {
				$_SESSION['id'] = $_POST['nurseid'];
				
				}
			echo $_SESSION['id'];
			header ("Location:nurse.php");
		
			} 
			else
			{
				header ("Location:nurselogin.html");
			}
		
	}
?>