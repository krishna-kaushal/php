<?php
$my=new mysqli("localhost","root","","studentinfo")or die("database not connected");
$q="select * from students";
$rs=$my->query($q)or die("query not run");
while($r=$rs->fetch_assoc())
{
echo $r['student_name']."  ".$r['enroll_num'];
echo "<br>";

}

?>
