
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


 		
</head>

 
<body>
	<div class="main" style="width:600px;height:1000px;position:absolute;top:20px;left:100px">
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
