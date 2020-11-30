<!DOCTYPE html>
<html>
<head>
	<title>Plaindrome or not</title>
</head>
<body>
<form action="palindrome.php" method="post">
	<input type="text" name="t1"><br><br>
	<input type="submit" value="check" name="btn1"><br><br>

</form>

<?php
function palindrome($a){
	$a = $_POST['t1'];
	$b = $a;
        if (strcmp(strrev($b), $a) == 0) {
        	$c = "Plaindrome";
        }
        else{
        	$c = "Not palindrome";
        }
	return $c;
}

if (isset($_POST['btn1'])) {
// prime ($a =  $_POST['t1']);
$x = palindrome ($a);
echo $x;
}

?>


</body>
</html>