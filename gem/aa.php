<!DOCTYPE html>

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





<html lang="en">
<head>
	<title>G E M</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://localhost/gem/global/css/bootstrap.min.css">
	<script src="http://localhost/gem/global/js/j.js"></script>
		
</head>

<body>
	

  <div id="container" > 
    <!-- ####################################################################################################### -->
    <div id="portfolio">
      <div class="fl_left" style="width:50%;"> 
        <!-- ########### -->
        <div id="tabs-1">
		<form role="form" method="post" action="studentregisterdb.php">
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
			
			<input type="submit" class="button-0" value="SIGN UP" >
			<input type="button" onClick="parent.location='http://localhost/gem/index.php'"  class="button-0" value="GO BACK" >
        </form>
        </div><br>
      </div>
	</div>
  </div>	
     

				
	</section>

	<footer>
	<p>&copy; 2014 W3Schools. All rights reserved.</p>
	</footer>

</body>
</html>
