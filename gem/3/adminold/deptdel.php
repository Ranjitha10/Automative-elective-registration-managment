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


echo "hello";
$did=$_POST['did'];

echo $did." ";
$sql = 'DELETE FROM department WHERE department_id='."'".$did."'";
if ($conn->query($sql) == TRUE) {
    echo "DELETED";
	//echo $sql;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
echo '<a href="http://localhost/gem/3/admin.php"><br>DONE</a>';	
$conn->close();
?>
