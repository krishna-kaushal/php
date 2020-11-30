<?php
ob_start();
?>
<html>
<head>
<title>
Login Here
</title>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
<style>

body{
	background-color: #393939;
	font-family: 'Roboto', sans-serif;

}

.center{
	position:absolute;
	display:inline-block;
	left:0%;
	right:0%;
	top:10px;
	text-align: center;;
	

}

.p1{
	position:absolute;
	text-align:center;
	left: 0px;
	right: 0px;
}

.p2{
	position:absolute;
	text-align:center;
	left: 0px;
	right: 0px;
	color: red;
	font-weight:bold;
}

hr{
	width:20%;
}
.container{
	position:absolute;
	display: inline-block;
	padding: 120px;
	top:20%;
	left:35%;
	background-color: white;
	box-shadow:6px 6px 15px #000000;
	border-radius: 10px;
}

.btn{
	margin-top:110%;
	box-shadow: 2px 2px 8px #5F655E;
	padding:5px 50px 5px 50px;
	background-color: #1DAD00;
	color: white;
	border: none;
	border-radius: 5px;
}

.down{
	margin-top: 23%;
}
</style>

</head>
<body>
<form class="container" action="login.php" method="post">

<div class="center">
<h2>Login Here</h2>
<hr>
<div class="down">
Email:-&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" name="t1" class="toleft">
<br><br>
Password:- &nbsp <input type="password" name="t2" class="toleft">
</div>
</div>
<center>
<input type="submit" value="Login" name="btn1" class="btn">
</center>
</body>
</html>

<?php
if(isset($_POST['btn1'])){
$a = $_POST['t1'];
$b = $_POST['t2'];

if($a == "admin@gmail.com" && $b == "12345"){
	header("refresh:3; URL='index.php'");
	echo "<p class='p1'>Your Page Will be Redirected in 3 Seconds..</p>";
}
else{
	header("refresh:3; URL='login.php'");
	echo "<p class='p2'>Email Or Password is invalid!! Try Again..</p>";
}}
?>