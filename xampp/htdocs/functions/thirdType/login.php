<!DOCTYPE html>
<html>
<head>
	<title>Login Here</title>
</head>
<body>
<h1>Login Here</h1><br>
<form action="login.php" method="post">
<input type="text" name="email"><br><br>
<input type="password" name="password"><br><br>
<input type="submit" value="Login" name="login">
</form>

<?php
// $a = 'admin@gmail.com';
// $b = '12345';

function login(){
$email = $_POST['email'];
$password = $_POST['password'];
if ($email == 'admin@gmail.com' && $password == '12345')
$c = "Logged in Successfull";
else
$c="Login Failed";
return $c;
}

if(isset($_POST['login']))
{

	$x = login();
	echo $x;

}

?>

</body>
</html>