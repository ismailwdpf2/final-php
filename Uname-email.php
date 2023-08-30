<?php
if(isset($_POST['submit'])){
	$name = $_POST['uname'];
	$email = $_POST['uemail'];
	$namelength = strlen($name);
	if($namelength < 4 || $namelength >8){
		echo "Username not valid. enter between 4 to 8 char!<br>";
		}
	else echo "Username done.<br>";
	$ppattern = "/\S+@\S+\.\S+/";
	if(preg_match($ppattern , $email)){echo "valid email<br>";}
	else {echo "invalid email<br>";}
	
	}
	
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Unmae_email</title>
<style>
	input {
		background-color: beige;
		margin-top: 10px;
	}
</style>
</head>

<body>
<form method="post">
<input type="text" name="uname"placeholder="User Name: " required ><br>
<input type="text" name="uemail" placeholder="Email: " required ><br>
<input type="submit" name="submit">
</form>
</body>
</html>