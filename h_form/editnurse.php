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

<title> ADMIN </title>

<link href="f_style.css" rel="stylesheet" type="text/css" />

</head>
<body>
<div id="f_container_wrapper">
<div id="f_container">
	<div id="f_banner">
  <div id="site_title">
            <h1><a>Nurses list</a></h1>
      </div>
        
        <div id="f_menu">
            <ul>
                <li><a href="#">HOSPITAL MANAGMENT SYSTEM</a></li>
                
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
					<form action="editnurse1.php" method="POST">
						 <p>nurse id<br/><input type="text" name="id" required/></p>
						 <br/>
						 <p>shift<br/><input type="text" name="shift" /></p>
						 <br/>
						 <p>salary<br/><input type="number" name="salary" /></p>
						 <br/>
						 <p>name<br/><input type="text" name="name" /></p>
						 <br/>
						 <p>date of birth (yyyy-mm-dd)<br/><input type="date" name="dob" /></p>
						 <br/>
						 <p>sex<br/><input type="text" name="sex" /></p>
						 <br/>
						 <p>address<br/><input type="text" name="address" /></p>
						 <br/>
						 <p><input type="submit" /></p>
					</form>
					
					<a href="adminnurse.html">back</a>
					<br/>
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