<?php
mysql_connect("localhost", "root", "") or die("Server Not Found");
mysql_select_db("hkc") or die("Database Not Found");

$q = "select * from student";
$rs = mysql_query($q) or die("Query Not Found");


?>

<style type="text/css">
	table, th, td {
  border: 1px solid black;
  bor
}
</style>

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
?>

</table>