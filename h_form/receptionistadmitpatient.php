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
					
					<form action="receptionistadmitpatient1.php" method="POST">
						 
						 <p>name<br/><input type="text" name="name" required/></p>
						 <p>blood group<br/><input type="text" name="bloodgroup" required/></p>
						 <p>date of birth (yyyy-mm-dd)<br/><input type="date" name="dob" required/></p>
						 <p>sex<br/><input type="text" name="sex" required/></p>
						 <p>address<br/><input type="text" name="address" required/></p>
						 <p>nurse id<br/><input type="text" name="nurseid" /></p>
						 <p>room no<br/><input type="number" name="roomno" /></p>
						 <p>description<br/><input type="text" name="description" required/></p>
						 <p>password<br/><input type="password" name="pass" required/></p>
						 <p><input type="submit" /></p>
					</form>
					
					<a href="receptionist.php">back</a><br/>
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