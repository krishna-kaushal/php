<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="prime.php" method = "post">
<input type="text" name="t1" placeholder="Enter Number"><br><br>
<input type="submit" value="check" name="btn1"><br><br>

</form>

<?php
if (isset($_POST['btn1'])) {
function sum($a)
{
 $a = $_POST['t1'];
        $answer = 0;
        for ($i=2; $i <= $a / 2; $i++) { 
            if ($a % $i == 0) {
                $answer = 1;
                break;
            }
        }

            if ($answer == 0){
                echo "<input type = 'text' class = 'result' 
                value='$a is a Prime Number'>"; 
            }
            else{
                echo "<input type = 'text' class = 'result' 
                value='$a is Not a Prime Number'>";
            }
}
sum ($a =  $_POST['t1']);


}
?>

<!-- <?php
        if (isset($_POST['btnfact'])) {
 $a = $_POST['t1'];
        $answer = 0;
        for ($i=2; $i <= $a / 2; $i++) { 
            if ($a % $i == 0) {
                $answer = 1;
                break;
            }
        }

            if ($answer == 0){
                echo "<input type = 'text' class = 'result' 
                value='$a is a Prime Number'>"; 
            }
            else{
                echo "<input type = 'text' class = 'result' 
                value='$a is Not a Prime Number'>";
            }
        }           
        
        ?>
 -->
</body>
</html>