<?php
ob_start();
session_start();
if (isset($_SESSION['username'])){
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

    <title>Admin Panel</title>

    <style type="text/css">
    	@import: url(https://fonts.googleapis.com/css?family=Roboto+Condensed);

*{
	font-family: 'Roboto Condensed', sans-serif;

}
body{
	background-image: linear-gradient(to top, #accbee 0%, #e7f0fd 100%);
	height: 100vh;
}
.navbar{
background-image: linear-gradient(to right, #4facfe 0%, #00f2fe 100%);
}

nav .navbar-nav li a{
  color: white !important;
  margin-right: 30px;
}

.navbar-nav{
	margin-right: 50px;
}

.navbar-brand{
	font-size: 25px;
	letter-spacing: 3px;
}

.register{
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
    margin-top: 2%;
    padding: 2%;
    -webkit-box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
  	box-shadow: 0 20px 50px 20px rgba(0,0,0,0.3);
    border-radius: 10px 10px 10px 10px;

}
.register-left{
    text-align: center;
    color: #fff;
    margin-top: 0%;
}
.register-left input{
    border: none;
    border-radius: 1.5rem;
    padding: 3%;
    width: 70%;
    background: #f8f9fa;
    font-weight: bold;
    color: #383d41;
    margin-top: 11%;
    margin-bottom: 3%;
    cursor: pointer;
}
.register-right{
    background: #f8f9fa;
    border-top-left-radius: 10% 50%;
    border-bottom-left-radius: 10% 50%;
}
.register-left img{
    margin-top: 15%;
    margin-bottom: 5%;
    width: 25%;
    -webkit-animation: mover 2s infinite  alternate;
    animation: mover 1s infinite  alternate;
}
@-webkit-keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
@keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
.register-left p{
    font-weight: lighter;
    padding: 12%;
    margin-top: -9%;
}
.register .register-form{
    padding: 10%;
    margin-top: 10%;
}
.btnRegister{
    float: right;
    margin-top: 10%;
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    background: #0062cc;
    color: #fff;
    font-weight: 600;
    width: 50%;
    cursor: pointer;
}
.register .nav-tabs{
    margin-top: 3%;
    border: none;
    background: #0062cc;
    border-radius: 1.5rem;
    width: 13%;
    float: right;
}
.register .nav-tabs .nav-link{
    padding: 2%;
    height: 34px;
    font-weight: 600;
    color: #fff;
    border-top-right-radius: 1.5rem;
    border-bottom-right-radius: 1.5rem;
}
.register .nav-tabs .nav-link:hover{
    border: none;
}
.register .nav-tabs .nav-link.active{
    width: 100px;
    color: #0062cc;
    border: 2px solid #0062cc;
    border-top-left-radius: 1.5rem;
    border-bottom-left-radius: 1.5rem;
}
.register-heading{
    text-align: center;
    margin-top: 8%;
    margin-bottom: -15%;
    color: #495057;
}

.btnDelete:hover{
    background-color: red;
    color: white;
    padding: 5%;
    width: 80%;
}
.btnUpdate:hover{
    background-color: limegreen;
    color: white;
    padding: 5%;
    width: 80%;
}



.inserted{
    font-size: 1.8rem;
    /*color: #fff;*/
  color: black;
  -webkit-text-fill-color: white; /* Will override color (regardless of order) */
  -webkit-text-stroke-width: 1.2px;
  font-weight: bold;
  -webkit-text-stroke-color: black;
  }
    </style>
  </head>
  <body>

<!-- ----------nav---------- -->


<nav class="navbar navbar-expand-md navbar-dark">
  <a class="navbar-brand ml-5" href="#">Grand Ridge School</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto ">
      <li class="nav-item px-3">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item px-3">
        <a class="nav-link" href="#">About Us</a>
      </li>
      <li class="nav-item mr-5 px-3">
        <a class="nav-link" href="#">Contact Us</a>
      </li>    
    </ul>
  </div>  
</nav>
<br>


<!-- ---x-------nav------x---- -->


<!-- ----------Login Form----------- -->

<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <form action="delete.php">
                            <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                            <h3>Welcome</h3>
                            <p>To Grand Ridge School</p>
                            <input type="submit" class="btnDelete" name="" value="Delete"/>
                        </form>
                        <form action="update.php">
                            <input type="submit" class="btnUpdate" name="" value="Update"/><br/>
                        </form>
                    </div>                    <div class="col-md-9 register-right">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Register a Student</h3>
                                <form action="Admin.php" method="post">
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Student Name *" name="student_name" />
                                        </div>
                                        <div class="form-group">
                                            <input type="date" class="form-control" placeholder="DOB *" name="DOB" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Mother's Name *" name="mother_name">
                                        </div>
                                        <div class="form-group">
                                            <div class="maxl" >
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="male" checked>
                                                    <span> Male </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="female">
                                                    <span>Female </span> 
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                       	             <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="course" placeholder="Course *" />
                                        </div>
                                        <div class="form-group">
                                            <input type="date" name="DOJ" class="form-control" placeholder="Date of Joining *" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Father's Name *" name="father_name" />
                                        </div>
                                        <input type="submit" class="btnRegister" name="btnRegister" value="Register"/>
                                    </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
<!-- ----------Login Form----------- -->


<?php
if (isset($_POST['btnRegister'])) {

$student_name = $_POST['student_name'];
$DOB = $_POST['DOB'];
$mother_name = $_POST['mother_name'];
$gender = $_POST['gender'];
$course = $_POST['course'];
$DOJ = $_POST['DOJ'];
$father_name = $_POST['father_name'];


$mysqli= new mysqli("localhost", "root", "", "studentinfo") or die("Server Not Found");
?>
<center>
<?php
$sql = "insert into students(student_name,DOB, Mother_Name, Gender, Course, Date_Joining, Father_Name) values('$student_name', '$DOB', '$mother_name', '$gender', '$course', '$DOJ', '$father_name')";


    if ($mysqli -> query($sql) == true) {
?>
<script>
    alert("Student Registered Successfully");
</script>
<?php
    }
?>

        <?php

$id = $mysqli -> insert_id;

if ($id <= 9) {

    $enroll_num = "E00".$id;
}
    else if($id > 9 && $id <= 99){

    $enroll_num = "E0".$id;
}
    else if($id > 99 && $id <= 999){

    $enroll_num = "E".$id;
}
    else{
    echo "Enrollment Number not found";
}
$q="update students set enroll_num='$enroll_num' where id='$id'";
?>

    <div class="container">
        <!-- Button to Open the Modal -->
        <button type="button" class="btn btn-primary px-5 py-lg-2 mt-3 " data-toggle="modal" data-target="#myModal">
            View Enrollment Number
        </button>

        <!-- The Modal -->
        <div class="modal fade" id="myModal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
<!--                        <h4 class="modal-title ">Enrolloment Number</h4>-->
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body m-md-4">
                        <?php
                        echo "<p>Your Enrollment Number is </p><p class='display-4 text-success'>".$enroll_num."</p>";
                        ?>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>

    </div>
    <?php
$mysqli->query($q);
//    header("refresh:5; URL=enroll_num.php");
}?>
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
else
{
    header("location: adminLogin.php");
}
?>
