<?php
$x = $_POST['number'];
switch($x){
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
?>