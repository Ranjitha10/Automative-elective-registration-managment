
<?php
$i=1; 

session_start();
$a=$_SESSION["count"];
$tc=$_POST['tc'];
$date=$_POST['dat'];
$ele=$_SESSION["ele"];

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "elect_auto";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
$t=0;
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
		for($i=1;$i<$a;$i++)	 
		{
			$j=$i+300;
			$usn=$_POST[$j];
			$b=$_POST[$i];
			$sql = "INSERT INTO attendance (student_usn,elective_id,date,Total_class,class_attended)
			VALUES ('$usn','$ele','$date','$tc','$b')";
			if ($conn->query($sql) === TRUE) 
			{

				$t=1;
			}
			else
			{
				
				$t=0;
				break;
   				
			}
		}
			if($t==1)
			{
				
			}
			if($t==0)
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
						<li><a href="http://localhost/gem/3/staff/index.php"><b>Home</b></a></li>
						<li><a href="http://localhost/gem/3/staff/index.php#elective"><b>Electives</b></a></li>
						<li><a href="http://localhost/gem/3/staff/index.php#features"><b>Features</b></a></li>
						<li><a href="http://localhost/gem/3/staff/index.php#tabs"><b>Event</b></a></li>
						<li><a href="http://localhost/gem/3/staff/index.php#aboutus"><b>About Us</b></a></li>
											
					</ul>
					<div>
						<img src="http://localhost/gem/img/guest.PNG" width="30px" height="30px">&nbsp; <?php echo "Hi, ".$_SESSION["names"]; ?> </img>
						<a href="http://localhost/gem/index.php">Logout</a>
					</div>
				</nav>
			</div>	
			
		</header>
		<br><br><br>
		<?php
		if($t==1)
		{
			echo "<h1 style='text-align:center;'>Success</h1>";
			 	echo '<a href="http://localhost/gem/3/staff/index.php"><br><h1 style="color:black;text-align:center;">GO BACK</h1></a>';		
			
		}
		else
		{
			echo "<h1 style='text-align:center;'>check the details</h1>";
			echo '<a href="http://localhost/gem/3/staff/index.php"><br><h1 style="color:black;text-align:center;">GO BACK</h1></a>';		
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
        
</body>
</html>