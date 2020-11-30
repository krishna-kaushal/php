<?php
$a = $_POST['t1'];
$b = $_POST['t2'];

echo "Your Fist Number = ".$a;
echo "<br>Your Second Number = ".$b;

$x = $_POST['button'];
if($x == "sum"){
	$c = $a + $b;
	echo "<br>Sum = ".$c;
}
else if($x == "subtract"){
	$c = $a - $b;
	echo "<br>Subtract = ".$c;
}
else if($x == "multiply"){
	$c = $a * $b;
	echo "<br>Multiply = ".$c;
}
else if($x == "divide"){
	$c = $a / $b;
	echo "<br>Divide = ".$c;
}
else{
	echo "<br><br>ERROR!! Please Select One Option";
}
?>