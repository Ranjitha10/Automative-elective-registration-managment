
<?php
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

$name=array("");
$c=0;
$sql = "SELECT department_id FROM department";
$result = $conn->query($sql);
if ($result->num_rows > 0)
{
    // output data of each row
    while($row = $result->fetch_assoc()) 
    {
       $name[$c]=$row["department_id"]; 
	    
	  $c=$c+1;
    }
} 
else {
    echo "0 results";
}

$conn->close();
?>










<!--

-->
<!DOCTYPE html>
<html>
<head>
<title>Register</title>
<link href="css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Flat UI Web Form Widget and Kit,Login Forms,Sign up Forms,Registration Forms,News latter Forms,Elements"./>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</script>
<script type="text/javascript">

function validate(form) {
  var e = form.elements;

  /* Your validation code. */

  if(e['password'].value != e['c_password'].value) {
    alert('Your passwords do not match. Please type more carefully.');
    return false;
  }
 // return true;

  
 }


function textonly(e){
var code;
if (!e) var e = window.event;
if (e.keyCode) code = e.keyCode;
else if (e.which) code = e.which;
var character = String.fromCharCode(code);
//alert('Character was ' + character);
    //alert(code);
    //if (code == 8) return true;
    var AllowRegex  = /^[A-Za-z/s]+$/;
	//alert("cannot enter numbers");
    if (AllowRegex.test(character)) return true;     
    else
	{alert("cannot enter numbers");
	return false; }
}
function numonly(e){
var code;
if (!e) var e = window.event;
if (e.keyCode) code = e.keyCode;
else if (e.which) code = e.which;
var character = String.fromCharCode(code);
//alert('Character was ' + character);
    //alert(code);
    //if (code == 8) return true;
    var AllowRegex  = /^[0-9/s]+$/;
	//alert("cannot enter numbers");
    if (AllowRegex.test(character)) return true;     
    else
	{alert("cannot enter alphabets");
	return false; }

}

function semnumonly(e){
var code;
if (!e) var e = window.event;
if (e.keyCode) code = e.keyCode;
else if (e.which) code = e.which;
var character = String.fromCharCode(code);
//alert('Character was ' + character);
    //alert(code);
    //if (code == 8) return true;
    var AllowRegex  = /^[0-9/s]+$/;
	//alert("cannot enter numbers");
    if (AllowRegex.test(character)) return true;     
    else
	{alert("cannot enter alphabets");
	return false; }

}
</script>
<!--webfonts-->
		<link href='http://fonts.googleapis.com/css?family=Cabin:400,500,600,700,400italic,500italic,600italic,700italic' rel='stylesheet' type='text/css'>
<!--//webfonts-->
</head>
<body>

  
<div class="register-switch" style="width:403px;height:32px;position:absolute;top:129px;left:260px;background:#702c91" >
     
	  <input type="radio" onClick="parent.location='/RV/lr/register.php'" name="sex" value="F" id="A" class="register-switch-input" checked>
	  <label for="A" class="register-switch-label">STUDENT</label>
      
	  <input type="radio" onClick="parent.location='/RV/lr/staffregister.php'" name="sex" value="M" id="B" class="register-switch-input">
      <label for="B" class="register-switch-label">STAFF</label>
</div>
 
<!--/start-login-two-->
	<div class="login-02">
		<div class="two-login  hvr-float-shadow">
			<div class="two-login-head">
					<img src="images/top-note.png" alt=""/>
					<h2>register</h2>
					<lable></lable>
			</div>
			<form method="post" action="studentregisterdb.php" onsubmit="return validate(this);" >
				<li>
					<input name="student_USN" required type="text" class="text"  placeholder="Student USN" maxlength="10" ><a href="#" class=" icon2 user2"></a>
				</li>
				<li>
					<input name="First_name" required type="text" onkeypress="return textonly(event);" class="text"  placeholder="First Name" ><a href="#" class=" icon2 user2"></a>
				</li>
				
					<input name="year" required type="text" onkeypress="return semnumonly(event);" class="text" placeholder="year"  ><a href="#" class=" icon2 mail"></a>
				</li>
				<li>
				
					<input name="semester" required type="text" onkeypress="return semnumonly(event);" class="text" placeholder="semester"  ><a href="#" class=" icon2 mail"></a>
				</li>
				



<li>
<?php

		   echo "<select style='width: 60%;
	padding: 0.8em 4em 0.8em 1.7em;
	color: #858282;
	font-size: 17px;
	outline: none;
	background: none;
	font-weight: 500;
	border: none;' name='department'>
		   <option selected disabled hidden value=''></option>";
			
//
			foreach ($name as $val ) 		
				echo "<option onselected='this.form.submit();' value='".$val."'>".$val."</option>";
//ss
		   echo" </select>";

?>
<a href="#" class=" icon2 mail"></a>
</li>




				
				<li>
					<input style="width: 200px;
	padding: 0.8em 4em 0.8em 1.7em;
	color: #858282;
	font-size: 17px;
	outline: none;
	background: none;
	font-weight: 500;
	border: none;" name="email" required type="email" class="text" placeholder="E-mail" ><a href="#" class=" icon2 mail"></a>
				</li>
				
				<div class="p-container">
					<label class="checkbox two"><input type="checkbox" name="checkbox" checked><i></i>I agree to the <a href="#">Terms of Service</a></label>
				</div>
				<div class="submit two">
						<input type="submit" onclick="myFunction()" value="SIGN UP" >
				</div>
					<h5>Already a member ?<a href="studentlogin.php"> Login Here</a></h5>
			</form>
		</div>
	</div>
		

	
	<!--//end-copyright-->
</body>
</html>
