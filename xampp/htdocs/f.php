<?php
$a = 7;
$str = "Up";

$txt = vprintf("%u  %s.", array($a, $str));
echo $txt;
?>