<?php
ob_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
<style type="text/css">
	.form{
		position: absolute;
		left: 0;
		right: 0;
		margin-left: auto;
		margin-right: auto;
		text-align: center;
		background-image: url('');
	}
</style>
</head>
<body>

<div class="container">
	<a href="index.php?a=1">Press 1 for Addition</a><br>
	<a href="index.php?a=2">Press 2 for Substraction</a><br>
	<a href="index.php?a=3">Press 3 for Multiply</a><br>
	<a href="index.php?a=4">Press 4 for Divide</a><br>
	<a href="index.php?a=5">Press 5 for Exit</a><br>
</div>

<?php
$a = $_GET['a'];
$t1 = $_POST['t1'];
$t2 = $_POST['t2'];
$answer = $_POST['answer'];

if ($a == 1) {
echo "<form action='index.php?a=1' method = 'post' class='form'>";
echo "<input class='input1' type='text' name='t1' placeholder='First Number'><br><br>";
echo "<input class='input1' type='text' name='t2' placeholder='Second Number'><br><br>";
echo "<input type='submit' value='Submit'  name='btn1'><br>";

$answer = $t1 + $t2;
echo "<p>=</p><input type = 'text' class='result' value = '$answer' readonly>";
echo "</form>";

}

if ($a == 2) {
echo "<form action='index.php?a=2' method = 'post' class='form'>";
echo "<input class='input1' type='text' name='t1' placeholder='First Number'><br><br>";
echo "<input class='input1' type='text' name='t2' placeholder='Second Number'><br><br>";
echo "<input type='submit' value='Submit'  name='btn1'><br>";

$answer = $t1 - $t2;
echo "<p>=</p><input type = 'text' class='result' value = '$answer' readonly>";
echo "</form>";

}

if ($a == 3) {
echo "<form action='index.php?a=3' method = 'post' class='form'>";
echo "<input class='input1' type='text' name='t1' placeholder='First Number'><br><br>";
echo "<input class='input1' type='text' name='t2' placeholder='Second Number'><br><br>";
echo "<input type='submit' value='Submit'  name='btn1'><br>";

$answer = $t1 * $t2;
echo "<p>=</p><input type = 'text' class='result' value = '$answer' readonly>";
echo "</form>";

}

if ($a == 4) {
echo "<form action='index.php?a=4' method = 'post' class='form'>";
echo "<input class='input1' type='text' name='t1' placeholder='First Number'><br><br>";
echo "<input class='input1' type='text' name='t2' placeholder='Second Number'><br><br>";
echo "<input type='submit' value='Submit'  name='btn1'><br>";
	if (isset($_POST['btn1'])) {
		
$answer = $t1 / $t2;
echo "<p>=</p><input type = 'text' class='result' value = '$answer' readonly>";
echo "</form>";
}
}

if ($a == 5) {
header("location: index.php");
}
?>

</body>
</html>