<?php

// connection to db
    $mysqli = @new mysqli("localhost", "root", "", "studentlibery");

//build query
$query = "SELECT * FROM `book` WHERE id = ".$_GET['id'];


foreach ($mysqli->query($query) as $row){
    $book = $row;
}
$img = $book['image'];
// echo $img;

// print_r($student);


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
                <li><a href="book_view.php">View Books</a></li>
                <li><a href="book_add.php">Add Bookss</a></li>
            
            </ul>
        </div>
    </div>
</nav>

<!-- edit form begin =========================================================-->
<div class="container">

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="header-section text-center">
                <h2>Edit Book Information</h2>
                
              <hr class="bottom-line">
            </div>
             <form action="book_add_done.php" method="post" enctype="multipart/form-data">
                 
                <br>
                Title: <input name="book_name" type="text" class="form-control" placeholder=" Enter Title" required >
                <br>
                Writer's Name: <input name="writer" type="text" class="form-control" placeholder=" Enter Writer's Name" required >
                <br>
                Publication: <input name="publication" type="text" class="form-control" placeholder=" Enter Publication Name" required >
                <br>
               MRP: <input type="number" name="mrp" class="form-control" placeholder="MRP">
                <br>
               ISSBN Number: <input type="number" name="issbn" placeholder="Enter ISSBN Number" class="form-control">
               <br>
               Language:<input type="text" name="language" placeholder="Language" class="form-control">
               <br>
               Catagory: <input type="text" name="catagory" placeholder="Enter Book Catagory" class="form-control">
               <br>
               Image: <input type="file" name="image" class="form-control" placeholder="Insert Cover Page">
               <br>
               Release Date:<input type="text" name="release" placeholder="Release Date" class="form-control">
                <br>
                Quantity: <input type="number" name="quantity" placeholder="How much Books you want to Add?" class="form-control">
                <br>
                <button type="submit" name="upload" class="btn btn-green" >Submit</button>
                

                </div>
                 
                </div>

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
