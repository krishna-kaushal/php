<!DOCTYPE html>
<html>
<head>
	<title>Prime Number</title>
</head>
<body>

<form action="prime.php" method="post">
	<input type="text" name="t1"><br><br>
	<input type="submit" value="check" name="btn1"><br><br>

</form>

<?php
function prime($a){
	$a = $_POST['t1'];
        $answer = 0;
        for ($i=2; $i <= $a / 2; $i++) { 
            if ($a % $i == 0) {
                $answer = 1;
                break;
            }
        }

            if ($answer == 0){
                $c = "<input type = 'text' class = 'result' 
                value='$a is a Prime Number'><br><br>"; 
            }
            else{
                $c = "<input type = 'text' class = 'result' 
                value='$a is Not a Prime Number'><br><br>";
            }

	return $c;
}

if (isset($_POST['btn1'])) {
// prime ($a =  $_POST['t1']);
$x = prime ($a);
echo $x;
}

?>



</body>
</html>