

<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "elect_auto";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$flag=0;
$sql = "SELECT elective_name,elective_id,department_Id,semester,credit,filename FROM elective";
$result = $conn->query($sql);
if ($result->num_rows > 0)
{
    // output data of each row
	//echo $_POST['aa'].'hello';
    while($row = $result->fetch_assoc()) 
    {
        if($row["elective_name"]==$_POST ['ename'])
		{
			$flag=1;
			$eid=$row["elective_id"]; 
			$ename=$row["elective_name"]; 
			$dept=$row["department_Id"];
			$sem=$row["semester"];
			$credit=$row["credit"];
			$credit=$row["credit"];
			$file=$row["filename"];
		}
    }
} 
$conn->close();
if($flag)
{	
?>
<body id="top" style="background:#ffc50c"">
<!-- ####################################################################################################### -->

  <div id="container" > 
    <!-- ####################################################################################################### -->
    <div id="portfolio">
      <div class="fl_left" style="width:50%;"> 
        <!-- ########### -->
        <div id="tabs-1">
		<form role="form">
			<div class="form-group">
				<label>Elective Name:</label>
			<?php	echo '<input type="text" value="'.$ename.'" class="form-control" >';?>
			</div>
			<div class="form-group">
				<label>Elective Id:</label>
			<?php	echo '<input type="text" value="'.$eid.'" class="form-control" >';?>
			</div>
			<div class="form-group">
				<label>Elective Credits:</label>
			<?php	echo '<input type="text" value="'.$credit.'" class="form-control" >';?>
	
			</div>
			<div class="form-group">
				<label>Department:</label>
			<?php	echo '<input type="text" value="'.$dept.'" class="form-control" >';?>
	
			</div>
			<div class="form-group">
				<label>Semester</label>
			<?php	echo '<input type="text" value="'.$sem.'" class="form-control" >';?>
	
			</div>
			
			<div class="form-group">
				<label>Syllabus</label>
			     <?php	echo  '<a href="http://localhost/RV/lr/3/admin/'.$file.'" class="form-control" ><B>View<B></a> ';?>
			</div>
        </form>
        </div><br>
        
        <div id="tabs-2">
           <b style="font-size:20px;">VIDEO</b>
           <div class="media">
				<video controls style="width:300px;height:360px;" poster="poster.png">
					<source src="devstories.webm" 
						type='video/webm;codecs="vp8, vorbis"' />
					<source src="devstories.mp4" 
						type='video/mp4;codecs="avc1.42E01E, mp4a.40.2"' />
				</video>
		  </div>
          
        </div>
 <?php
}
else
		echo "Not found";
?>	
  
</body>
</html>












