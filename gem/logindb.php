
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
$t=0;
$typ=$_POST ['typ'];
$email=$_POST ['User_name'];
$pass=$_POST ['password'];
$_SESSION["email"] = $email;
/////////////////////////////////////////////////
$sql = "SELECT email_id,student_usn,semester,department_id,first_name FROM student";

$result = $conn->query($sql);
if ($result->num_rows > 0)
{
    // output data of each row
    while($row = $result->fetch_assoc()) 
    {
        if($row["email_id"] ==  $_SESSION["email"])
	{
		$sem=$row["semester"];
		$dept=$row["department_id"];
		$usn=$row["student_usn"];
		$name=$row["first_name"];	
	}
    }
} 
else {
    
}

$sql = "SELECT student_usn,elective_id FROM learn";
$count=array();
$result = $conn->query($sql);
$c=1;	
$xyz=0;
if ($result->num_rows > 0)
{
    // output data of each row
    while($row = $result->fetch_assoc()) 
    {
	
        if($row["student_usn"] ==  $usn)
		{	
			$count[$c]=$row["elective_id"];
			$c=$c+1;	
			$xyz=1;
		}
    }
} 
else {
    
}

if($xyz==0)
	echo "";
else if($xyz==1)
{
		$sql = "SELECT credit,elective_id,elective_name FROM elective";
		$ele=array();
		$result = $conn->query($sql);
		if ($result->num_rows > 0)
		{
			// output data of each row
			while($row = $result->fetch_assoc()) 
			{

			if($row["elective_id"] ==  $count[1]&& $row["credit"]==4)
			{
				$_SESSION["eleAid"]=$row["elective_id"];
				$_SESSION["eleA"]=$row["elective_name"];
			}
			else if($row["elective_id"] ==  $count[1]&& $row["credit"]==3)
			{	
				$_SESSION["eleBid"]=$row["elective_id"];
				$_SESSION["eleB"]=$row["elective_name"];
			}      
			if($row["elective_id"] ==  $count[2] && $row["credit"]==4)
			{
				$_SESSION["eleAid"]=$row["elective_id"];
				$_SESSION["eleA"]=$row["elective_name"];
				
			
			}
			else if($row["elective_id"] ==  $count[2] && $row["credit"]==3)
			{
				$_SESSION["eleBid"]=$row["elective_id"];
				$_SESSION["eleB"]=$row["elective_name"];
			}
			
		   }
		} 
		else {
			
		}

}









///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$admin="admin@gmail.com";
$password="elective123";
if($admin==$email  &&  $password==$pass)
	{
		
		header('Location:http://localhost/gem/3/admin.php');
			
		
	}

if($typ=='STUDENT')
{
	$sql = "SELECT student_usn,email_id,password,first_name FROM student";

		$result = $conn->query($sql);
		if ($result->num_rows > 0)
		{
			// output data of each row
			while($row = $result->fetch_assoc()) 
			{
				if($row["email_id"]==$email  &&  $row["password"]==$pass)
			{
				$_SESSION["usn"] = $row["student_usn"];
				$_SESSION["names"] = $row["first_name"];
				echo $_SESSION["usn"];
				
			//	echo '<p  id="link"></p>;
				header('Location:http://localhost/gem/3/stud/index.php');
				$t=1;	
				
			}
			}
		if($t==0)
		{
			
		
		}
		} 
		else {
		//	echo "0 results";
		}
}
else if($typ=='STAFF')
{
	
		$sql = "SELECT staff_id,email_id,password,staff_name FROM staff";

		$result = $conn->query($sql);
		if ($result->num_rows > 0)
		{
			// output data of each row
			while($row = $result->fetch_assoc()) 
			{
				if($row["email_id"]==$email  &&  $row["password"]==$pass)
			{
				$_SESSION["names"] = $row["staff_name"];
				$_SESSION["id"] = $row["staff_id"];
				echo $_SESSION["id"];
				header('Location:http://localhost/gem/3/staff/index.php');
				$t=1;	
				
			}
			}

		}
		else {
		}
}
else
{

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
						<li><a href=""><b>Home</b></a></li>
						<li><a href=""><b>Electives</b></a></li>
						<li><a href=""><b>Event</b></a></li>
						<li><a href=""><b>About Us</b></a></li>
						<li><a href=""><b>Contact Us</b></a></li>
						
					</ul>
					<div>
						<img src="http://localhost/gem/img/guest.PNG" width="30px" height="30px">&nbsp; Hi, Guest</img>
						<a href="#myOverlay1" data-overlay-trigger>Login</a>
					</div>
				</nav>
			</div>	
			
		</header>
		<br><br><br>
		<?php
		if($t==0)
		
		{
			echo "<h1 style='text-align:center;'>Login Fail</h1>";
			echo '<a href="http://localhost/gem/index.php"><br><h1 style="color:black;text-align:center;">GO BACK</h1></a>';		
		}
	?>	
	</form>
		
		 
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
		
                <!-- Include Overlay.js -->
		<script type="text/javascript" src="overlay/js/Overlay.js"></script> 
  