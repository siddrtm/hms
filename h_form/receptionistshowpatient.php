<!DOCTYPE HTML>
<?php
session_start();
if(!isset( $_SESSION['id'])){
	header ("Location:home.html");
	echo $_SESSION['id'];
}
include('totalbill.php');
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
					
					<?php 
					
						$con=mysqli_connect("localhost","root","hms","hms");
						// Check connection
						if (mysqli_connect_errno())
						  {
						  echo "Failed to connect to MySQL: " . mysqli_connect_error();
						  }

						$result = mysqli_query($con,"SELECT * FROM patient");

							
						
						//echo 'id' . "  " . 'name' . "  " . 'dob'. "  " . 'sex'. "  " . 'address'. "  " . 'type'. "  " . 'department' ."  " . 'salary';
						//echo "<br/>";
						while($row = mysqli_fetch_array($result))
							{
								//echo $row['id'] . "  " . $row['name'] . "  " . date("d/m/y", $row['dob']) . "  " . $row['sex'] . "  " . $row['address'] . "  " . $row['type'] . " " . $row['department']. " " . (string) $row['salary'] ;
								//foreach ($row as $k => $v) {
								//		echo "$v ";
								//	}
								//print_r($row);
								echo "<br />";
								foreach ($row as $k => $v) {
										if (! is_int($k))
											{
											echo "$k  =>  $v <br/>";
											}
									}
									$result1 = mysqli_query($con,"SELECT * FROM staffage where staffage.dob=" . "'" . $row['dob'] . "'");
						while($row1 = mysqli_fetch_array($result1))
							{
							
							foreach ($row1 as $k => $v) {
									if (! is_int($k) )
										{
										echo "$k  =>  $v <br/>";
										}
								}
							 }
									echo "------------------------------------------------------<br/>";
							}
							mysqli_close($con);
						
					?>
					
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