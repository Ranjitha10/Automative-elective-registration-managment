 <!DOCTYPE html>

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

$sql = "SELECT staff_id,email_id,password,staff_name,department_id FROM staff";

$result = $conn->query($sql);
if ($result->num_rows > 0)
{
    // output data of each row
    while($row = $result->fetch_assoc()) 
    {
        if( $row["email_id"]==$_SESSION["email"]  )
	{
		$name=$row['staff_name'];
		$dept=$row['department_id'];
	}
    }

} 
else {
    echo "0 results";
}
$sql = "SELECT staff_id,elective_id FROM teaches";
$ele=array();
$result = $conn->query($sql);
if ($result->num_rows > 0)
{
    // output data of each row
    while($row = $result->fetch_assoc()) 
    {
		$c4=count($ele);
		
        if( $row["staff_id"]==$_SESSION["id"]  )
		{
			$ele[$c4+1]=$row["elective_id"];
		}
    }

} 
else {
    echo "0 results";
}



$conn->close();
?>

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
	<link rel="stylesheet" href="http://localhost/gem/css/mainpage.css">
	<style>
		#active
		{
			border-bottom:solid 5px orange;
		}
	</style>
<script>
	function electdetail()
		{
				elective=$('#elec').val();
				//alert(elective);
				if(id==1)
					attenddetail();
				else if(id==2)
					markdetail();
				else if(id==3)
					assigndetail();
		}
	function attenddetail()
		{
				
				document.getElementsByClassName("box-item")[2].removeAttribute("id");
				document.getElementsByClassName("box-item")[1].removeAttribute("id");
				document.getElementsByClassName("box-item")[0].setAttribute("id", "active");
				id=1;
				elective=$('#elec').val();
				$('#elec_col').css("visibility", 'visible');
				var parameters="ename="+elective; 
				var xhttp = new XMLHttpRequest();
				xhttp.onreadystatechange = function() 
				{
					if (xhttp.readyState == 4 && xhttp.status == 200) 
					{
					  document.getElementById("res").innerHTML = xhttp.responseText;
					}
				}
				xhttp.open("POST", "feat/ance/ance.php", true);
				xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				xhttp.send(parameters);			
				
		}
		function markdetail()
		{
				
				id=2;
				document.getElementsByClassName("box-item")[0].removeAttribute("id");
				document.getElementsByClassName("box-item")[1].setAttribute("id", "active");
				document.getElementsByClassName("box-item")[2].removeAttribute("id");
				
				elective=$('#elec').val();
				$('#elec_col').css("visibility", 'visible');
				var parameters="ename="+elective; 
				var xhttp = new XMLHttpRequest();
				xhttp.onreadystatechange = function() 
				{
					if (xhttp.readyState == 4 && xhttp.status == 200) 
					{
					  document.getElementById("res").innerHTML = xhttp.responseText;
					}
				}
				xhttp.open("POST", "feat/marks/marks.php", true);
				xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				xhttp.send(parameters);			
				
		}
		function assigndetail()
		{
				document.getElementsByClassName("box-item")[0].removeAttribute("id");
				document.getElementsByClassName("box-item")[1].removeAttribute("id");
				document.getElementsByClassName("box-item")[2].setAttribute("id", "active");
				
				id=3;
				elective=$('#elec').val();
				$('#elec_col').css("visibility", 'visible');
				var parameters="ename="+elective; 
				var xhttp = new XMLHttpRequest();
				xhttp.onreadystatechange = function() 
				{
					if (xhttp.readyState == 4 && xhttp.status == 200) 
					{
					  document.getElementById("res").innerHTML = xhttp.responseText;
					}
				}
				xhttp.open("POST", "feat/assign/assign.php", true);
				xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				xhttp.send(parameters);			
				
		}
