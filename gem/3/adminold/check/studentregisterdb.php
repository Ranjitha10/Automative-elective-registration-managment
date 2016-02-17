
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


$usn= $_POST ['student_USN'];
$fn= $_POST ['First_name'];
$sem=$_POST ['semester'];
$dpt=$_POST ['department'];
$email=$_POST ['email'];
$year=$_POST ['year'];


$sql = "INSERT INTO student_actual (student_usn, first_name, semester, department_id,email_id,year)
VALUES ('$usn','$fn','$sem','$dpt','$email','$year')";
if ($conn->query($sql) === TRUE) {
				 echo "<B>success<B>";
				 echo '<a href="http://localhost/RV/lr/3/admin.php"><br>DONE</a>';	


} else {
   
   				 echo "<B>FAIL<B>";
				 echo '<a href="http://localhost/RV/lr/3/admin/check/check.php"><br>GO BACK</a>';
}

$conn->close();
?>
