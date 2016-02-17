
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
$ele=$_POST ['ename'];

$sql = "SELECT semester,elective_id,elective_name FROM elective";

$result = $conn->query($sql);
if ($result->num_rows > 0)
{
    // output data of each row
    while($row = $result->fetch_assoc()) 
    {
        if( $row["elective_id"]==$ele  )
	{
		$elec_name=$row["elective_name"];
	}
    }
} 
else {
    echo "0 results";
}

$usn=array("");
$sql = "SELECT student_usn,elective_id FROM learn";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
    // output data of each row
$c=0;
    while($row = $result->fetch_assoc()) 
    {
	if($row["elective_id"]==$ele)	
	{
		$usn[$c]=$row["student_usn"];        
		$c=$c+1;        
	}  
   }
} else {
    echo "0 results";
}

$conn->close();
?>

<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">
  <title>GEM</title>
 <style>
	form
	{
		width:80%;
		background:white;
		border-radius:10px;
		padding-bottom:5%;
		padding-left:5%;
		padding-top:5%;
		box-shadow: 5px 5px 5px #888888;
	}
	
	.CSSTableGenerator {
	margin:0px;padding:0px;
	width:70%;
	box-shadow: 10px 10px 5px #888888;
	border:1px solid #000000;
	
	-moz-border-radius-bottomleft:0px;
	-webkit-border-bottom-left-radius:0px;
	border-bottom-left-radius:0px;
	
	-moz-border-radius-bottomright:0px;
	-webkit-border-bottom-right-radius:0px;
	border-bottom-right-radius:0px;
	
	-moz-border-radius-topright:0px;
	-webkit-border-top-right-radius:0px;
	border-top-right-radius:0px;
	
	-moz-border-radius-topleft:0px;
	-webkit-border-top-left-radius:0px;
	border-top-left-radius:0px;
}.CSSTableGenerator table{
    border-collapse: collapse;
        border-spacing: 0;
	width:100%;
	height:100%;
	margin:0px;padding:0px;
}.CSSTableGenerator tr:last-child td:last-child {
	-moz-border-radius-bottomright:0px;
	-webkit-border-bottom-right-radius:0px;
	border-bottom-right-radius:0px;
}
.CSSTableGenerator table tr:first-child td:first-child {
	-moz-border-radius-topleft:0px;
	-webkit-border-top-left-radius:0px;
	border-top-left-radius:0px;
}
.CSSTableGenerator table tr:first-child td:last-child {
	-moz-border-radius-topright:0px;
	-webkit-border-top-right-radius:0px;
	border-top-right-radius:0px;
}.CSSTableGenerator tr:last-child td:first-child{
	-moz-border-radius-bottomleft:0px;
	-webkit-border-bottom-left-radius:0px;
	border-bottom-left-radius:0px;
}.CSSTableGenerator tr:hover td{
	
}
.CSSTableGenerator tr:nth-child(odd){ background-color:#aad4ff; }
.CSSTableGenerator tr:nth-child(even)    { background-color:#ffffff; }.CSSTableGenerator td{
	vertical-align:middle;
	
	
	border:1px solid #000000;
	border-width:0px 1px 1px 0px;
	text-align:left;
	padding:7px;
	font-size:10px;
	font-family:Arial;
	font-weight:normal;
	color:#000000;
}.CSSTableGenerator tr:last-child td{
	border-width:0px 1px 0px 0px;
}.CSSTableGenerator tr td:last-child{
	border-width:0px 0px 1px 0px;
}.CSSTableGenerator tr:last-child td:last-child{
	border-width:0px 0px 0px 0px;
}
.CSSTableGenerator tr:first-child td{
		background:-o-linear-gradient(bottom, #005fbf 5%, #003f7f 100%);	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #005fbf), color-stop(1, #003f7f) );
	background:-moz-linear-gradient( center top, #005fbf 5%, #003f7f 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#005fbf", endColorstr="#003f7f");	background: -o-linear-gradient(top,#005fbf,003f7f);

	background-color:#005fbf;
	border:0px solid #000000;
	text-align:center;
	border-width:0px 0px 1px 1px;
	font-size:14px;
	font-family:Arial;
	font-weight:bold;
	color:#ffffff;
}
.CSSTableGenerator tr:first-child:hover td{
	background:-o-linear-gradient(bottom, #005fbf 5%, #003f7f 100%);	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #005fbf), color-stop(1, #003f7f) );
	background:-moz-linear-gradient( center top, #005fbf 5%, #003f7f 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#005fbf", endColorstr="#003f7f");	background: -o-linear-gradient(top,#005fbf,003f7f);

	background-color:#005fbf;
}
.CSSTableGenerator tr:first-child td:first-child{
	border-width:0px 0px 1px 0px;
}
.CSSTableGenerator tr:first-child td:last-child{
	border-width:0px 0px 1px 1px;
}
form input
{
		margin-left:5%;
		width:30%;
}
  </style>
 
 
</head>

<body>
<form method="post" action="feat/marks/marksdb.php">

		
				<B  >Elective&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</B> 
 <?php
				    echo '<input type="text"  name="Name"  value="'.$elec_name.'" readonly> ';  ?>

				<br><br>
				<B  >Staff Name&nbsp;&nbsp;&nbsp;</B> 
 <?php
				    echo '<input type="text"  name="Name"  value="'.$name.'" readonly> ';  ?>

				<br><br>

				<B  >Department&nbsp;&nbsp;</B> 
 <?php
				    echo '<input type="text"  name="Name"  value="'.$dept.'" readonly> ';  ?>

				<br><br>
				<B  >Internal&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</B> 

				 <input type="text"  name="dat"  placeholder="" > 

				<br><br>		 		
					

		
<div style="">
		
			<div >
				<table class="CSSTableGenerator">
				<tbody>					
					<tr >
							<td><B  >STUDENT USN</B></td>
							<td><B  >QUIZ MARKS</B></td>
							<td><B  >THEORY MARKS</B></td>

						</tr>
					

					
<?php

$c=1;
$d=301;
$e=601;
asort($usn);
		foreach ($usn as $value) 
		{
			
 		   echo '<tr>
			<td ><input style="color:black;background:transparent;border:none;font-size:14px;width:100%" name="'.$c.'"type="text" value="'.$value.'" readonly/></td>
			<td style=""><input style="color:black;background:transparent;border:none;font-size:14px;width:80%;" name="'.$d.'"  style="color:black" type="text" /></td>
			<td style=""><input style="color:black;background:transparent;border:none;font-size:14px;width:80%" name="'.$e.'"  style="color:black" type="text"  /></td></tr>	';	
		$c=$c+1;
		$d=$d+1;
		$e=$e+1;
		}
$_SESSION["count"] = $c;
$_SESSION["ele"]=$ele;		
?>
					</tbody>
				</table>
 <button style="background:#0F3D4C;color:white;border-radius:5px; " type="submit">SAVE</button>
		</div>

	</div>
</form>		

</body>

</html>
