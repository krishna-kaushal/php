<!-- Recursive Function -->

<?php 
function fact($a){
	if($a == 1){
		return 1;
	}
	else{
		return  $a * fact ($a - 1);
	}
}

$x = fact(5);
echo "Fact = ".$x;
?>