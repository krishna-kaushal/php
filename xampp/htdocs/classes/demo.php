<?php
class demo{                              // Class
    function sum($a, $b){                // Member Function
        $c = $a + $b;
        echo "Sum = ".$c;
    }
}

$obj = new demo();
$obj -> sum(4, 8);
?>