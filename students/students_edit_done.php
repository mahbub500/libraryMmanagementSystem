<?php
/**
 * Created by PhpStorm.
 * User: Hello
 * Date: 19-May-17
 * Time: 1:21 AM
 */


// connection to db
$db = new PDO('mysql:host=localhost;dbname=seip;charset=utf8mb4', 'root', '');

// build query
$query = "UPDATE `students` SET 
    `seip_id` = '".$_POST['seip_id']."',
    `name` = '".$_POST['name']."', 
    `father_name` = '".$_POST['father_name']."', 
    `mother_name` = '".$_POST['mother_name']."',
    `nid` = '".$_POST['nid']."',
    `email` = '".$_POST['email']."',
    `batch_name` = '".$_POST['batch_name']."',
    `certified` = '".$_POST['certified']."'
    
    WHERE `students`.`id` = ".$_POST['id'];


//echo $query;die();
//execute the query using php
//$result = $db->exec($query);
$result = $db->query($query);

//var_dump($result);

//if($result){
//    echo "Data has been updated successfully.";
//}else{
//    echo "There is an error. Please try again later.";
//}
//header("location:course_view.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SEIP Database Management</title>
    <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
    <meta name="keywords" content="free website templates, free bootstrap themes,
    free template, free bootstrap, free website template">

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
    <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.min.css">
    <!--     bootstrap  Latest compiled and minified CSS -->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/imagehover.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <!-- =======================================================-->
    <!--        Theme Name: Code_Finder-->
    <!--        Author: Code_Finder-->
    <!-- ======================================================= -->
</head>
<body style="padding-top: 100px">
<!--Navigation bar start =================================================-->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-exam
                <span class="icon-bar"></span>ple-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                <img src="../assets/images/bitm.png" alt="logo" height="40" width="100">
            </a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right" style="padding-top: 10px">
                <li><a href="../dashboards/admin_index.php">Admin Panel</a></li>
                <li><a href="../courses/course_add.php">Add New Course</a></li>
                <li><a href="../courses/course_assign.php">Assign Course</a></li>
                <li><a href="../courses/course_view.php">View All Courses</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">View Students <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li ><a href="students_view.php">View All Students</a></li>
                        <li ><a href="students_assign_course.php">View Assigned Students</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div> <p></p>
</nav>

<!-- message start ==============================================================-->
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-danger text-center">
                <?php
                if($result){
                    echo "Student's data updated successfully.";
                    echo "<br>";
                    echo "Thanks.";
                }else{
                    echo "Sorry !";
                    echo "<br>";
                    echo "There is an error. Please try again later.";
                }
                ?>
            </div>
        </div>
    </div>
</div>



<!-- Latest compiled and minified JavaScript -->
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/jquery.easing.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<!-- <script src="js/custom.js"></script> -->

</body>
</html>
