
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

    $path = "";
  move_uploaded_file($_FILES["file_link"]["tmp_name"], $path.$_FILES['file_link']['name'] );
//  echo $path.$_FILES['file_link']['name'];

$f=$path.$_FILES['file_link']['name'];

//echo "ff". $f;
$s=$_POST['s'];
$ei= $_POST['ei'];
$en= $_POST['en'];
$d=$_POST['d'];
$c=$_POST['c'];

$sql = "INSERT INTO elective(department_id,elective_id,elective_name,credit,semester,filename )
VALUES ('$d','$ei','$en','$c','$s','$f')";
if ($conn->query($sql) === TRUE) {
    				 echo "<B>success<B>";
				 echo '<a href="http://localhost/RV/lr/3/admin.php"><br>DONE</a>';	
} else {
    
   				 echo "<B>FAIL<B>";
				 echo '<a href="http://localhost/RV/lr/3/admin/elective.php"><br>GO BACK</a>';
}
$conn->close();
?>
