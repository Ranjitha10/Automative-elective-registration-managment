 <!DOCTYPE html>
 <?php 
 session_start();
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
			<div class="main" style="width:600px;height:1000px;">
		<form method="post" action="deptadd.php">
    		<h1>DEPARTMENT  </h1>
  			
				<br><br>
			  <p class="p-container" style="float:left;">

			    <input id="flip" type="button" value="ADD DEPARTMENT"style="width:300px">
			    
				</p>		
				<br><br>
			<div id="panel" class="inset">
	  			<p>
				    <label >DEPARTMENT NAME</label>
				    <input name ="dn" type="text" placeholder="" required/>
  				</p>
				<p>
				    <label >DEPARTMENT ID</label>
				    <input name="di" type="text" placeholder="" required/>
  				</p>
				<input type="submit" value="ADD" style="width:100px;float:right;">
 			</div>
		</form>
		<form action="deptdel.php" method="post" >
			  <p class="p-container" style="float:left;"><br><br>
			    <input type="button" value="DELETE DEPARTMENT" style="width:300px">
			  </p>	
			  <br><br>
			  <div class="inset">
			  <br><br><p>
				    <label >DEPARTMENT ID</label>
				    <input name="did" type="text" placeholder="" required/>
  				</p>
				<input type="submit"  value="DELETE" style="width:100px;float:right;"><br><br>
			  </div>
 
		</form>
<input type="button" value="DONE" onClick="parent.location='http://localhost/RV/lr/3/admin.php'" style="width:100px;float:left;">
	</div>  
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