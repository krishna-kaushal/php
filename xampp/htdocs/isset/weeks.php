<html>
<head>
<title>
Selct Number
</title>

<style>
.toCenter{
	display: inline-block;
  	position: absolute;
  	top: 12%;
}
</style>

</head>
<body>
<form class="toCenter" action = "weeks.php" method = "post">
<label for="number">Select a Number</label>
<select name="number">
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
</select>
<br><br>
<center>
<input type="submit" value="Submit" name="b1">
</center>
</form>
</body>
</html>
<center>
<?php
/// if(isset($_POST['b1'])){
$a = $_POST['number'];

switch($a){
	case 1:
	echo "<h2>Sunday</h2>";
	break;

	case 2:
	echo "<h2>Monday</h2>";
	break;

	case 3:
	echo "<h2>Tuesday</h2>";
	break;

	case 4:
	echo "<h2>Wednesday</h2>";
	break;

	case 5:
	echo "<h2>Thursday</h2>";
	break;

	case 6:
	echo "<h2>Friday</h2>";
	break;

	case 7:
	echo "<h2>Saturday</h2>";
	break;

	default:
	echo "<h2> Please Enter Number Between 1 to 7</h2>";
	break;
}
/// }
///	else{
///	echo "<p> Result Will Show Here";
///}

?>
</center>