<!DOCTYPE html>
<html lang="en">
<head>
<?php
session_start();
?>

	<title>G E M</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
	<script>
		var z;
		function SubmitForm()
		{		
				var dept= $('#dept').val();
				var sem= $('#sem').val();
				var gorl= $('#gorl').val();
				var parameters="dept="+dept+"&sem="+sem+"&gorl="+gorl
				var xhttp = new XMLHttpRequest();
				xhttp.onreadystatechange = function() 
				{
					if (xhttp.readyState == 4 && xhttp.status == 200) 
					{
					  document.getElementById("nd").innerHTML = xhttp.responseText;
					}
				}
				xhttp.open("POST", "ajax/main.php", true);
				xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				xhttp.send(parameters);
				
		}
		
		function showHint(str) 
		{
			
			if (str.length == 0) 
			{ 
				 document.getElementById("txtHint").innerHTML = "";
				 return;
			}
			else 
			{
				 var xmlhttp = new XMLHttpRequest();
				 xmlhttp.onreadystatechange = function() 
				 {
					 if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
					 {
						 document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
						 z=xmlhttp.responseText;
					 }
				 }
				 xmlhttp.open("GET", "ajax/gethint.php?q="+str, true);
				 xmlhttp.send();
			 }
		}
		function display()
		{
								
				var parameters="ename="+z; 
				var xhttp = new XMLHttpRequest();
				xhttp.onreadystatechange = function() 
				{
					if (xhttp.readyState == 4 && xhttp.status == 200) 
					{
					  document.getElementById("details").innerHTML = xhttp.responseText;
					}
				}
				xhttp.open("POST", "ajax/details.php", true);
				xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				xhttp.send(parameters);			
				
		}
		function electdetail()
		{
			
				document.getElementsByTagName("button")[0].removeAttribute("class");
				document.getElementsByTagName("button")[1].setAttribute("class", "active");
				var xhttp = new XMLHttpRequest();
				xhttp.onreadystatechange = function() 
				{
					if (xhttp.readyState == 4 && xhttp.status == 200) 
					{
					  document.getElementById("section").innerHTML = xhttp.responseText;
					}
				}
				xhttp.open("POST", "feat/electdetail.php", true);
				xhttp.send();			
				
		}
		
	</script>
	
</head>

<body>
	
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
					echo $_SESSION["email"];
				?>
			</p>
			<a style="padding-left:5%" href="http://localhost/gem/index.php">Log Out</a>
		</header>
	
		
		<nav>
				<button id="b"class='active' type="button" onClick="parent.location='http://localhost/gem/3/admin.php'" >Home</button>
				
				<button id="b" type="button" onclick="parent.location='http://localhost/gem/3/admin/dept.php'">Departments</button>
				<button id="b" type="button" onClick="parent.location='http://localhost/gem/3/admin/elective.php'">Elective</button>
			</nav>
	
	<section id="section">
		
		<h4><strong>Looking for Electives in RVCE?</strong></h4>
		<br>
		<h5>Search By:</h5>
		
		<h5>
			
			<strong>Department</strong>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<strong>Semester</strong>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			
			<strong>Local or Global Elective</strong>
		</h5>
		
		
		
		<form >	
				<select id="dept" name="dept" value="Department"  onchange="SubmitForm();">
					<?php
						echo '<option >...</option>';
						echo '<option >CSE</option>';
						echo '<option >ISE</option>';
						echo '<option >ECE</option>';
						echo '<option >BT</option>';
						echo '<option >CV</option>';
						
					?>
				</select>           
			 
				<select name="sem" id="sem" value="Semester" onchange="SubmitForm();">
					<?php
						
						echo '<option >5</option>';
						echo '<option >6</option>';
						echo '<option >7</option>';
						
						
					?>
				</select>
			
			
				<select name="gorl" id="gorl" onchange="SubmitForm();">
					<?php
						echo '<option >Local</option>';
						echo '<option >Global</option>';
					
						
					?>
				</select>
				<br><br>
				<div id="nd"></div>
				<br>
				<hr>
				<p><b>Type an Elective name for details in the input field below:</b></p>
				<form> 
				Elective name: <input type="text" onkeyup="showHint(this.value)">
							<input class="button-0" type="button" value="elective details" onclick="display()">
				</form>
				<p>Suggestions :&nbsp; <span style="background-color:yellow" id="txtHint"></span></p>
				
				<div id="details">
				</div>
				<hr>
				
	</section>

	<footer>
	</footer>

</body>
</html>
