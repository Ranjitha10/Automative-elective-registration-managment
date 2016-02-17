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


$did=$_POST['del'];

echo $del;
$sql = 'DELETE FROM elective WHERE elective_id='."'".$did."'";
if ($conn->query($sql) == TRUE) {
    		 echo "<B>DELETED</b>";
	
		 echo '<a href="http://localhost/gem/3/admin/dept.php"><br>DONE</a>';	
	    } else {
		

   				 echo "<B>FAIL<B>";
				 echo '<a href="http://localhost/gem/3/admin/dept.php"><br>GO BACK</a>';
   

}
$conn->close();
?>
