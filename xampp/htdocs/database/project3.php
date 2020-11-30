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
.input{
	padding: 5px 50px;
	border-radius: 5px;
	background:  transparent;
	border: 0.5px solid #00d7c3;
	color: #00d7c3;
	text-align: center;
}

.input:focus{
	box-shadow: 0px 2px 10px 4px #00d7c3, 0 0 5px 0 #00d7c3 inset;

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

label{
	padding: 0 20px;
}

::placeholder{
	color: #00d7c3;
	font-size: 14px;
}
</style>


</head>
<body>
<div>
	<h1>Project 3</h1>
<a class="rows" name="rows" href="project2.php?b=total">Total Rows</a>
</div>

<!-- -------------------Dropdown-------------------- -->

<div class="container">
  <h2>Search By Marks</h2><br>
  <!-- <p>The form below contains three inline radio buttons:</p> -->
  <form action="project3.php" method="post">
<input type="text" class="input" name="studentMarks" placeholder="Enter Marks..." autocomplete="off"><br>

<br><br>
<select name="upto">
	
    <option name="num" value="greater">greater</option>
    <option name="num" value="lower">lower</option>
    <option name="num" value="equal">equal</option>
    <option name="num" value="not equal">not equal</option>
</select>
    <br><br><input type="submit" value="Submit" name="btn" class="button button-1">
<br><br>
   </form>
</div>

<!-- -------x------------Dropdown----------x--------- -->


<?php
if (isset($_POST['btn'])) {
	
mysql_connect("localhost","root", "") or die("Server Not Found");
mysql_select_db("hkc") or die("Database Not Found");
$student_marks = $_POST['studentMarks'];
$upto = $_POST['upto'];
switch ($upto) {
	case 'greater':
		$q = "select * from student where marks>'$student_marks'";
		break;
	case 'lower':
		$q = "select * from student where marks<'$student_marks'";
		break;
	case 'equal':
		$q = "select * from student where marks='$student_marks'";
		break;
	case 'not equal':
		$q = "select * from student where marks!='$student_marks'";
		break;
		}
?>

<center>
	<div>
		<table>
			<tr>
				<th>Name</th>
				<th>Roll No.</th>
				<th>Marks</th>
			</tr>
<?php
			$rs = mysql_query($q) or die("Query Not Found");
			while ($r=mysql_fetch_assoc($rs)){
?>
			<tr><td><?php echo $r['name'];?></td><td><?php echo $r['roll'];?></td><td><?php echo $r['marks'] ?></td></tr>
		
		<?php
		// $student_marks++;
		}
		?>
		</table>
	</div>
</center>
<?php
}
?>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>