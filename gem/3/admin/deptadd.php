
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "elect_auto";

// Create connection  middle_name, last_name, semester, department_id, mobile_no,email_id, password
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



$di= $_POST['di'];
$dn= $_POST['dn'];

$sql = "INSERT INTO department(department_id, department_name)
VALUES ('$di','$dn')";
if ($conn->query($sql) === TRUE) {
   				 echo "<B>success<B>";
				 echo '<a href="http://localhost/RV/lr/3/admin.php"><br>DONE</a>';	
		} 
else {
   
   				 echo "<B>FAIL<B>";
				 echo '<a href="http://localhost/RV/lr/3/admin/dept.php"><br>GO BACK</a>';}
$conn->close();
?>
