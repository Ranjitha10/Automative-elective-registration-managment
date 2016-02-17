
<?php
$i=1; 
echo "hello";
session_start();
$a=$_SESSION["count"];
$tc=$_POST['tc'];
$date=$_POST['dat'];
$ele=$_SESSION["ele"];

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
		for($i=1;$i<$a;$i++)	 
		{
			$j=$i+300;
			$usn=$_POST[$j];
			$b=$_POST[$i];
			$sql = "INSERT INTO attendance (student_usn,elective_id,date,Total_class,class_attended)
			VALUES ('$usn','$ele','$date','$tc','$b')";
			if ($conn->query($sql) === TRUE) 
			{
   				 echo "s";
			}
			else
			{
   				echo "Error: " . $sql . "<br>" . $conn->error;
			}
		}

$conn->close();
?>
