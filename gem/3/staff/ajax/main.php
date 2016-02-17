<style>
	#en
	{
		display:block;
	
	}
</style>
<?php
	
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "root";
    $dbname = "elect_auto";
    mysql_connect($dbhost, $dbuser, $dbpass);
   
   //Select Database
	mysql_select_db($dbname) or die(mysql_error());
	$dept=$_POST ['dept'];
	$sem=$_POST ['sem'];
	$gorl=$_POST ['gorl'];

	//echo $dept.$sem.$gorl;
	$query = "SELECT elective_name,department_Id,semester,type 
		  FROM elective ";
	$qry_result = mysql_query($query) or die(mysql_error());
	echo "<B>List of Electives</B><br>";
	$i=0;
	while($row = mysql_fetch_array($qry_result))
	{
		
		if($row['department_Id']==$dept && $row['semester']==$sem && $row['type']==$gorl)
		{
			$i=$i+1;
		echo '<div id="en">'.$i.') '.$row["elective_name"].'</div>';
			
		}
	}
?>