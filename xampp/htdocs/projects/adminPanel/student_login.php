<?php
ob_start();
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->

    <title>Student Login</title>
    <style type="text/css">
        .box {
            width: 500px;
            margin: 200px 0;
        }

        body{
            background-image: linear-gradient(to top, #accbee 0%, #e7f0fd 100%);
            height: 100vh;
            overflow-y: hidden;
        }

        .shape1{
            position: relative;
            height: 150px;
            width: 150px;
            background-color: #0074d9;
            border-radius: 80px;
            float: left;
            margin-right: -50px;

        }
        .shape2 {
            position: relative;
            height: 150px;
            width: 150px;
            background-color: #0074d9;
            border-radius: 80px;
            margin-top: -30px;
            float: left;

        }
        .shape3 {
            position: relative;
            height: 150px;
            width: 150px;
            background-color: #0074d9;
            border-radius: 80px;
            margin-top: -30px;
            float: left;
            margin-left: -31px;

        }
        .shape4 {
            position: relative;
            height: 150px;
            width: 150px;
            background-color: #0074d9;
            border-radius: 80px;
            margin-top: -25px;
            float: left;
            margin-left: -32px;
        }
        .shape5 {
            position: relative;
            height: 150px;
            width: 150px;
            background-color: #0074d9;
            border-radius: 80px;
            float: left;
            margin-right: -48px;
            margin-left: -32px;
            margin-top: -30px;

        }
        .shape6 {
            position: relative;
            height: 150px;
            width: 150px;
            background-color: #0074d9;
            border-radius: 80px;
            float: left;
            margin-right: -20px;
            margin-top: -35px;

        }
        .shape7 {
            position: relative;
            height: 150px;
            width: 150px;
            background-color: #0074d9;
            border-radius: 80px;
            float: left;
            margin-right: -20px;
            margin-top: -57px;
        }
        .float {
            position: absolute;
            z-index: 2;
        }

        .form {
            margin-left: 145px;
        }

        h1{
            margin-top: 25px;

        }

        .btn{
            width: 6.5rem;
            border-radius: 5px;
        }

        .btn:hover{
            background-color: white;
            border: 1px solid green;
            color: green;
            font-weight: bold;
        }

    </style>
</head>

<div>

<div>
    <center>
        <h1 class="display-4">Student Login</h1>
    </center>
</div>
<div class="container">
    <div id="login-row" class="row justify-content-center align-items-center">
        <div id="login-column" class="col-md-6">
            <div class="box">
                <div class="shape1"></div>
                <div class="shape2"></div>
                <div class="shape3"></div>
                <div class="shape4"></div>
                <div class="shape5"></div>
                <div class="shape6"></div>
                <div class="shape7"></div>
                <div class="float">
                    <form class="form" action="student_login.php" method="post">
                        <div class="form-group">
                            <label for="username" class="text-white">Enrollment Number:</label><br>
                            <input type="text" name="enroll_num" id="username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password" class="text-white">Password:</label><br>
                            <input type="text" name="password" id="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success btnRegister" name="submit" value="Login"/>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<center>
<?php
if(isset($_POST['submit'])){
    $password = $_POST['password'];
    $enroll_num = $_POST['enroll_num'];
    $mysqli= new mysqli("localhost", "root", "", "studentinfo") or die("Server Not Found");

$q = "select * from students where enroll_num='$enroll_num'";
$rs = $mysqli -> query($q);
$row = $rs -> fetch_assoc();
//printf("%s", $row["DOB"]);
//$_enroll_num = $row["enroll_num"];
$dob = $row['DOB'];
if ($password == $dob){
    session_start();
    $_SESSION['enroll_num'] = $enroll_num;
    header("refresh:2; URL=studentPanel.php");
    echo "Login Successfull";

?>
</center>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
    <?php
}

else{
    header("refresh:2; URL=student_login.php");
    echo "Login Failed";
}
//if ()

    ?>
    <?php
}
?>