<!-- Recursive Function -->

<!DOCTYPE html>
<html>
<head>
	<title>table</title>
</head>
<body>
	<form action="table.php" method="post">
		<input type="text" name="num" placeholder="enter number">
		<input type="submit" name="btn">
	</form>
</body>
</html>

<?php
if (isset($_POST['btn'])) {
	
$n = $_POST['num'];
 
function table($n,$a){
	$a=$a+1;
	if($a<=10){
		echo "<br>".$a*$n;
		
		table($n,$a);
	}
	
}
 
table($_POST['num'],0);
// echo $x;

}
?>