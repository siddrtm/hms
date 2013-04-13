<!DOCTYPE HTML>
<?php
session_start();
if(!isset( $_SESSION['id'])){
	header ("Location:home.html");
	echo $_SESSION['id'];
}
?>
<html >
<head>

<title> PATIENT </title>

<link href="f_style.css" rel="stylesheet" type="text/css" />

</head>
<body>
<div id="f_container_wrapper">
<div id="f_container">
	<div id="f_banner">
  <div id="site_title">
            <h1><a>PATIENT</a></h1>
      </div>
        
        <div id="f_menu">
            <ul>
                <li><a href="home.html">HOSPITAL MANAGMENT SYSTEM</a></li>
                
            </ul>
		</div> <!-- end of menu -->
    
    </div>
    
    <div id="f_content">
    	
        

			<div id="side_column"> 

					   <div>
							<?php echo 'logged in as ' . $_SESSION['id']  ;?>
					   
					   </div>
			 
			
			</div>
    

           <div id="main_column">

				<div>
					
					<?php 
					
						$con=mysqli_connect("localhost","root","hms","hms");
						// Check connection
						if (mysqli_connect_errno())
						  {
						  echo "Failed to connect to MySQL: " . mysqli_connect_error();
						  }

						$result = mysqli_query($con,"SELECT * FROM patient where patient.id=" . "'" . $_SESSION['id'] . "'");

							
						mysqli_close($con);
						//echo 'id' . "  " . 'name' . "  " . 'dob'. "  " . 'sex'. "  " . 'address'. "  " . 'type'. "  " . 'department' ."  " . 'salary';
						//echo "<br/>";
						while($row = mysqli_fetch_array($result))
							{
								if ($row['nurseid'] != '')
									{
									echo "nurse id  ==> ".$row['nurseid']. " <br/>";
									}
								else
									{
									echo 'no nurse assigned<br/>';
									}
							 }
							echo "------------------------------------------------------<br/>";
						
					?>
					
					<a href="patient.php">back</a><br />
					<a href="logout.php">Logout</a>
					
				</div>
				
				
				
        
  
			</div>
		
    </div>
    
    <div id="f_footer">
    
		<div id="f_footer_bar">
		
			

			
		</div>
    
    </div>

</div> <!-- end of container -->
</div> <!-- end of container wrapper -->
</body>
</html>