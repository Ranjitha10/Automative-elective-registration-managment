<?php

    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "root";
    $dbname = "elect_auto";
    mysql_connect($dbhost, $dbuser, $dbpass);
   
   //Select Database
	mysql_select_db($dbname) or die(mysql_error());

	$query = "SELECT elective_name,department_Id,semester,type 
		  FROM elective ";
	$qry_result = mysql_query($query) or die(mysql_error());
	
	while($row = mysql_fetch_array($qry_result))
	{
			$a[]=$row['elective_name'];
	}
// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from "" 
if ($q !== "") {
   
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values 
echo $hint == "" ? "no suggestion" : $hint;
?>