

<form method="post" action="">
	<select name="cars" onchange='change(this);'>
		<option name ="car" value="volvo">Volvo</option>
		<option value="saab">Saab</option>
		<option value="fiat">Fiat</option>
		<option value="audi">Audi</option>
	</select>
</form>

<?php

		$a=$_POST["cars"];
		echo "hello";
		echo $a;
?>
