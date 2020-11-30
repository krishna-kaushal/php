<!-- Recursive Function -->

<!DOCTYPE html>
<html>
<head>
	<title>table</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

	<style type="text/css">
		body{
			background-image: linear-gradient(to top, #fbc2eb 0%, #a6c1ee 100%);
			overflow: hidden;
			height: 600px;
			/*background-size: cover;*/
			/*background-repeat: no-repeat;*/
		}

		.form {
			/*border: 2px solid red;*/
			box-shadow: 0px 2px 20px 5px #b224ef;
			background-image: linear-gradient(to top, #d5d4d0 0%, #d5d4d0 1%, #eeeeec 31%, #efeeec 75%, #e9e9e7 100%);
			margin-left: 37%;
			margin-right: 37%;
			border-radius: 0.5rem;

			padding: 10vh 3rem;
			margin-top: 25vh;
			text-align: center;
		}

		.num{
		box-shadow: 0px 1px 10px 2px #d7d2cc inset;

			border-radius: 0.5rem;
			text-align: center;
			border: none;
			padding: 1rem 4rem;
		}
		.btn{
			margin-top: 3vh;
			padding: 0.5rem 3rem;
		}

		.answer{
			margin-top: 4vh;
			box-shadow: 0px 1px 10px 2px #d7d2cc inset;
			border: none;
			text-align: center;
			border-radius: 0.5rem;
			padding: 1rem 4rem;	
		}


	</style>
</head>
<body>
	<form class="form" action="sum.php" method="post">
		<input type="text" class="num" name="num" placeholder="enter number"><br>
		<input type="submit" class="btn btn-success" name="btn">


<?php
if (isset($_POST['btn'])) {
	
$n = $_POST['num'];
$s = 0;
function sum($n){
	if($n > 0){
		
		$r = $n % 10;
		// $n = $n/10;
		$s = $s + $r;
		
		return $s + sum( $n/10);

	}
}
 
$x = sum($_POST['num']);
echo "<br><input type='text' class='answer' value='$x'";

}
?>
	</form>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>