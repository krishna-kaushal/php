<!DOCTYPE html>
<html>
<head>
	<title>Functions</title>
</head>
<body>

<?php
$d = 9;
$b = 7;
$c = "Hello";
$a = "shivam ? kumar ; is a best boys";
echo $a."<br>";
echo strripos($a, 'I');
echo "<br>";
echo strrpos($a, 'i');
echo "<br>";
echo strspn($a, "kumar");
echo "<br>";
echo strspn($a, "shiasdjcbihequbqowufobx")."<br>";
echo strstr($a,"k");
echo "<br>";

echo strtok($a,"?");
echo "<br>";
echo substr_compare($a,"shivam ? kumar ; is a best boys",0);
echo "<br>";
echo substr_count($a, "is")."<br>";
echo substr_replace($a, "krishna ? kaushal ; is a best boys", 0)."<br>";
echo trim($a,"shivam ? kumar ;")."<br>";
$a = "shivam ? kumar ; is a best boys";

echo vsprintf("%d %s", array($b, $a))."<br>";
$a = "shivam ? kumar ; is a best boys";

$text = vprintf("%u %s", array($d, $c))."<br>";
echo $text;

echo wordwrap($a, 15, "<br>")."<br>";
echo strcmp("Hello", "Hello")."<br>";
echo rtrim($a, "boy");


/*echo strtolower($a);
echo "<br>";
echo strtoupper($a);
echo "<br>";
echo ucfirst($a);
echo "<br>";
echo ucwords($a);
echo "<br>";
echo strcmp($a, "shivam kumar");
echo "<br>";
*/
?>


</body>
</html>