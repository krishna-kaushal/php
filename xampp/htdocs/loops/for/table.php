<?php
ob_start();
?>
<html>
<head>
<title>
Tables
</title>

<style>

.center{
	margin-top: 3%;
}


table, td {
	border: 1px solid black;
	padding: 4px 25px 4px 25px;
}

tr:hover {
	background-color: #F33A3A;
	cursor: pointer;
	color:white;
}


table {
	border-collapse: collapse;
}

.submit{
	cursor:pointer;
}
</style>

</head>
<body>
<center class="center">
<form action="table.php" method="post">
	<label for="num">Choose a Number:</label>
	<select name="num">
<?php

for ($i=1; $i<=100; $i++) { 
	echo "<option value='$i'>$i</option>";
}
?>
	</select>
	<br><br>
	<input type="submit" value="Submit" name="b1" class="submit">
</form>
</center>
<center>
<table>
<?php
if(isset($_POST['b1'])){


$a = $_POST['num'];
	
	for($b = 1; $b<=10; $b++){
		if($b%2==0)
		echo "<tr bgcolor=yellow><td>".$a."</td><td> * </td><td>".$b."</td><td> = </td><td>".$a*$b."</td><br></tr>"; 
		else
		echo "<tr bgcolor=gray><td>".$a."</td><td> * </td><td>".$b."</td><td> = </td><td>".$a*$b."</td><br></tr>"; 
		
	}


}
?>
</table>
</center>