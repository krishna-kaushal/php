<?php

$num = array(3, 43,4,88, 12);
$great = $num[0];
$small = $num[0];

for ($i=0; $i <= 4; $i++) { 
	if($great <= $num[$i]){
		$great = $num[$i];
	}
	elseif ($small >= $num[$i]) {
		$small = $num[$i];
	}
}

echo "Greatest Number is ".$great." and smallest number is ".$small;

?>