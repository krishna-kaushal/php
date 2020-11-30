<html>
<head>
    <title>Reading a file using PHP</title>
</head>
<body>
<?php
$filename = "tmp.txt";
$file = fopen($filename, "r");

if ($file == false){
    echo ("error in opening file");
    exit();
}

$filesize = filesize($filename);
$filetext = fread($file, $filesize);
fclose($file);

echo ("File Size : $filesize bytes");
echo ("<pre>$filetext</pre>");

?>
</body>
</html>