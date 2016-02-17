
<?php
$i=1; 

session_start();
$a=$_SESSION["count"];
$tc=$_POST['tc'];
$date=$_POST['dat'];
$ele=$_SESSION["ele"];

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "elect_auto";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
$t=0;
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

				$t=1;
			}
			else
			{
				
				$t=0;
				break;
   				
			}
		}
			if($t==1)
			{
				 echo "<B>success<B>";
				 echo '<a href="http://localhost/gem/3/staff/index.php"><br>DONE</a>';	
			}
			if($t==0)
			{

   				 echo "<B>DUPLICATE ENTRY<B>";
				 echo '<a href="http://localhost/gem/3/staff/index.php"><br>GO BACK</a>';
			}
		

$conn->close();
?>
