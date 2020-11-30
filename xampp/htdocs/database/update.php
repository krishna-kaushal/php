<!DOCTYPE html>
<html>
<head>
	<title>Update Elements</title>
</head>
<body>
<center>
<form action="update.php" method="post">
	<input type="text" name="t1" placeholder="roll no."><br><br>
	<input type="text" name="t2" placeholder="Name"><br><br>
	<input type="text" name="t3" placeholder="Marks"><br><br>
	<input type="submit" name="btn1" value="update">
</form>

<?php
if (isset($_POST['btn1'])) {

mysql_connect("localhost", "root", "");
mysql_select_db("hkc");
$roll = $_POST['t1'];
$name = $_POST['t2'];
$marks = $_POST['t3'];

$q = "update student set name='$name', marks='$marks' where roll = '$roll'";
mysql_query($q);
echo "Records Updated";
}
?>

</center>
</body>
</body>
</html>