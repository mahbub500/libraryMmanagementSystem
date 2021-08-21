
<?php
//connection to database
$db = new PDO('mysql:host=localhost;dbname=seip;charset=utf8mb4', 'root', '');

//query
$query = 'INSERT INTO `students` ( `name`, `father_name`, `mother_name`,
                                  `gender`, `nid`, `email`, 
                                  `course_1`, `course_2`, `course_3`) 
VALUES ("' . $_POST['name'] . '","' . $_POST['father_name'] . '","' . $_POST['mother_name'] . '",
    "' . $_POST['gender'] . '", "' . $_POST['nid'] . '", "' . $_POST['email'] . '",
    "' . $_POST['course_1'] . '","' . $_POST['course_2'] . '", "' . $_POST['course_3'] . '")';


//execute the query using php
$result = $db->exec($query);

//var_dump($result);

//if($result){
//    echo "Data has been inserted successfully.";
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
                <li><a href="../index.php">Home <span class="sr-only">(current)</span></a></li>
                <li><a href="registration.php">Registration</a></li>
                <li><a href="../log/log_in_admin.php">Sign In</a>
                <li><a href="../contact/contact_us.php">Contact US</a>
                <li><a href="../dashboards/admin_index.php">Admin Panel</a></li>
                <li><a href="../dashboards/student_index.php">Student Panel</a></li>
            </ul>
        </div>
    </div> <p></p>
</nav>
<!-- message start ====================================================-->
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-danger text-center">
                <?php
                if($result){
                    echo "Registration successfully done.";
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