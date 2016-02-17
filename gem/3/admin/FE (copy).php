
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
$ename=array("");
$sname=array("");
$c=0;
$sql = "SELECT elective_name,elective_id FROM elective";
$result = $conn->query($sql);
if ($result->num_rows > 0)
{
    // output data of each row
    while($row = $result->fetch_assoc()) 
    {
       $eid[$c]=$row["elective_id"]; 
       $ename[$c]=$row["elective_name"]; 
       $c=$c+1;
    }
} 
else {
    echo "0 results";
}
$c=0;
$sql = "SELECT staff_name FROM staff";
$result = $conn->query($sql);
if ($result->num_rows > 0)
{
    // output data of each row
    while($row = $result->fetch_assoc()) 
    {
       $sname[$c]=$row["staff_name"]; 
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
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!--webfonts-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text.css'/>
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<!--//webfonts-->


</script>
 		
</head>

 
<body>
	<div class="main" style="width:900px;height:1000px;position:absolute;top:20px;left:10px">
		<form method="post" action="FEdb.php">
    		<h1>DEPARTMENT</h1>		
<div >
	
			<div >
				<table>
					<thead >
						<tr>
							<th><B style="font-size:20px">&nbsp;Elective ID</B></th>
							<th><B style="font-size:20px">&nbsp;Elective Name</B></th>
							<th><B style="font-size:20px">&nbsp;Faculty Name</B></th>
							

						</tr>
					</thead>

					<tbody>

<?php

$c=1;
$d=301;

		foreach ($ename as $value ) 
		{
			
 		   echo "<tr>
			<td ><input style='color:black' name='".$c."'  type='text' value='".$eid[$c-1]."'readonly required/></td>
			<td ><input style='color:black' name='".$de."'  type='text' value='".$value."'readonly required/></td>
			<td >";

		   echo "<select onchange='change(this);' style='width:200px;' name='".$d."'>
		   <option selected disabled hidden value=''></option>";
			
//
			foreach ($sname as $val ) 		
				echo "<option value=''>".$val."</option>";
//ss
		   echo" </select>
			</td>
			</tr>";

//<td ><input name='".$c."'  style='color:black' type='text' placeholder='class attended' /></td>
						
$c=$c+1;
$d=$d+1;
	
		}
$_SESSION["count"] = $c;


?>
					</tbody>
				</table>
			</div>

		</div>

<input type="submit" value="Done" style="width:100px;float:left;">
	</form>
	
</div>  
	
</body>
</html>
