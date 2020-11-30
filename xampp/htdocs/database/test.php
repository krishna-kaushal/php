<form action="test.php" method="post">
	<input type="text" name="enroll" value="E" readonly>
	<input type="submit" name="btn">
	
</form>

<?php
if (isset($_POST['btn'])) {
$enroll = $_POST['enroll'];
$num = 001;
echo sprintf("%s%03d", $enroll, $num);
}
?>