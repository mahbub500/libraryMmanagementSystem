<?php
//connection to database
$db =  @new mysqli("localhost", "root", "", "studentlibery");


//build query
$query = "SELECT * FROM `student` WHERE id = ".$_GET['id'];

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
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
    <link rel="stylesheet" type="text/css" href=../assets/css/font-awesome.min.css>
    <!-- bootstrap  Latest compiled and minified CSS -->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/imagehover.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <!-- =======================================================
        Theme Name: Code_Finder
        Author: Code_Finder
    ======================================================= -->
</head>
<body style="padding-top: 80px">
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
                <li><a href="../dashboards/student_index.php">Student Panel</a></li>
                <li><a href="teachers_view_student.php">View Trainers</a></li>
            
            </ul>
        </div>
    </div>
</nav>
<!--/ Navigation bar end =================================================-->

<!--work-shop details start ==========================================================-->
<section id="work-shop" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="header-section text-center">
                <h2>Meet Our Excellent Trainers </h2>
            <p>We provide the best trainers for you. They are passionate, highly trained, and skilled.</p>
                <hr class="bottom-line">
            </div>
            <div class="col-md-10 col-md-offset-1">
                <div class="service-box text-center">
                 	<div class="pm-staff-profile-image-wrapper text-center">
						<div class="pm-staff-profile">
						  <img src="images/<?php echo $teachers['image'];?>" alt="" class="img-thumbnail img-squear" height="250px" width="175px" />
						</div>   
              		</div>  
              		<hr class="bottom-line">
                    <div class="teachers-details">
                        <h1><?php echo $teachers['names'];?></h1>
                        <h4>Phone Number: <?php echo $teachers['phones'];?></h4>
                        <h4>Email: <?php echo $teachers['emails'];?></h4>
                        <p>
                            <b>Educations:</b> <?php echo $teachers['educations'];?>
                        </p>
                        
                        <p>
                            <b>Experiences:</b> <?php echo $teachers['experiences'];?>
                        </p>
                      
                    </div>
                </div>
            </div>
        </div>
       </div>
</section>
<!--/ work-shop end ==========================================================-->

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