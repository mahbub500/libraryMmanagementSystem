<?php

// connection to db
$db = new PDO('mysql:host=localhost;dbname=seip;charset=utf8mb4', 'root', '');

//build query
$query = "SELECT * FROM `teachers` WHERE id = ".$_GET['id'];

//execute the query using php
foreach ($db->query($query) as $row){
    $teachers = $row;
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
            <a class="navbar-brand" href="../index.php"><img src="../assets/images/bitm.png" alt="logo" height="40" width="100"></a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right" style="padding-top: 10px">
                <li><a href="../dashboards/admin_index.php">Admin Panel</a></li>
                <li><a href="teachers_view.php">View Trainers</a></li>
                <li><a href="teachers_add.php">Add Trainers</a></li>
            
            </ul>
        </div>
    </div>
</nav>

<!-- edit form begin =========================================================-->
<div class="container">

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="header-section text-center">
                <h2>Edit Trainer's Information</h2>
                
              <hr class="bottom-line">
            </div>
            <form action="teachers_edit_done.php" method="post" enctype="multipart/form-data">
              		<input type="hidden" class="form-control" name="id" placeholder="ID"
                           value="<?=$teachers['id'];?>">
                Name: <input name="names" type="text" value="<?=$teachers['names'];?>" class="form-control" placeholder=" Enter Name"  required >
                <br>
                Email: <input name="emails" type="email" value="<?=$teachers['emails'];?>" class="form-control" placeholder=" Enter Email Address" required >
                <br>
                Phone Number: <input name="phones" type="text" value="<?=$teachers['phones'];?>" class="form-control" placeholder=" Enter Trainers Phone Number " required >
                <br>
                Educations: <input name="educations" type="text" value="<?=$teachers['educations'];?>" class="form-control"  required >
                <br>
                Experiences: <textarea name="experiences" type="text" value="<?=$teachers['experiences'];?>" class="form-control" rows="5" ></textarea>
                <br>
               	Image: <input type="file" name="image" value="<?=images/$teachers['image'];?>" class="form-control" placeholder="Enter the image">
				<br>
                <button type="submit" name="upload" class="btn btn-green" >Submit</button>

            </form>
            <br>
            <div class="panel panel-danger" style="background-color:#eb9a90 ">
                <p class="text-center" style="color: #9c3328">Enter at least 60 or more character for Description.</p>
            </div>
        </div>

    </div>
</div>

<!--Footer-->
<footer id="footer" class="footer">
    <div class="container text-center">

        <ul class="social-links">

            <li>
                <a href="https://www.facebook.com/BASIS.BITM/" target="_blank">
                    <i class="fa fa-facebook fa-fw"></i>
                </a>
            </li>

            <li>
                <a href="https://plus.google.com/103842390399681113250" target="_blank">
                    <i class="fa fa-google-plus fa-fw"></i>
                </a>
            </li>


            <li>
                <a href="https://www.linkedin.com/company/basis-institute-of-technology-&-management-bitm-" target="_blank">
                    <i class="fa fa-linkedin fa-fw"></i>
                </a>
            </li>
        </ul>
        ©2017 SEIP_Database Management. All rights reserved
        <div class="credits">
            Designed by <a href="../contact/code_finder.php">Code_Finder</a>
        </div>
    </div>
</footer>

<!-- Latest compiled and minified JavaScript -->
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/jquery.easing.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<!--<script src="js/custom.js"></script>-->

</body>
</html>
