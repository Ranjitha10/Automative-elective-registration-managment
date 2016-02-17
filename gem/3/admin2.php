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
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
	<link rel="stylesheet" href="http://localhost/gem/css/mainpage.css">
	
	
</head>
<body >

	
   

		<header>
			
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
			<div id="slider-container1">
				<div class="slider_caption1">
                    <p>Elective</p>
                    
                </div>
				<div class="slider_caption2">
                    <p>Registration &amp; Management</p> 
                </div>	
				<div class="login">
						<ul>
							<li>1. </li>
							<li>2. </li>
							<li>3. </li>
							<li>4. </li>
							<li>5. </li>
						</ul>
				</div>
	
				<a href="#myOverlay2" data-overlay-trigger id="button" class="btn btn-apply1" title="Register"  > <i class="fa fa-key"></i></a>				
				<button id="button" class="btn btn-apply2 sugg_Button " title="Most Commonly checked Electives"  ><i class="fa fa-lightbulb-o"></i></button>
			</div>
			
		</header>
		<br>
		<br>
		<section>
				<div class="article1-container wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;">
					
					<div class="aboutus">
						<h2 class="titile">About Us</h2>
						<p>This was introduced for better registration and management of the academic details of the elective courses.
						Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
						when an unknown printer took a galley of type and scrambled it to make a type specimen book.
						It has survived not only five centuries, but also the leap into electronic typesetting, remaining
						</p>
					</div >
					<div id="tabs">
						<ul>
							<li><a href="#tabs-1">Notice</a></li>
							<li><a href="#tabs-2">Events</a></li>
							
						</ul>
						<div id="tabs-1">
							<ul class="list-group">
							  <li class="list-group-item list-group-item-success">First item</li>
							  <li class="list-group-item list-group-item-info">Second item</li>
							  <li class="list-group-item list-group-item-warning">Third item</li>
							  <li class="list-group-item list-group-item-danger">Fourth item</li>
							</ul>
						</div>
						<div id="tabs-2">
							<p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor. Aenean aliquet fringilla sem. Suspendisse sed ligula in ligula suscipit aliquam. Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis. Curabitur ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla. Aliquam erat volutpat. Pellentesque convallis. Maecenas feugiat, tellus pellentesque pretium posuere, felis lorem euismod felis, eu ornare leo nisi vel felis. Mauris consectetur tortor et purus.</p>
						</div>
						
					</div>
					

				</div>
				<div class="article2-container ">
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
													<input  type="text" id="tags" class="search-query form-control" placeholder="Search" />
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
				
				<div class="article4-container ">	   
					<div class="row">
						<div class="heading text-center"> 
							<!-- Heading -->
							<h2>Contact Us</h2>
						</div>
					</div>
					<div class="row mrgn30">
							<div class="col-sm-12">
								<div class="form-group">
									<label for="name">Name</label>
									<input type="text" class="form-control" name="name" id="name" placeholder="Enter name" title="Please enter your name (at least 2 characters)">
								</div>
								<div class="form-group">
									<label for="email">Email</label>
									<input type="email" class="form-control" name="email" id="email" placeholder="Enter email" title="Please enter a valid email address">
								</div>
								<div class="form-group">
									<label for="comments">Comments</label>
									<textarea name="comment" class="form-control" id="comments" cols="3" rows="5" placeholder="Enter your message…" title="Please enter your message (at least 10 characters)"></textarea>
									<br>
									<button name="submit" type="submit" class="btn btn-lg btn-primary" id="submit" onclick="com();">Submit</button>
								</div>
							</div>
							
					</div>
				</div>
			
			
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