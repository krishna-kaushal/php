<?php
class father{
    function sum($a, $b){
        $c = $a + $b;
        echo "sum = ".$c;
    }
}

class child extends father{
    function sub($a, $b){
        $c = $a - $b;
        echo "sub = ".$c;
    }
}

$obj = new child();
$obj -> sum(4, 5);
$obj -> sub(10,5);
?>