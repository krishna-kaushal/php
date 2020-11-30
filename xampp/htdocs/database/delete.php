<!DOCTYPE html>
<html>
<head>
	<title>Delete an Element</title>
</head>
<body>
<center>
<form action="delete.php" method="post">
	<input type="text" name="t1" placeholder="Enter Roll No.">
	<input type="submit" name="btn">
</form>

<?php
if (isset($_POST['btn'])) {
	mysql_connect("localhost", "root", "");
	mysql_select_db("hkc");
	$roll = $_POST['t1'];
	$q = "delete from student where roll = '$roll'";
	mysql_query($q);
	echo "Record Deleted";
}
?>

</center>
</body>
</html>