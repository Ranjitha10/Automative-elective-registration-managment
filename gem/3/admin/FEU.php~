<html>

<?php

$x= $_POST['Curr'];
$y=$_POST['a'];
$eachclass = array ("Classname" => "Math","Starttime" => "10am");

$eachcl = array ("Classname" => "Science","Starttime" => "11am"); // selected="selected"
echo "hello";
print $x."<br>";
echo "hi";

?>
<form action="<?php echo $php_self ?>" method="post">
	
<select name="Curr" >
<option value="<?php print $eachclass['Classname'] ?>" onselected="this.form.submit();" ><?php echo $eachclass['Classname'] ?>

<option value="<?php print $eachcl['Classname'] ?>" selected="selected" onselected="this.form.submit();" ><?php echo $eachcl['Classname'] ?>

</option>

</select>
<input type="submit" name="a" value="Done" style="width:100px;float:left;">
	
</form>

</html>

