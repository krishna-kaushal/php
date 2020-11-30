<?php
$a =$_GET['a'];
$x = "The Lighthouse";
$b = "Portrait of a Lady on Fire";
$c = "Crawl";
$d = "Knives and Skin";
$e = "High Life";
$f = "Parasite";
$g = "Avengers: Endgame";
$h = "Little Women";
$i = "Uncut Gems";
$j = "Midsommar";
if($a  == 1){
	echo "1. ".$x,"<br>2. " .$b;
}
else if($a == 2){
	echo "1. ".$x,"<br>2. " .$b,"<br>3. " .$c,"<br>4. " .$d,"<br>5. " .$e;
}
else if($a == 3){
	echo "1. ".$x,"<br>2. " .$b,"<br>3. " .$c,"<br>4. " .$d,"<br>5. " .$e,"<br>6. " .$f,"<br>7. " .$g;
}

else if($a == 4){
	echo "1. ".$x,"<br>2. " .$b,"<br>3. " .$c,"<br>4. " .$d,"<br>5. " .$e,"<br>6. " .$f,"<br>7. " .$g,"<br>8. " .$h,"<br>9. " .$i,"<br>10. " .$j;
}
?>