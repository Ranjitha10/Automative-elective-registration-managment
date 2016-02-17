
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

$sname=array("");

$c=0;
$sql = "SELECT staff_name,staff_id FROM staff";
$result = $conn->query($sql);
if ($result->num_rows > 0)
{
    // output data of each row
    while($row = $result->fetch_assoc()) 
    {
  
       $sname[$c]=$row["staff_id"];
       echo $sname[$c];
       echo '<br>'; 
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

<body>
<form method="post" action="ancedb.php">
  <div class="body"></div>
		<div class="grad"></div>
		<div class="login">
		
				<B style="font-size:20px;">Staff ID&nbsp;&nbsp;&nbsp;</B> 
 <?php
				    echo '<input type="text"  name="Name"  value="'.$name.'"  ';  ?>
				<br><br>
			//////////////////////////////////////////////////////////
			
			
			
			
<?php

$c=1;


		foreach ($sname as $value ) 
		{
			
 		   echo "<tr>
			<td ><input style='color:black' name='".$c."'  type='text' value='".$eid[$c-1]."'readonly required/></td>
			<td ><input style='color:black' name='".$de."'  type='text' value='".$value."'readonly required/></td>
			<td >";

		   echo "<select  style='width:200px;' name='".$d."'>
		   <option selected disabled hidden value=''></option>";
			
//
			foreach ($sname as $val ) 		
				echo "<option onselected='this.form.submit();' value='".$val."'>".$val."</option>";
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
			
			
			
			
			
			
			
			
			
			
			
			
			
			///////////////////////////////////////////////////////	
				
 <button style="background:#0F3D4C;color:white;border-radius:5px;position:relative;top:20px;left:80px; " type="submit">SAVE</button>
		

	</div>
</form>		

</body>

</html>
