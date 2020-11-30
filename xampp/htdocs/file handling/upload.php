<?php
$filename1 = "tmp.txt";
$file1 = fopen($filename1,"r");

if ($file1 == false){
    echo ("Error in opening file");
    exit();
}
$filesize = filesize($filename1);
$filetext = fread($file1, "$filesize");

$filename2 = "temp2.txt";
$file2 = fopen($filename2, "w");
if ($file2 == false){
    echo ("Error in Opening File");
    exit();
}

fwrite($file2, $filetext);
fclose($file1);
fclose($file2);
?>

<html>
<body>
<?php
echo ("tmp.txt Content: <br><br>");
$filename1 = "tmp.txt";
$file1 = fopen($filename1,"r");

if ($file1 == false){
    echo ("Error in opening file");
    exit();
}
$filesize = filesize($filename1);
$filetext = fread($file1, "$filesize");

fclose($file1);
echo ("File Size : $filesize bytes");
echo ("$filetext");
//echo ("file name : $filename1");
?>
<pre>



</pre>
<?php
echo ("temp2.txt Content: <br><br>");

$filename2 = "temp2.txt";
$file2 = fopen($filename2,"r");

if ($file2 == false){
    echo ("Error in opening file");
    exit();
}
$filesize = filesize($filename2);
$filetext = fread($file2, "$filesize");
fclose($file2);

echo ("File Size : $filesize bytes");
$c = 0;
//$size = 0;
//
//for ($i = 0; $i != '\0'; $i++){
//    $filetext[$i];
//    $size = $size + 1;
//}
print_r($filetext);
$a = array($filetext);

foreach ($a as $b){
    if ($b == " "){
        $c++;
    }
}

echo "<br>";
echo ("size  = $c");
echo "<br>";
$a = 5;
echo ("$filetext[$a]");

echo "<br>";

echo ("file name : $filename2");



?>
</body>
</html>