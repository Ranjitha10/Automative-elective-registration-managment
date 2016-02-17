<!DOCTYPE html>

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



$conn->close();
?>


<html>
<head>
		
		<!--webfonts-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text.css'/>
		<!--//webfonts-->

</head>
 
<body>
	
</body>
</html>
