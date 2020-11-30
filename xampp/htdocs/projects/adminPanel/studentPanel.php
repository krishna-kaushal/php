<?php
session_start();
if(isset($_SESSION['enroll_num'])){
   $mysqli= new mysqli("localhost", "root", "", "studentinfo") or die("Server Not Found");
   $enroll_num = $_SESSION['enroll_num'];
   $q = "select * from students where enroll_num='$enroll_num'";
    $rs = $mysqli -> query($q);
    $row = $rs -> fetch_assoc();
//    $enroll_num = $row["enroll_num"];
    $student_name = $row["student_name"];
    $DOB = $row["DOB"];
    $mother_name = $row["Mother_Name"];
    $gender = $row["Gender"];
    $course = $row["Course"];
    $DOJ = $row["Date_Joining"];
    $father_name = $row["Father_Name"];


    ?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Custom CSS -->
    <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->

    <title>Admin Panel</title>
<!---->
<!--<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>-->
<!--<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
<!------ Include the above in your HEAD tag ---------->
<style>
    #sailorTableArea{
        max-height: 300px;
        overflow-x: auto;
        overflow-y: auto;
    }
    #sailorTable{
        white-space: normal;
    }
    tbody {
        display:block;
        height:200px;
        overflow:auto;
    }
    thead, tbody tr {
        display:table;
        width:100%;
        table-layout:fixed;
    }

    .btnReport{
        margin-top: 30vh;
    }

</style>
<body>
<center>
<h1 class="display-4 mb-5 mt-1"> Student Information </h1>
</center>
<div class="table-responsive" id="sailorTableArea">
    <table id="sailorTable" class="table table-striped table-bordered" width="100%">

        <thead>
        <tr>
            <th> Student name </th>
            <th> Enrollment Number </th>
            <th> Date of Birth </th>
            <th> Mother Name </th>
            <th> Gender </th>
            <th> Course </th>
            <th> Date of Joining </th>
            <th> Father Name</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><?php echo $student_name;?></td>
            <td><?php echo $enroll_num;?></td>
            <td><?php echo $DOB;?></td>
            <td><?php echo $mother_name;?></td>
            <td><?php echo $gender;?></td>
            <td><?php echo $course;?></td>
            <td><?php echo $DOJ;?></td>
            <td><?php echo $father_name;?></td>
        </tr>
        </tbody>
    </table>
</div>
<center>
    <button type="button" class="btn btn-primary btnReport" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Report To Admin</button>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Report To Admin</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="studentPanel.php" method="post">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Enrollment Number:</label>
                            <input type="text" name="enroll_num" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Message:</label>
                            <textarea class="form-control" name="message" id="message-text"></textarea>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="submit" class="btn btn-primary">Send message</button>
                </div>
                    </form>
            </div>
        </div>
    </div>
</center>
<?php
if (isset($_POST['submit'])){
$enroll_num = $_POST['enroll_num'];
$message = $_POST['message'];
    $mysqli= new mysqli("localhost", "root", "", "studentinfo") or die("Server Not Found");
    $sql = "insert into reports (enroll_num, message) values ('$enroll_num', '$message')";
    if ($mysqli -> query($sql) == true){
    ?>
        <script>
            alert("Report Submitted");
        </script>
        <?php
    }

}
?>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
<?php
//    $rs = $mysqli -> query($q);
}
//   else{
//header("location: studentPanel.php");
//}
?>