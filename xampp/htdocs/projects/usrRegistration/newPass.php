<?php
ob_start();
?>
<html>
<head>
<title>
Reset Password
</title>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
<style>

body{
	background-image: url("bgimg2.jpg");
	font-family: 'Roboto', sans-serif;
}

h2{
	position: absolute;
	margin-top: 1%;
	padding-bottom: 10px;
	text-align: center;
	left: 0;
	right: 0;
	border-bottom: 1px solid yellow;
	right: 0;
	color: #0CFFFB;
	font-size: 30px;
	font-weight: bold;
	text-shadow: 2px 2px 4px #000000;
	letter-spacing: 5px;

	
}



.form{
	background-color: #2E3338;
    position: absolute;
    /* border: 2px solid red; */
    display: inline-block;
    padding-top: 75px; 
    padding-bottom: 75px; 
    left: 36%;
    right: 36%;
    margin-top: 170px;
    /*border: 2px solid red;*/
    border-radius: 5px;
    /*background-color: #f2f2f2;*/
    box-shadow: 0 1px 15px 2px #0CFFFB;
    /*box-shadow: 0 2px 10px 1px #0CFFFB;*/
    border: none;
}

.form:hover{
	box-shadow: 0 1px 20px 7px #0CFFFB;
}

input{
	text-align: center;
}

.container{
	border-top:1px solid yellow;
	margin-top: 14px;
}

.input1{		
	padding: 15px 30px 15px 30px;
	border-radius: 5px;
	width: 55%;
	border: 1px solid #0CFFFB;
	background-color: white;
    box-shadow: 0 1px 10px 1px #000000 inset;
}
/*
.input1:focus{
	background-color: grey;
	color: white;
}*/

/*.input2{		
	padding: 15px 30px 15px 30px;
	border-radius: 5px;
	width: 55%;
	border: none;
}*/

.btnSum{
	/*margin-top: 5px;*/
	border: none;
	color: white;
	font-size: 15px;
	background-color: #0CFFFB;
	padding: 15px 30px 15px 30px;
	width: 55%;
	text-shadow: 2px 2px 4px #000000; 
	border-radius: 5px;
	font-weight: bold;
    box-shadow: 0 2px 10px 1px black ;


}

.btnSum:hover{
	background-color: #0AD2D5;
	cursor: pointer;
}

.reset{
	/*position: absolute;*/
	margin-top: 40px;
	display: inline-block;
	font-size: 11px;
	/*font-weight: bold;*/
	text-decoration: none;
	color: white

}

.reset:hover{
	color:red;
}

.pElse {
	position: absolute;
	display: inline-block;
	left: 12%;
	right: 12%;
	text-align: center;
	/*top: 87%;*/
	/*margin-top: 10px;*/
	font-size: 14px;
	/*font-weight: bold;*/
	color: red;
	text-shadow: 4px 4px 10px black;
}

.pElse2 {
	position: absolute;
	display: inline-block;
	left: 12%;
	right: 12%;
	text-align: center;
	/*top: 87%;*/
	margin-top: 25px;
	font-size: 14px;
	/*font-weight: bold;*/
	color: red;
	text-shadow: 4px 4px 10px black;
}

.resetSuccess {
	position: absolute;
	display: inline-block;
	left: 12%;
	right: 12%;
	text-align: center;
	/*top: 100%;*/
	font-size: 14px;
	font-weight: bold;
	color: white;
	margin-top: 25px;


}

</style>

</head>
<body>
<div class="header">

<div class="container" id="container">

    <center>
    	<h2>RESET PASSWORD</h2>
    <form action="newPass.php" method="post" class="form">
<div class="down">
<input type="Password" name="pass1" class="input1" placeholder="New Password">
<br><br>
<input type="password" name="pass2" class="input1" placeholder="Confirm Password" required>
<br><br>
<p class="pElse">Enter a Combination of at least six numbers, letters and punctuation marks (such as ! and &).</p>
<br><br>
</div>
<br><br>
<input type="submit" value="Reset" class="btnSum"  name="btn2"><br>

<?php

if(isset($_POST['btn2']))
{
	session_start();
	$pass1 = $_POST['pass1'];
	$pass2 = $_POST['pass2'];

if ($pass1 == $pass2){
	echo "<p class='resetSuccess'>Password Reset Successfully</p>";
	$_SESSION['t3'] = $pass1;
	header("refresh: 1; URL= 'login.php'");
}
else{
	echo "<p class='pElse2'>Password not Matched</p>";
	header("refresh: 1; URL='newPass.php'");
}

}
?>
    </form>
    </center>

</div>

</body>
</html>
