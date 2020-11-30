<!DOCTYPE html>
<html>
<head>
	<title>Plaindrome or not</title>
</head>
<body>
<form action="factorial.php" method="post">
	<input type="text" name="t1"><br><br>
	<input type="submit" value="check" name="btn1"><br><br>

</form>

<?php
function factorial($a){
        $a = $_POST['t1'];
        $answer = 1;
        for ($i=1; $i <= $a; $i++) { 
        	$answer = $answer * $i; 
        }

        $c = "$answer";
        }

	return $c;
}

if (isset($_POST['btn1'])) {
// prime ($a =  $_POST['t1']);
$x = factorial ($a);
echo $x;
}

?>


</body>
</html>

