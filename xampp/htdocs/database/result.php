<!DOCTYPE html>
<html>
<head>
	<title>Result</title>
</head>
<body>
	<center>
	<form action="result.php" method="post">
		<input placeholder="Enter Number" type="text" name="roll"><br><br>
		<input type="submit" name="btn"><br><br>
	</form>
	</center>

<?php
if (isset($_POST['btn'])) {
$a = $_POST['roll'];
mysql_connect("localhost", "root", "") or die("Server Not Found");
mysql_select_db("hkc") or die("Database Not Found");
$q = "select * from student where roll=$a";
$rs = mysql_query($q) or die("Query Not Found");


?>

<style type="text/css">
	table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  padding: 10px 15px;
  text-align: center;
}
</style>


<center>
<table>
	<tr>
		<th>Name</th>
		<th>Roll No.</th>
		<th>Marks</th>
	</tr>
<?php
	while ($r = mysql_fetch_assoc($rs)) {
	?>
<tr>
	

		<td><?php echo $r['name'];?></td><td><?php echo $r['roll'];?></td><td><?php echo $r['marks'];?></td>

	</tr>
	<?php
}
}
?>

</table>
</center>

</body>
</html>