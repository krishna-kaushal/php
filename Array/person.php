<!DOCTYPE html>
<html>
<head>
	<title>Check person name</title>
</head>
<body>
	<form action="person.php" method="post">
		<input type="text" name="person">
		<input type="submit" name="btn">
	</form>
</body>
</html>

<?php
if (isset($_POST['btn'])) {
$person = $_POST['person'];
$num = 0;
$a = array("krishna", "shivam", "nikhil", "gautam", "zeenu");

for ($i=0; $i <= 4; $i++) { 
	if ($person == $a[$i]) {
		$num = $num + 1;
	}

}
	if ($num >= 1) {
		echo "Yes, This Persson is Available";
	}
	else{
		echo "This Person is Not Available";
	}
}
?>