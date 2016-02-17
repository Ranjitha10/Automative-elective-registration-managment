
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


$usn=array("");
$sql = "SELECT student_usn,elective_id FROM learn";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
    // output data of each row
$c=0;
    while($row = $result->fetch_assoc()) 
    {
	if($row["elective_id"]==$ele[1])	
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
  <script src="http://localhost/gem/js/j.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <meta charset="UTF-8">
  <title>GEM staff attendance</title>
  
 
 
</head>

<body>


<form method="post" action="feat/ance/ancedb.php">
 
				<B onclick="detail()" style="">Elective&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</B> 
				
				<select name="elec" id="elec" onchange=''>
					<?php
					foreach ($ele as $value) 
					{
					   echo '<option >'.$value.'</option>';
					}
					?>
				</select>
				
				<br><br>
				<B style="">Staff Name&nbsp;&nbsp;&nbsp;</B> 
 <?php
				    echo '<input type="text"  name="Name"  value="'.$name.'" readonly> ';  ?>

				<br><br>
				<B style="">Department&nbsp;&nbsp;</B> 
 <?php
				    echo '<input type="text"  name="Name"  value="'.$dept.'" readonly> ';  ?>

				<br><br>
				<B style="">Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</B> 

				 <input type="text"  name="dat"  placeholder="" > 
				<B style="">(YYYY/MM/DD)</B> 

				<br><br>		 		
				<B style="">Total class&nbsp;&nbsp;&nbsp;</B> 

				    <input type="text"  name="tc"  placeholder="" > 

				<br><br>	
 
		</div>
<br>
				<table>
					<thead >
						<tr>
							<th><B style="">STUDENT USN</B></th>
							<th><B style="">CLASS ATTENDED</B></th>

						</tr>
					</thead>

					<tbody>
<?php

$c=1;
$d=301;
asort($usn);
		foreach ($usn as $value) 
		{
			
 		   echo "<tr>
			<td ><input style='color:black' name='".$d."'  type='text' value='".$value."' required/></td>
			<td ><input name='".$c."'  style='color:black' type='text' placeholder='class attended' /></td>
			</tr>";
			
$c=$c+1;
$d=$d+1;
	
		}
$_SESSION["count"] = $c;
$_SESSION["ele"]=$ele;

?>


		

					</tbody>
				</table>
			

<button style="background:#0F3D4C;color:white;border-radius:5px;" type="submit">SAVE</button>
	
</form>		

</body>

</html>