</script>
</head>
<body >
	
	
		<header>
			
			<div id="nav-container">
				<nav >
					<img class="scroll-top logo  animated bounceInLeft" height="70px" width="70px"  src="http://localhost/gem/img/logo.png"></img>
					<ul style="margin-left:15%">
						<li><a href="http://localhost/gem/3/staff/index.php"><b>Home</b></a></li>
						<li><a href="http://localhost/gem/3/staff/index.php#elective"><b>Electives</b></a></li>
						<li><a href="http://localhost/gem/3/staff/index.php#features"><b>Features</b></a></li>
						<li><a href="http://localhost/gem/3/staff/index.php#tabs"><b>Event</b></a></li>
						<li><a href="http://localhost/gem/3/staff/index.php#aboutus"><b>About Us</b></a></li>
						
						
						
					</ul>
					<div>
						<img src="http://localhost/gem/img/guest.PNG" width="30px" height="30px">&nbsp; <?php echo "Hi, ".$_SESSION["names"]; ?> </img>
						<a href="http://localhost/gem/index.php">LogOut</a>
					</div>
				</nav>
			</div>	
			<div id="slider-container1">
				<div class="slider_caption1">
                    <p>Elective</p>
                    
                </div>
				<div class="slider_caption2">
                    <p>Registration &amp; Management</p> 
                </div>	
		
			</div>
			
		</header>
		<br>
		<br>
		<section>
				<div id="elective" class="article2-container ">
					<div class="ele_head">
						<h1>ELECTIVES</h1>
					</div>
					<br>
					
					<p title="Filter elective list by "><i class="fa fa-search"></i>&nbsp;SEARCH BY:</p>
					<div class="form-group" class="dp1">
						<label for="sel1">Department:</label>
						<select class="form-control" id="dept" onchange="SubmitForm();">
							<option>ISE</option>
							<option>CSE</option>
							<option>ECE</option>
							<option>EEE</option>
						</select>
					</div>
					<div class="form-group" class="dp2" >
						<label for="sel1">Semester:</label>
						<select class="form-control"  id="sem" onchange="SubmitForm();">
							<option>5</option>
							<option>6</option>
							<option>7</option>
							
						</select>
					</div>
					
					<div class="form-group" class="dp3" >
						<label for="sel1">Global or Local:</label>
						<select class="form-control" id="gorl" onchange="SubmitForm();">
							<option>Local</option>
							<option>Global</option>
							
						</select>
					</div>
					<div id="nd">
						<br><br><br><br><br>
					</div>
				</div>
				
				<div class="article3-container ">
						<div class="row">
							<h3 title="search by elective name">Elective Details</h3>
							<br>
							   <div id="custom-search-input">
									<div class="input-group col-md-12">
													<input  type="text" id="tags" class="  search-query form-control" placeholder="Search" />
													<span class="input-group-btn">
														<button  onclick="display()" class="btn btn-danger" type="button">
															<i class="fa fa-search"></i>
														</button>
													</span>
									</div>
								</div>
						</div>
						<div id="details">
							<br><br>
						</div>	
				</div>	
				<br><br>
			<div id="features" class="page-section colord">
			  <div class="container">
				<div class="row"> 
				 				  
				  <!-- item -->
				
				   </div>
				  <!-- end: --> 
				  
				  <!-- item -->
				  <div class="col-md-3 text-center">
				  <div class="box-item" id="active">
				  <i class="circle"> <img src="images/2.png" alt="" /></i>
					<h3><a onclick="attenddetail()" style="color:grey">Attendance Detail</a></h3>
				  </div>
				  </div>
				  <!-- end: --> 
				   <!-- item -->
				  <div class="col-md-3 text-center"> 
				  <div class="box-item" style="">
				  <i class="circle"><img src="images/5.png" alt="" /></i>
					<h3><a onclick="markdetail()" style="color:grey">Marks Detail</a></h3>
					
				  </div>
				   </div>
				  <!-- end: --> 
				   <!-- item -->
				  <div class="col-md-3 text-center"> 
				  <div class="box-item">
				  <i class="circle"><img src="images/5.png" alt="" /></i>
					<h3><a onclick="assigndetail()" style="color:grey">Assignment Detail</a></h3>
					
				  </div>
				   </div>
				  <!-- end: --> 
			  
				</div>
			  </div>
			  <!--/.container--> 
			</div>			
			<br><br><br>
				<div id="elec_col" style="margin-left:20%;visibility: hidden;">
					<b style="font-size:18px">Select an Elective Taught By you for details :</b>
					<select name="elec" id="elec" onchange='electdetail();'>
							<?php
								foreach ($ele as $value) 
								{
								   echo '<option >'.$value.'</option>';
								}
							?>
					</select>
				</div>
			<br>
			
			<div id="res" style="margin-left:20%"></div>
			
			<br><br><Br>
		</section>


		<footer>
			<div class="container">
				<div class="col">
                   <ul>
						<li><B style="font-size:16px">Address</B></li>
						<li>R.V. College of Engineering 			</li>
						<li>R.V. Vidyaniketan post,Mysore Road  	</li>                        
						<li>Bangalore-560059 						</li>
                    </ul>
                 </div>
				 <div class="col2">
                   <ul>
						<li><B style="font-size:16px">Contact Us</B></li>
						<li>Phone: +22 342 2345 345		</li>
						<li>Email: info@example.com		</li>                        
						<li>Skype: my-company			</li>
                    </ul>
                 </div>
				 
			</div>

			<div class="col3">
					Copyright 2015 | All Rights Reserved
			</div>
		</footer>
            
</body>
</html>