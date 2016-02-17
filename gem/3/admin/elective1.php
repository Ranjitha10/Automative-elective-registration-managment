

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
		<meta charset="utf-8">
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!--webfonts-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text.css'/>

		<!--//webfonts-->

		
</head>

 
<body>
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


