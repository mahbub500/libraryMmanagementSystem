<?php
/**
 * Created by PhpStorm.
 * User: Hello
 * Date: 19-May-17
 * Time: 12:30 AM
 */

// connection to db
$db = new PDO('mysql:host=localhost;dbname=seip;charset=utf8mb4', 'root', '');

//build query
$query = "SELECT * FROM `students` WHERE id = ".$_GET['id'];

//execute the query using php
foreach ($db->query($query) as $row){
    $students = $row;
}

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
    <!-- bootstrap  Latest compiled and minified CSS -->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/imagehover.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <!-- =======================================================
        Theme Name: Code_Finder
        Author: Code_Finder
    ======================================================= -->
</head>
<body style="padding-top: 90px">
<!--Navigation bar start =================================================-->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="../assets/images/bitm.png" alt="logo" height="40" width="100"></a>
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
    </div>
</nav>

<!-- edit form begin =========================================================-->
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

            <form action="students_edit_done.php" method="post">
                <fieldset>
                    <legend>Student's Information</legend>

                    <input type="hidden" class="form-control" id="id" name="id" placeholder="ID"
                           value="<?=$students['id'];?>">

                    <div class="form-group">
                        <label for="seip_id">SEIP_ID :</label>
                        <input type="number" class="form-control" id="seip_id" name="seip_id"
                               placeholder="Enter SEIP_ID" value="<?=$students['seip_id'];?>">
                    </div>

                    <div class="form-group">
                        <label for="batch_name">Batch Name:</label>
                        <input type="text" class="form-control" id="batch_name" name="batch_name"
                               placeholder="Enter Batch Name " value="<?=$students['batch_name'];?>">
                    </div>

                    <div class="form-group">
                        <label for="certified">Certified:</label>
                        <input type="text" class="form-control" id="certified" name="certified"
                               placeholder="Certified or not" value="<?=$students['certified'];?>">
                    </div>

                    <div class="form-group">
                        <label for="name">Name :</label>
                        <input type="text" class="form-control" id="name" name="name"
                               placeholder="Enter Name" value="<?=$students['name'];?>">
                    </div>

                    <div class="form-group">
                        <label for="father_name">Father's Name :</label>
                        <input type="text" class="form-control" id="father_name" name="father_name"
                               placeholder="Enter Father's Name" value="<?=$students['father_name'];?>">
                    </div>

                    <div class="form-group">
                        <label for="mother_name">Mother's Name :</label>
                        <input type="text" class="form-control" id="mother_name" name="mother_name"
                               placeholder="Enter Mother's Name" value="<?=$students['mother_name'];?>">
                    </div>

                    <div class="form-group">
                        <label for="email">Email Address :</label>
                        <input type="email" class="form-control" id="email" name="email"
                               placeholder="Enter Email" value="<?=$students['email'];?>">
                    </div>

                    <div class="form-group">
                        <label for="nid">NID:</label>
                        <input type="number" class="form-control" id="nid" name="nid"
                               placeholder="Enter NID " value="<?=$students['nid'];?>">
                    </div>

                    <button type="submit" class="btn btn-green">Submit</button>
                </fieldset>
                <br>
                <hr>
            </form>
            <br>
<!--            <div class="panel panel-danger" style="background-color:#ebcccc ">-->
<!--                <p class="text-center">Enter at least 60 or more character for Description.</p>-->
<!--            </div>-->
        </div>
    </div>
</div>

<!-- Latest compiled and minified JavaScript -->
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/jquery.easing.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<!--<script src="js/custom.js"></script>-->

</body>
</html>
