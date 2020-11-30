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

        <title>Delete Record</title>

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
                margin-top: 4%;
                padding: 4%;
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
                margin-top: 10%;
                border: none;
                border-radius: 1.5rem;
                padding: 2%;
                background: red;
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
                background-color: deepskyblue;
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

.toCenter{
margin-left: 15%;
    margin-right: 15%;

}

            .toCenter2{
                margin-left: 30%;
                /*margin-right: 30%;*/

            }
.enroll{
    text-align: center;
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

            .successMessage{
                margin-left: 31%;
                margin-right: -1.5%;
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
                <form action="Admin.php">
                    <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                    <h3>Welcome</h3>
                    <p>To Grand Ridge School</p>
                    <input type="submit" class="btnDelete" name="" value="Register"/>
                </form>
                <form action="update.php">
                    <input type="submit" class="btnUpdate" name="" value="Update"/><br/>
                </form>
            </div>                    <div class="col-md-9 register-right">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">Delete a Student Record</h3>
                        <form action="delete.php" method="post">
                            <div class="row register-form">
                                <div class="col-md-8 toCenter">
                                    <div class="form-group">
                                        <input type="text" class="form-control enroll" placeholder="Enter Enrollment Number *" name="enroll_num" />
                                    </div>
                                </div>
                                <div class="col-md-8 toCenter2">
                                    <div class="form-group">
                                    <input type="submit" class="btnRegister" name="btnDelete" value="Delete"/>
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
    if (isset($_POST['btnDelete'])){
        $enroll_num = $_POST['enroll_num'];
        $mysqli= new mysqli("localhost", "root", "", "studentinfo") or die("Server Not Found");
        $q = "delete from students where enroll_num='$enroll_num'";
        $mysqli -> query($q);
        header("refresh: 2; URL=delete.php");
    ?>
    <center>
        <script>
            alert("Record Deleted Successfullly");
        </script>
    </center>
    <?php
        }?>



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
