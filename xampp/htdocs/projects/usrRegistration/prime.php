<?php
session_start();
if(isset($_SESSION['t2']))
{
?>
<html>
<head>
<title>
Admin panel
</title>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
<style>

body{
	overflow: hidden;
	background-image: url("bgimg2.jpg");
	font-family: 'Roboto', sans-serif;
}

h2{
	position: absolute;
	margin-top: 1%;
	padding-bottom: 10px;
	text-align: center;
	left: 20.5%;
	border-bottom: 1px solid red;
	right: 0;
	color: #0CFFFB;
	font-size: 30px;
	font-weight: bold;
	text-shadow: 2px 2px 4px #000000;

	
}

.admin{
	color: white;
	font-weight: bold;
	position: absolute;
	top: 4px;
	left: 3.5%;
	font-size: 16px;
	padding: 10px 50px 10px 50px;
	box-shadow: 0 2px 10px 1px red;
	border-radius: 5px;
	border: 2px solid red;

}

.input{
	color: white;
	background-color: transparent;
	font-weight: bold;
	position: absolute;
	top: 20px;
	cursor: pointer;
	right: 4%;
	border: 2px solid red;
	box-shadow: 0 2px 10px 1px red;
	padding: 12px 55px 12px 55px;
	border-radius: 5px;
	
}

.input:hover{
	background-color: red;
}


.line{
	border: 2px solid red;
}

.sidebar{
	border-right: 1px solid red;
	display: inline-block;
	height: 700px;
	position: absolute;
	width: 20%;
	text-align: center;
	margin-top: 1.5%;
}

.side2{
	position: absolute;
	top: 280px;
	text-align: center;
	left: 0;
	right: 0;
	font-weight: bold;
}

a{
	color: #0CFFFB;
	text-decoration: none;
	font-style: oblique;
	font-size: 25px;
	text-shadow: 2px 2px 4px #000000;
}

a:hover{
	color: yellow;
}

.p2{
	color: green;
	font-weight: bold;
	position: absolute;
	top: 1px;
	left: 1%;
	font-size: 20px;
}

.form{
	background-color: #2E3338;
    position: absolute;
    /* border: 2px solid red; */
    display: inline-block;
    padding-top: 75px; 
    padding-bottom: 75px; 
    left: 45%;
    right: 25%;
    margin-top: 170px;
    /*border: 2px solid red;*/
    border-radius: 5px;
    /*background-color: #f2f2f2;*/
    box-shadow: 0 1px 15px 2px #0CFFFB;
    /*box-shadow: 0 2px 10px 1px #0CFFFB;*/
    border: none;

}

.form:hover{
	box-shadow: 0 1px 20px 7px #0CFFFB;
}

input{
	text-align: center;
}

.container{
	background-color: red;
	border-top:1px solid red;
	margin-top: 1.4%;
}

.input1{		
	padding: 15px 30px 15px 30px;
	border-radius: 5px;
	width: 55%;
	border: 1px solid #0CFFFB;
	background-color: white;
    box-shadow: 0 1px 10px 1px #000000 inset;
}

.input1:focus{
	background-color: white;
}

/*.input2{		
	padding: 15px 30px 15px 30px;
	border-radius: 5px;
	width: 55%;
	border: none;
}*/

.btnSum{
	margin-top: 5px;
	border: none;
	color: white;
	font-size: 15px;
	background-color: #0CFFFB;
	padding: 15px 30px 15px 30px;
	width: 55%;
	text-shadow: 2px 2px 4px #000000; 
	border-radius: 5px;
	font-weight: bold;
    box-shadow: 0 2px 10px 1px black ;


}

.btnSum:hover{
	background-color: #0AD2D5;
	cursor: pointer;
}

p{
	color: white;
	font-size: 15px;
	cursor: context-menu;
}

.result {
	padding: 15px 30px 15px 30px;
	width: 55%;
	border-radius: 5px;
	cursor: context-menu;
	border: 2px solid yellow;
	font-size: 15px;
    box-shadow: 0 1px 10px 1px #000000 inset;
    font-weight: bold;
}



</style>

</head>
<body>
<div class="header">
<?php
$b = $_SESSION['t2'];
echo "<p class='admin'>$b</p>";
echo "<a href='logout.php'><input class='input' type = 'submit' value='Logout'</a>";
?>

</div>
<br><br><br>
<div class="sidebar">
	<div class="side2">
	<a href="sum.php">add two Numbers</a><br><br>
	<a href="factorial.php">Factorial Of a Number</a><br><br>
	<a href="prime.php">Prime Numbers</a><br><br>
	</div>
</div>


<div class="container">

    <center>
        <h2> Prime Number</h2>
    <form action="prime.php" method="post" class="form" name="f1">
        <input class="input1" type="text" name="t1" placeholder="Enter Number"><br><br>
        <input type="submit" value="Check" class="btnSum" name="btnfact"><br><br>

        <?php
        if (isset($_POST['btnfact'])) {
            
        $a = $_POST['t1'];
        $answer = 0;
        for ($i=2; $i <= $a / 2; $i++) { 
            if ($a % $i == 0) {
                $answer = 1;
                break;
            }
        }

            if ($answer == 0){
                echo "<input type = 'text' class = 'result' 
                value='$a is a Prime Number'>"; 
            }
            else{
                echo "<input type = 'text' class = 'result' 
                value='$a is Not a Prime Number'>";
            }
        }
        ?>

    </form>
    </center>

</div>

<!-- <script type="text/javascript">
var xx;
f1.answer.value=<?php echo $answer;?>	
</script> -->

</body>
</html>
<?php
}
else
{
header("location: login.php");
}
?>
