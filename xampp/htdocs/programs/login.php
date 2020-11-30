<?php
$a = $_POST[t1];
$b = $_POST[t2];
$gender = $_POST[gender];
$facebook = $_POST[facebook];
$whatsapp = $_POST[whatsapp];
$instagram = $_POST[instagram];
$linkedin = $_POST[linkedin];
$city = $_POST[city];
$address = $_POST[address];

$x = $_POST['gender'];

echo "<br>Your Name =  &nbsp;".$a;
echo "<br><br>Password &nbsp;&nbsp; =&nbsp; ".$b;
if($gender == "male"){
	echo "<br><br>Gender &nbsp;&nbsp;&nbsp; = &nbsp;Male";
}
if($gender == "female"){
	echo "<br><br>Gender &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; = &nbsp;Female";
}
echo "<br><br>Hobbies &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;= &nbsp;".$facebook ."  ".$whatsapp ."  ".$instagram ."  ".$linkedin;
echo "<br><br>City &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;= &nbsp;" .$city;
echo "<br><br>Address &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;= &nbsp;" .$address;
?>