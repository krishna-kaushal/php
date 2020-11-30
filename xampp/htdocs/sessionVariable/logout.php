<?php
session_start();
if(isset($_SESSION['t1'])){
	session_destroy();
	header("location: login.php");
}
else{
	header("location: login.php");
}
?>