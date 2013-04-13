<!DOCTYPE HTML>
<?php
session_start();
if(!isset( $_SESSION['id'])){
	//header ("Location:home.html");
	echo $_SESSION['id'];
}
?>
<html >
<head>

<title> RECEPTIONIST </title>

<link href="f_style.css" rel="stylesheet" type="text/css" />

</head>
<body>
<div id="f_container_wrapper">
<div id="f_container">
	<div id="f_banner">
  <div id="site_title">
            <h1><a>RECEPTIONIST</a></h1>
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
					<form action="receptionistappointpatient.php" method="POST">
						<p>doctor id<br/><input type="text" name="docid" required/></p>
						<p>time<br/><input type="time" name="time" required/></p>
						<p>date (yyyy-mm-dd)<br/><input type="date" name="date" required/></p>
						<p>fee<br/><input type="number" name="fee" required/></p>
						<p>patientid<br/><input type="number" name="patientid" required/></p>
						<p><input type="submit" /></p>
					</form>
					<a href="receptionist.php">back</a><br />
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