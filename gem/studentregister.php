<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "elect_auto";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$name=array("");
$c=0;
$sql = "SELECT department_id FROM department";
$result = $conn->query($sql);
if ($result->num_rows > 0)
{
    // output data of each row
    while($row = $result->fetch_assoc()) 
    {
       $name[$c]=$row["department_id"]; 
	    
	  $c=$c+1;
    }
} 
else {
    echo "0 results";
}

$conn->close();
?>


 <!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="http://localhost/gem/global/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://localhost/gem/global/css/animate.css"> 
	<link href="overlay/css/overlay.css" type="text/css" rel="stylesheet"/>
	<script src="http://localhost/gem/global/js/j.js"></script>
	<script src="http://localhost/gem/js/mainpage.js"></script>
	
	<link href="http://localhost/gem/global/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="global/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="http://localhost/gem/css/smoothj.css" />
	<script src="http://localhost/gem/js/smoothj.js"></script>
	  <link rel="stylesheet" href="global/jquery-ui.css">
  <script src="global/jquery-1.10.2.js"></script>
  <script src="global/jquery-ui.js"></script>
    <link rel="stylesheet" href="global/jquery-ui.css">
  <script src="global/jquery-1.10.2.js"></script>
  <script src="global/jquery-ui.js"></script>
  <script src="global/jquery-1.10.2.js"></script>
  <script src="global/jquery-ui.js"></script>

	<link rel="stylesheet" href="http://localhost/gem/css/mainpage.css">
	<script src="http://localhost/gem/js/mainpage.js"></script>

	
</head>
<body >
	
	
   

		<header style="height:300px" >
			
			<div id="nav-container">
				<nav >
					<img class="scroll-top logo  animated bounceInLeft" height="70px" width="70px" src="http://localhost/gem/img/logo.png"></img>
					<ul>
						<li><a href="http://localhost/gem/index.php"><b>Home</b></a></li>
						<li><a href="http://localhost/gem/index.php#elective"><b>Electives</b></a></li>
						<li><a href="http://localhost/gem/index.php#tabs"><b>Event</b></a></li>
						<li><a href="http://localhost/gem/index.php#tabs"><b>About Us</b></a></li>
						<li><a href="http://localhost/gem/index.php#contactus"><b>Contact Us</b></a></li>
						
					</ul>
					<div>
						<img src="http://localhost/gem/img/guest.PNG" width="30px" height="30px">&nbsp; Hi, Guest</img>
						<a href="#myOverlay1" data-overlay-trigger>Login</a>
					</div>
				</nav>
			</div>	
			
		</header>
		<br><br><br>
				
				<h1 style="text-align:center">REGISTER</h1>
				<!-- ########### -->
				<div id="tabs-1">
				<form role="form"  method="post" action="studentregisterdb.php">
				<div class="row mrgn30">
				<div class="col-sm-12">
					<div class="form-group" >
						<label>Student USN</label>
					<?php	echo '<input type="text" name="student_USN"  class="form-control" >';?>
					</div>
					<div class="form-group">
						<label>First Name</label>
					<?php	echo '<input name="First_name" type="text"  class="form-control" >';?>
					</div>
					<div class="form-group">
						<label>Middle Name</label>
					<?php	echo '<input name="Middle_name" type="text" class="form-control" >';?>
			
					</div>
					<div class="form-group">
						<label>Last Name</label>
					<?php	echo '<input name="Last_name" type="text" class="form-control" >';?>
			
					</div>
					<div class="form-group">
						<label>Year</label>
					<?php	echo '<input  name="year" type="text" class="form-control" >';?>
			
					</div>
					<div class="form-group">
						<label>Semester</label>
					<?php	echo '<input  name="semester" type="text" class="form-control" >';?>
			
					</div>
					<div class="form-group">
						<label>Department</label>
					
					
						<?php

						   echo "<select class='form-control'  
									style='width: 100%;' name='department'
								>
								<option selected disabled hidden value='---'></option>";
							
							foreach ($name as $val ) 		
								echo "<option onselected='this.form.submit();' value='".$val."'>".$val."</option>";

						   echo" </select>";

						?>
					</div>
					<div class="form-group">
						<label>Mobile No</label>
					<?php	echo '<input  name="mobile_no" type="text" class="form-control" >';?>
			
					</div>
					<div class="form-group">
						<label>Email Id</label>
					<?php	echo '<input  name="email" type="email" class="form-control" >';?>
			
					</div>
					<div class="form-group">
						<label>Password</label>
					<?php	echo '<input name="password"  type="text" class="form-control" >';?>
					</div>
					<div class="form-group">
						<label>Confirm Password</label>
					<?php	echo '<input  name="c_password"  type="password" class="form-control" >';?>
			
					</div>
					<div class="form-group">
						<input type="submit" class="button-0" value="SIGN UP" >
					</div>
				</div>
				</div>
				</form>
				</div><br>
			
							
		 
		<div id="overlay" style="display:none;">
			<!-- Each overlay needs an id. The aria-labelledby is not required but is best practice -->
			<div style="" id="myOverlay1" aria-labelledby="myOverlay1Heading" data-overlay-container-class="slide-up" role="region">
				<h2 id="myOverlay1Heading">LOGIN </h2>
                <form role="form" method="post" action="logindb.php">
					<div class="form-group" class="dp1">
						
						<select class="form-control" name="typ" onchange="SubmitForm();">
						<?php
							echo '<option >...</option>';
							echo '<option >STAFF</option>';
							echo '<option >STUDENT</option>';
						?>
						</select>
					</div>
					<div class="form-group" >
						<label><i class='fa fa-search'><b>&nbsp;EMAIL-ID</b></i></label>
						<input type="text"  name="User_name"   class="form-control" >
					</div>
					<div class="form-group">
						<label><i class='fa fa-search'><b>&nbsp;password</b></i></label>
						<input name="password" type="password" value="" class="form-control" >
					</div>
					<br><br><br><br>
					<input style="margin:5% 10%" class="button-0" type="submit" value="SIGN IN"/>
				</form>	
			</div>
			
		</div>
		<div id="overlay" style="display:none;">
			<!-- Each overlay needs an id. The aria-labelledby is not required but is best practice -->
			<div style="" id="myOverlay2" aria-labelledby="myOverlay1Heading" data-overlay-container-class="slide-up" role="region">
				<h2 id="myOverlay1Heading">REGISTER </h2>
                <form role="form" method="post" action="logindb.php">
					<div class="form-group" >
						
						<input type="text"  name="User_name"  placeholder="User Name" class="form-control" ><i class="fa fa-question"></i>
					</div>
					<div id="custom-search-input">
									<div class="input-group col-md-12">
													<input  type="text" id="tags" class="search-query form-control" placeholder="Search" />
													<span class="input-group-btn">
														<button  onclick="display()" class="btn btn-danger" type="button">
															<i class="fa fa-question"></i>
														</button>
													</span>
									</div>
								</div>
					<div class="form-group">
											<input name="password" type="password" value="" class="form-control" >
					</div>
					<br><br><br><br>
					<input style="margin:5% 10%" class="button-0" type="submit" value="SIGN IN"/>
				</form>	
			</div>
			
		</div>	
		
        
                <!-- Include Overlay.js -->
		<script type="text/javascript" src="overlay/js/Overlay.js"></script> 
        
</body>
</html>