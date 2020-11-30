<?php
session_start();
if(isset($_SESSION['t1']))
{
?>
<html>
<head>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
<style>

body{
	background-color: #393939;
	font-family: 'Roboto', sans-serif;
}

.btn1{
	position: absolute;
	display: inline-block;
	left:5%;
	top: 5%;
	border: none;
	padding: 6px 25px 6px 25px;
	box-shadow:3px 3px 15px #000000;
	color: white;
	background-color:#1FD600;
	border-radius: 4px;
	cursor:pointer;
}

.btn2{
	position: absolute;
	display: inline-block;
	right:5%;
	top: 6%;
	box-shadow:3px 3px 15px #000000;
	border: none;
	border-radius: 4px;
	background-color:#FC1010;
	color: white;
	padding: 6px 40px 6px 40px;
	cursor:pointer;
}

.container{
	display: inline-block;
	position:  absolute;
	top: 43%;
	left: 0px;
	right: 0px;
	color: white;
	
}

</style>
</head>
<body>
<div>

<a href="index2.php"><input class="btn1" type="submit" value="Customer Panel"></a>
<a href="logout.php"><input class="btn2" type="submit" value="Logout"></a>

</div>

<div class="container">
<center>
<marquee scrollamount=15><h1>WELCOME TO YOUR ADMIN PANEL</h2></marquee>
</center>
</div>
</body>
</html>
<?php
}
else
{
header("location: login.php");
}
?>

