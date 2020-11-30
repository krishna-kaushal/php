<?php
mysql_connect("localhost", "root", "") or die("Server Not Found");
mysql_select_db("hkc") or die("Database Not Found");
$q = "select * from student";
$rs = mysql_query($q) or die("Query Not Found");


?>
<!DOCTYPE html>
<html>
<head>
	<title>Find User Details by Number</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<style type="text/css">
@import: url(https://fonts.googleapis.com/css?family=Roboto+Condensed);
	
body{
	font-family: 'Roboto Condensed', sans-serif;
  height: 100%;
  background-color: black;
  color: #fff;
  text-transform: uppercase;
	/*color: white;*/
	margin-top: 50px;
	/*height: 800px;*/
	overflow-y: hidden;
	text-align: center;
/*background-image: linear-gradient(to right, #6a11cb 0%, #2575fc 100%);*/
}

.rows{
	border: 3px solid #00d7c3;
	padding: 10px 40px;
	border-radius: 50px;
	position: absolute;
	right: 3%;
	top: 2%;
	font-weight: 600;
	color: #00d7c3;
	-webkit-transition: all .15s ease-in-out;
  transition: all .15s ease-in-out;

}

.rows:hover{
  box-shadow: 0 0 10px 0 #00d7c3 inset, 0 0 20px 2px #00d7c3;
  border: 3px solid #00d7c3;
  color: #00d7c3;
	font-weight: 600;
  text-decoration: none;
}

h1{
	position: absolute;
	left:3%;
	top:2%;
	color: #00d7c3;
}

table, th, td {
  border: 1px solid white;
  border-collapse: collapse;
  padding: 10px 35px;
  margin-top: 100px;
  text-align: center;

}

/*table{
}
*/
select{
	padding: 5px 50px;
	border-radius: 5px;
	background:  transparent;
	border: 0.5px solid #00d7c3;
	box-shadow: 0px 2px 10px 2px #66ccff;
	color: white;
}

option{
	background-color: black;
	/*color: black;*/
}

option:hover{
	background-color: #FF6600;
}

.button {
  width: 170px;
  padding-top: 10px;
  padding-bottom: 10px;
  text-align: center;
  color: #000;
  text-transform: uppercase;
  font-weight: 600;
  margin-top: 30px;
  margin-bottom: 30px;
  cursor: pointer;
  display: inline-block;
}

.button-1 {
  background-color: transparent;
  border: 3px solid #00d7c3;
  border-radius: 50px;
  -webkit-transition: all .15s ease-in-out;
  transition: all .15s ease-in-out;
  color: #00d7c3;
}
.button-1:hover {
  box-shadow: 0 0 10px 0 #00d7c3 inset, 0 0 20px 2px #00d7c3;
  border: 3px solid #00d7c3;
}

.total{
	margin-top: 80px;
}
</style>


</head>
<body>
<div>
	<h1>Project 1</h1>
<a class="rows" name="roll" href="findByNum.php?a=1">Total Rows</a>


</div>



<!-- -------------- Button -------------- -->
<form action="findByNum.php" method="post">


<!--  -->
  </div>
</div>
	<label for="roll">Choose a Number</label><br>
  <select name="roll">
<?php
while ($r = mysql_fetch_assoc($rs)) {
	?>
    <option name="num" value="<?php echo $r['roll'];?>"><?php echo $r['roll'];?></option>

<?php
}
?>
  </select>
  </div>
</div>

<!-- x -->
<br><br><input type="submit" value="Submit" name="btn" class="button button-1">
</form>
<!-- x------------- Button -------------x -->
<?php
if (isset($_GET['a'])) {
$q = "select * from student";
$rs = mysql_query($q) or die("Query Not Found");
$totalRows = $_GET['a'];
$i = 0;
if ($totalRows == 1) {
	while ($r = mysql_fetch_assoc($rs)) {
		$i++;
	}
}
}
?>	

<?php
if (isset($_POST['btn'])) {

$a = $_POST['roll'];
$q = "select * from student where roll=$a";
$rs = mysql_query($q) or die("Query Not Found");
?>
<!-- ---------------Table------------------ -->

<center>
	<div>
		<table>
			<tr>
				<th>Name</th>
				<th>Roll No.</th>
				<th>Marks</th>
			</tr>
		<?php

			while ($r = mysql_fetch_assoc($rs)) {
		?>
			<td><?php echo $r['name'];?></td><td><?php echo $r['roll'];?></td><td><?php echo $r['marks'] ?></td>
		
		<?php
		}
		}
		?>
		</table>
	</div>
</center>
<div class="total">
<?php
if (isset($_GET['a'])) {

echo " Total Number of Rows present in Database = ".$i;
}
?>
</div>

<!-- x---------------Table------------------x -->



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>