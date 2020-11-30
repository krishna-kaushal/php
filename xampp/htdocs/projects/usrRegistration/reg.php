<?php
ob_start();
?>
<html>
<head>
<title>
Register
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
	margin-top: 5px;
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



</style>

</head>
<body>
<div class="header">

<div class="container">

    <center>
    	<h2>REGISTER HERE</h2>
    <form action="reg.php" method="post" class="form">
       <input type="text" name="t1" class="input1" placeholder="Name">
<br><br>
<input type="text" name="t2" class="input1" placeholder="Email" required>
<br><br>
<input type="password" name="t3" class="input1" placeholder="Password" required>
<br><br>
<input type="date" name="t4" class="input1" placeholder="DOB">
<br><br>
<input type="submit" value="Register" class="btnSum"  name="btn1"><br>
    <?php
if(isset($_POST['btn1'])){
	session_start();
$_SESSION['t1'] = $_POST['t1'];
$_SESSION['t2'] = $_POST['t2'];
$_SESSION['t3'] = $_POST['t3'];
$_SESSION['t4'] = $_POST['t4'];



header("refresh:1; URL='login.php'");
}
?>
    </form>
    </center>

</div>

</body>
</html>
