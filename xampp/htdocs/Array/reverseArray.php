<!DOCTYPE html>
<html>
<head>
	<title>reverse an array</title>
</head>
<body>
<form action="reverseArray.php" method="post">
	<input type="text" name="num">
	<input type="submit" name="btn">
</form>
</body>
</html>
<?php
if (isset($_POST['btn'])) {
// $num = $_POST['num'];
$num = array(12,34,55,33,22);
$j=4;
for($i=0;$i<$j/2;$i++)
{
	$t=$num[$j];
	$num[$j]=$num[$i];
	$num[$i]=$t;
	$j--;
}
echo "<br> after reverse<br>";
for($i=0;$i<=4;$i++)
	echo $num[$i]."<br>";

}
?>