<html>
<head>
<title>
radio button
</title>

<style>
.center{
	display:inline-block;
	position:absolute;
	left:40%;
	top:5%;

}
.header{
	border:2px solid white;
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

<body>
<form class="center" action="colorradio.php" method="post">
Select a Color:-
<input type="radio" value="red" name="color">Red
<input type="radio" value="yellow" name="color">Yellow
<input type="radio" value="green" name="color">Green
<br><br>
<center>
<input type="submit" value="Submit" name = "b1">
</center>
</form>

</body>
</html>

<?php
if(isset($_POST['b1'])){
$a = $_POST['color'];

switch($a){
	case "red":
	echo "<div class='header' style='background-color:red;'><h2>H.K. Computer</h2></div>";
	break;

	case "green":
	echo "<div class='header' style='background-color:green;'><h2>H.K. Computer</h2></div>";
	break;

	case "yellow":
	echo "<div class='header' style='background-color:yellow;'><h2>H.K. Computer</h2></div>";
	break;

	default:
	echo "<div class='header' style='background-color:black;'></div>";
	break;
}}
?>