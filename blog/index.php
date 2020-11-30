<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

    <title>
        Courses
    </title>
<style>
    .hr1{
        width: 25%;
        border: 1px dotted orangered;
        margin-bottom: 7vh;
    }

img{
    height: auto;
    width: 60%;
}

    h1{
        font-weight: 700;
        color: #545454;
    }
    body{
        margin: 0px 8%;

    }
    h2{
        font-size: 4.5rem;
        color: orangered;
    }
    p{
        font-size: medium;
        letter-spacing: 1px;
        word-spacing: 2px;
        line-height: 1.7;
        text-align: justify;
    }
    blockquote{
        font-size: 12px;
    }
    @media only screen and (max-width: 600px) {
        img{
            height: auto;
            width: 100%;
        }
    }
</style>
</head>
<body>
<center>
<h1>Latest Posts</h1>
</center>

    <hr class="hr1">

    <?php
    $mysqli=new mysqli("localhost","root","","blog") or die("database not found");
    $sql = "select * from posts";
    $result = $mysqli -> query($sql);
//        $i =0;
        while ($row = $result -> fetch_assoc()){
            ?>

            <h2><?php echo $row["topic"]; ?></h2>
            <blockquote>Post by <span style="color: red">Admin</span></blockquote>
<?php echo $row["defination"]; ?>
            <hr>

<?php
        }

//        $row = $result -> fetch_assoc();
//        $title = $row['topic'];
//        $defination = $row['defination'];
//            echo $title;
//            echo $defination;


    ?>

</body>
</html>