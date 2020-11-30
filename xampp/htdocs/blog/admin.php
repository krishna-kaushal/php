<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>New Blog Post</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<style>
    hr{
        width: 15%;
    }
    .inputTitle{
        height: 6vh;
    }
</style>
</head>
<body>

<div class="container">
<center>
<div >
    <h1>New Blog Post</h1>
    <hr>
</div>
</center>
<!-- New Blog Post - START -->
<form action="admin.php" method="post">
    <div class="container">
    <div class="row" id="row_style">
<!--        <h4 class="text-center">Submit new post</h4>-->
        <div class="col-md-12  col-md-offset-0">
            <div class="form-group">
                <input type="text" name="title" class="form-control inputTitle" placeholder="Post Title">
            </div>
            <textarea id="editor" name="defination" cols="30" rows="10" placeholder="Submit your text post here..."></textarea>
            <br>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" name="btnSubmit" value="Submit Post" id="submit">
            </div>
        </div>
    </div>
</div>
</form>
<style>
    #row_style {
        margin-top: 30px;
    }


    #submit {
        display: block;
        margin: auto;
    }

    .inputTitle{
        font-weight: bold;
    }
</style>

<!-- you need to include the shieldui css and js assets in order for the charts to work -->
<link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light/all.min.css" />
<script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>

<script>
    $(function () {
        $("#editor").shieldEditor({
            height: 260
        });
    })
</script>
<!-- New Blog Post - END -->

</div>
 <center>
<?php
if(isset($_POST['btnSubmit'])){
$title = $_POST['title'];
$def = $_POST['defination'];
$conn=new mysqli("localhost","root","","blog") or die("database not found");
$title = str_replace("'", "\'", $title);
$def = str_replace("'", "\'", $def);
$q="insert into posts values('$title','$def')";
if($conn->query($q)==true)
{
    echo "record inserted";
}
else
{
    echo "fail to insert";
}
/*$mysqli = new mysqli("localhost", "root", "", "blog") or die ("server not found");
$sql = "insert into posts(title, defination) values('$title', '$def')";
$mysqli -> query($sql) or die("query not run");
echo "Post Submitted Successfully";
*/
}
?>
 </center>
</body>
</html>