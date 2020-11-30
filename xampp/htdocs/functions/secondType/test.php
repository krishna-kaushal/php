<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="test.php" method = "post">
<input type="text" name="t1" placeholder="first number"><br><br>
<input type="text" name="t2" placeholder="second number"><br><br>
<input type="submit" name="btn1"><br><br>

</form>

<?php
if (isset($_POST['btn1'])) {
// $a = $_POST['t1'];
// $b = $_POST['t2'];
function sum($a, $b)
{
	$c = $a + $b;
	echo "Sum = " .$c;
}
sum ($a =  $_POST['t1'], $b = $_POST['t2']);


}
?>

</body>
</html>