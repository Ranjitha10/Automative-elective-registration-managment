

<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "elect_auto";

session_start();
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$eid=array("");
$c=0;
$sql = "SELECT elective_name,elective_id FROM elective";
$result = $conn->query($sql);
if ($result->num_rows > 0)
{
    // output data of each row
    while($row = $result->fetch_assoc()) 
    {
       $eid[$c]=$row["elective_id"]; 
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
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="http://localhost/gem/css/smoothj.css" />
	<script src="http://localhost/gem/js/smoothj.js"></script>
	  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
	
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	
	<link rel="stylesheet" href="http://localhost/gem/css/mainpage.css">
</head>
<body  >
	
	
		<header style="background-color:#00a3cc;height:200px;">
			
			<div id="nav-container" >
				<nav >
					<img class="scroll-top logo  animated bounceInLeft" height="70px" width="70px"  src="http://localhost/gem/img/logo.png"></img>
					<ul style="margin-left:15%">
						<li><a href="http://localhost/gem/3/stud/index.php"><b>Home</b></a></li>
						<li><a href="http://localhost/gem/3/stud/index.php#elective"><b>Electives</b></a></li>
						<li><a href="http://localhost/gem/3/stud/index.php#features"><b>Features</b></a></li>
						<li><a href="http://localhost/gem/3/stud/index.php#tabs"><b>Event</b></a></li>
						<li><a href="http://localhost/gem/3/stud/index.php#aboutus"><b>About Us</b></a></li>
						
						
						
					</ul>
					<div>
						<img src="http://localhost/gem/img/guest.PNG" width="30px" height="30px">&nbsp; <?php echo "Hi, Admin" ?> </img>
						<a href="http://localhost/gem/index.php">LogOut</a>
					</div>
				</nav>
			
			</div>		
					
		</header>
			<div class="main" style="width:600px;">
		<form method="post" action="electiveAadd.php"  enctype="multipart/form-data">
		
    		<h1>ELECTIVE </h1>
  			
				<br><br>
				<p class="p-container" style="float:left;">
				
				<input id="flip" type="button" value="ADD ELECTIVE "style="width:300px">
				</p>		
				<BR><BR>

			   <div id="panel" class="inset">
				<p>
				    <label >DEPARTMENT</label>
				    <input name="d" type="text" placeholder="" required/>
  				</p>
				<p>
				    <label >SEMESTER</label>
				    <input name="s" type="text" placeholder="" required/>
  				</p>
			   
				<p>
					<label >ELECTIVE NAME</label>
				    <input name="en" type="text" placeholder="" required/>
  				</p>
				<p>
				    
				    <label >ELECTIVE ID</label>
				    <input name="ei" type="text" placeholder="" required/>
  				</p>
				<p>
				    
					<label >CREDIT</label>
				    <input type="text"name="c" placeholder="" required/>
  				</p>
				
				   <label >SELECT SYLLABUS FILE</label>
 				   <input type="file" name="file_link" id="file_link">
 				    
			<br><br><br>


				<input  type="submit" value="ADD" style="width:100px;float:right;">
				<br><br>
				</div>
		</form>	
				
		<form method="post" action="electivedel.php">
			 <div>
				<p class="p-container" style="float:left;">
				<br><br>
			    <input id="flip" type="button" value="DELETE ELECTIVE"style="width:300px">
			    
				</p>		
				<br><br>
				<div id="panel" class="inset">
				<br><br><Br>
				<p>
				    
					<label >ELECTIVE ID</label>
					
<?php

		   $c=1;
		   echo "<select  style='width:200px;' name='del'>
		   <option selected disabled hidden value=''></option>";
		
	       	   foreach ($eid as $val ) 		
				echo "<option onselected='this.form.submit();' value='".$val."'>".$val."</option>";
//ss
		   echo" </select>";



?>				  

  				</p>

				<input type="submit" value="DELETE" style="width:100px;float:right;">
				<br><br>
				 </div>
			</form> 	
			 
			  
			  <input type="submit" value="Done" onClick="parent.location='http://localhost/RV/lr/3/admin.php'" style="width:100px;float:left;">
			  

			  
		</form>
	</div>  
	
			
			

		
</body>
</html>