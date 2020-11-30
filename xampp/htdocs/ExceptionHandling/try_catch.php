<html>
<body>
<form action="try_catch.php" method="post">
<input type="text" name="t1">
    <input type="text" name="t2">
    <input type="submit" name="btn1">
</form>
</body>
</html>

<?php
if (isset($_POST['btn1'])) {
    try {


        $a = $_POST['t1'];
        $b = $_POST['t2'];
    if ($a == 0 || $b == 0){
       throw new Exception("A number is not divided by zero");
    }
    else{
        $c = $a/$b;
        echo "Division = ".$c;
    }
    }
    catch (Exception $e){
        echo $e -> getMessage();
    }

}
?>