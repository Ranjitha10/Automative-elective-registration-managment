
<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!--webfonts-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text.css'/>

		<!--//webfonts-->

  <link rel="stylesheet" href="http://localhost/gem/css/bootstrap.css">
    <script src="http://localhost/gem/js/j.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="http://localhost/gem/css/styl.css">
	<link rel="stylesheet" href="http://localhost/gem/css/stylenav.css">
	<style>
		hr
		{ 
			background-color:black;
			border: 1px; 
			height: 1px; 
			background-image: -webkit-linear-gradient(left, rgba(0,0,0,0), rgba(215,215,215,0.75), rgba(0,0,0,0)); 
			background-image: -moz-linear-gradient(left, rgba(0,0,0,0), rgba(215,215,215,0.75), rgba(0,0,0,0)); 
			background-image: -ms-linear-gradient(left, rgba(0,0,0,0), rgba(215,215,215,0.75), rgba(0,0,0,0)); 
			background-image: -o-linear-gradient(left, rgba(0,0,0,0), rgba(215,215,215,0.75), rgba(0,0,0,0)); 
			box-shadow: 0px -2px 4px rgba(136,136,136,0.75);
		}
	

		body
		{
			padding-left:10%;
			padding-right:10%;
			background-color:grey;
			
		}
		header  p 
		{
			display: inline;
			font-size:24px;
			color:white;
		}
		header form 
		{
			display: inline;
			padding-left:3%;
		}
		header
		{
			background-color:black;
			margin-top:1%;
			margin-bottom:1%;
		}
		nav
		{
		
	
			font-size:16px;
			width:70%;
			margin-bottom:1%;
			padding:1%;
			background:#F5FFFA;
			border: 1px solid #ddd;
			-moz-border-radius: 2px;
			-webkit-border-radius: 2px;
			border-radius: 2px;
			-moz-box-shadow: 0 1px 3px 0 rgba(0,0,0,.1) inset;
			-webkit-box-shadow: 0 1px 3px 0 rgba(0,0,0,.1) inset;
			box-shadow: 0 1px 3px 0 rgba(0,0,0,.1) inset;
			font-family: 'PT Sans', Helvetica, Arial, sans-serif;
			
		
		
		}
		
		section
		{
			font-size:16px;
			width:70%;
			
			padding:1%;
			background:#F5FFFA;
			border: 1px solid #ddd;
			-moz-border-radius: 2px;
			-webkit-border-radius: 2px;
			border-radius: 2px;
			-moz-box-shadow: 0 1px 3px 0 rgba(0,0,0,.1) inset;
			-webkit-box-shadow: 0 1px 3px 0 rgba(0,0,0,.1) inset;
			box-shadow: 0 1px 3px 0 rgba(0,0,0,.1) inset;
			font-family: 'PT Sans', Helvetica, Arial, sans-serif;
			
		}
		section form select
		{
			width: 25%;
			height: 100%;
			margin-right:5%;
			background: #fcfcfc;
			border: 1px solid #ddd;
			-moz-border-radius: 2px;
			-webkit-border-radius: 2px;
			border-radius: 2px;
			-moz-box-shadow: 0 1px 3px 0 rgba(0,0,0,.1) inset;
			-webkit-box-shadow: 0 1px 3px 0 rgba(0,0,0,.1) inset;
			box-shadow: 0 1px 3px 0 rgba(0,0,0,.1) inset;
			font-family: 'PT Sans', Helvetica, Arial, sans-serif;
			color: #888;
			font-size: 16px;
		}

		section form select:focus
		{
			border: 1px solid #ccc;
			-moz-box-shadow: none;
			-webkit-box-shadow: none;
			box-shadow: none;
		}

		
		aside
		{
			position: fixed;
			left: 68%;
			top:  12%;
			width: 20%;
			height:40%;
			
			border: 1px solid black;
			background-color:#F5FFFA;
		}
		aside form
		{
			padding-left:10%;
		}
		
		
		#dept,#sem,#gorl,#typ
		{
			background-color:#3498DB;
			color:#fff;
			font-family: 'Helvetica', cursive;
			font-size: 16px;
			line-height:30px;
			border-radius:20px;
			-webkit-border-radius:20px;
			-moz-border-radius:20px;
			border:0;
			text-shadow:#C17C3A 0 -1px 0;
			outline:none;
			
		}  
		option
		{
			background-color:#80CCFF
			

		}
		.button-0
		 {
			
		
			border-radius: 10px;
			font-family: 'Helvetica', cursive;
			font-size: 16px;
			color: #FFF;
			text-decoration: none;  
			background-color: #3498DB;
			border-bottom: 5px solid #2980B9;
			text-shadow: 0px -2px #2980B9;
			/* Animation */
			transition: all 0.1s;
			-webkit-transition: all 0.1s;
		}

		 .button-0:focus
		{
			text-decoration: none;
			color: #fff;
			outline:none;
			
		}

		.button-0:active 
		{
			transform: translate(0px,5px);
			-webkit-transform: translate(0px,5px);
			border-bottom: 1px solid;
		}		
		input[type=text],input[type=password]
		{
			padding: 1px;
			border: solid 1px #dcdcdc;
			transition: box-shadow 0.3s, border 0.3s;
			border: solid 1px #707070;
			box-shadow: 0 0 5px 1px #969696;
		}	
		input[type=text]:focus,input[type=password]
		{
			border: solid 1px #707070;
			box-shadow: 0 0 5px 1px #969696;
		}

	</style>

 		
</head>

 
<body style="background-color:grey">
		<header >
			<p >
				<img src="http://localhost/gem/img/rvce.JPG" width="50px" height="50px"></img>
				
			</p>
			
			<p style="padding-left:3%">
				Elective Registration and Management 
			</p>
			<p style="padding-left:13%;">
				<img src="http://localhost/gem/img/prof.JPG" width="30px" height="30px"></img>
			</p>
			
			<p style="padding-left:1%;font-size:14px;width:10px;" width="10px">
				Hi,
				<?php
					echo "admin";
				?>
			</p>
			<a style="padding-left:5%" href="http://localhost/gem/index.php">Log Out</a>
		</header>
	
		
	
		<nav>
				<button id="b" type="button" onClick="parent.location='http://localhost/gem/3/admin.php'" >Home</button>
				
				<button id="b" class='active' type="button" onclick="parent.location='http://localhost/gem/3/admin/dept.php'">Departments</button>
				<button id="b" type="button" onClick="parent.location='http://localhost/gem/3/admin/elective.php'">Elective</button>
			</nav>

	<div class="main" style="width:600px;height:1000px;position:absolute;top:0px;background-color:grey">
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
	
</body>
</html>
