<html>
<head>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<div><?php include 'header.html';?></div>
<div><?php include 'nav.html';?></div>

<div class="content">
<?php
$a=$_GET['a'];
if($a==1)
{

include 'hello.php';
}
else if($a==2)
{
include 'hellohtml.php';
}


?>
<div><?php include 'footer.html';?></div>
	
</div>
</body>
</html>