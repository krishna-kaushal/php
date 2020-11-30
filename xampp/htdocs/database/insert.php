<!DOCTYPE html>
<html>
<head>
	<title>Insert Data into Table</title>
</head>

<style type="text/css">
	form{
		text-align: center;
		margin-top: 200px;
		border: 0.5px solid #E3E3E3;
		margin-left: 40%;
		margin-right:40%;
		padding: 70px 0;
		border-radius: 8px;

	}
	.input{
		text-align: center;
		margin: 4px;
		padding: 10px 35px;
		border-radius: 4px;
		border: .1px solid #E3E3E3;
		box-shadow: -2px -2px -2px white;
		box-shadow: 1px 1px 2px #666;

	}

	.btn{
		cursor: pointer;
		margin-top: 20px;
		border-radius: 4px;
		border: none;
		background-color: #059914;
		color:white;
		padding: 10px 40px;
	}
</style>

<body>

	<form action="insert.php" method="post">
		<input class="input" placeholder="Enter Name" type="text" name="name"><br>
		<input class="input" type="text" placeholder="Enter Roll No." name="roll"><br>
		<input class="input" type="text" placeholder="Enter Marks" name="marks"><br>
		<input class="btn" type="submit" name="btn">
	</form>


<?php
if (isset($_POST['btn'])) {
mysql_connect("localhost", "root", "") or die("Server Not Found");
mysql_select_db("hkc") or die("Database NOT Found");
$q = "select * from student";
$result = mysql_query($q) or die("Query Not Found");
?>

<center>
<?php
$name = $_POST['name'];
$roll = $_POST['roll'];
$marks = $_POST['marks'];	

mysql_connect("localhost", "root", "") or die("Server Not Found");
mysql_select_db("hkc") or die("Database Not Found");

$q = "insert into student(name, roll, marks) values('$name', '$roll', '$marks')";
mysql_query($q) or die("Query Not Found");
echo "Record is Inserted";

}
?>
</center>
</body>
</html>