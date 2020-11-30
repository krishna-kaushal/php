<html>
<head>
<title>
Select Number
</title>

<style>
.toCenter{
	display: inline-block;
  	position: absolute;
  	top: 8%;
	left: 45%;

}
.header{
	border:2px solid red;
	position:absolute;
	height: 200px;
	width: 50%;
	top:40%;
	left:25%;
	text-align:center;
	color: white;
	padding-top: 100px;
}

</style>

</head>
<body>
<form class="toCenter" action = "color.php" method = "post">
<label for="color">Select a Color</label>
<select name="color">
	<option value="none">None</option>
	<option value="red">Red</option>
	<option value="yellow">Yellow</option>
	<option value="green">Green</option>
</select>
<br><br>
<center>
<input type="submit" value="Submit" name="b1">
</center>
</form>


</body>
</html>


<?php
if(isset($_POST['b1'])){
$a = $_POST['color'];



switch($a){
	case "red":
	echo "<div class='header' style='background-color:red;'><h2>H.K. Computers</h2></div> ";
	break;

	case "green":
	echo "<div class='header' style='background-color:green;'><h2>H.K. Computers</h2></div> ";
	break;

	case "yellow":
	echo " <div class='header' style='background-color:yellow;'><h2>H.K. Computers</h2></div>";
	break;

	default:
	echo "<div class='header' style='background-color:white;'></div>";
	break;
}
}
?>