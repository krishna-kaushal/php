<?php
$filename = "tmp.txt";
$file = fopen($filename, "w");

if($file == false){
    echo ("Error in Opening file");
    exit();
}

fwrite($file, "Welcome to our website again ☻,Top 8 New Technology Trends for 2020
By Nikita Duggal
Last updated on Sep 14, 202020864516
Top 8 New Technology Trends for 2020
Technology is now evolving at such a rapid pace that annual predictions of trends can seem out-of-date before they even go live as a published blog post or article. As technology evolves, it enables even faster change and progress, causing an acceleration of the rate of change, until eventually, it will become exponential. 

Technology-based careers don’t change at the same speed, but they do evolve, and the savvy IT professional recognizes that his or her role will not stay the same. And an IT worker of the 21st century will constantly be learning (out of necessity if not desire).

What does this mean for you? It means staying current with technology trends. And it means keeping your eyes on the future, to know which skills you’ll need to know and what types of jobs you want to be qualified to do. Here are eight technology trends you should watch for in 2020, and some of the jobs that will be created by these trends.");
fclose($file);
?>

<html>
<head>
<title>Writing a file using PHP</title>
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

echo ("file size  : $filesize bytes");
echo ("<pre>$filetext</pre>");
echo ("file name : $filename");

?>
</body>

</html>
