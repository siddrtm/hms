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
					
					
					<a href="receptionistinfo.php">info</a><br />
					<a href="receptionistadmitpatient.php">add patients</a><br />
					<a href="receptionistshowpatient.php">show patients</a><br />
					<a href="receptionisteditpatient.php">edit patients</a><br />
					<a href="receptionistdischargepatient.php">discharge patients</a><br />
					<a href="receptionistappointtodoctor.php">appoint to doctor</a><br />
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