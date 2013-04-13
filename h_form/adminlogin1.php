<!DOCTYPE HTML>
<?php 
include('totalbill.php');
if (!isset($_POST['adminid'])) {
	header ("Location:adminlogin.html");
	}
else if(!isset($_POST['adminid'])){
	header ("Location:adminlogin.html");
	}
else {
		$con=mysqli_connect("localhost","root","hms","hms");
		// Check connection
		if (mysqli_connect_errno())
		  {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		  }

		$result = mysqli_query($con,"SELECT * FROM admin");

			echo '1';
		mysqli_close($con);
		
		while($row = mysqli_fetch_array($result) )
		  {
			if ( $row['id'] == $_POST['adminid'] and $row['pass'] == $_POST['pass']) {
				break;
				}
		  }
		  
		 echo $row['pass']. '  ' . $_POST['pass'];
		 
		 if ($row['id'] == $_POST['adminid'] and $row['pass'] == $_POST['pass']) {
			session_start();
			if(isset($_SESSION['id'])){
				echo "you were logged in as ".$_SESSION['id']."but now you are logged in as ".$_POST['adminid'] . "\n";
				$_SESSION['id'] = $_POST['adminid'];
				}
			else {
				$_SESSION['id'] = $_POST['adminid'];
				
				}
			echo $_SESSION['id'];
			header ("Location:admin.php");
		
			} 
			else
			{
				header ("Location:adminlogin.html");
			}
		
	}
?>