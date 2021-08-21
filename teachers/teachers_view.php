<?php
//connection to database
 $db = @new mysqli("localhost", "root", "", "studentlibery");

//building query
$query = "SELECT * FROM `student` ORDER BY id";


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
<body style="padding-top: 40px">
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
                <li class="active"><a href="teachers_view.php">View Trainers</a></li>
                <li ><a href="teachers_add.php">Add Trainers</a></li>
            
            </ul>
        </div>
    </div>
</nav>
<!--Feature start =========================================================-->
<section id ="feature" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="header-section text-center">
                <h2>Meet Our Trainers</h2>
                
                <hr class="bottom-line">
            </div>

            <div class="container">
                <div class="row">
                    <?php
                    	foreach ($db->query($query) as $student):
                    ?>
                        <div class="col-md-8 col-md-offset-2">
             
                           <div class="heading pull-right">
                              	<img src ="images/<?php echo $student['image'];?>"height="100px" width="100px" >
                                <h4 class="text-justify">Name: <?php echo $student['FullName'];?></h4>
                                <p class="text-justify">Phone Number: <?php echo $student['Mobile'];?></p>
                                <p class="text-justify">Email: <?php echo $student['email'];?></p>
                                <p class="text-justify">Educations: <?php echo $student['Education'];?></p>
                            </div>
                            
                        </div>
                        <?php
                    		endforeach;
                    	?>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        
                        <table class="table table-striped table-dark">
                          <thead>
                            <tr>
                              <th scope="col">Sl No</th>
                              <th scope="col">Full Name</th>
                              <th scope="col">Father's Name</th>
                              <th scope="col">Mother's Name</th>
                              <th scope="col">Date of Birth</th>
                              <th scope="col">Education</th>
                              <th scope="col">Email</th>
                              <th scope="col">Nid</th>
                              <th scope="col">Mobile Number</th>
                              <th scope="col">Blood Group</th>
                              <th scope="col">Image</th>
                             
                              <th >Action</th>
                             
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                        foreach ($db->query($query) as $student):
                    ?>
                            <tr>
                              <td scope="row" class="text-success"><?php echo $student['id'];?></td>
                              <td scope="row"><?php echo $student['FullName'];?></td>
                              <td scope="row"><?php echo $student['FatherName'];?></td>
                              <td scope="row"><?php echo $student['MotherName'];?></td>
                              <td scope="row"><?php echo $student['BithDate'];?></td>
                              <td scope="row"><?php echo $student['Education'];?></td>
                              <td scope="row"><?php echo $student['email'];?></td>
                              <td scope="row"><?php echo $student['Nid'];?></td>
                              <td scope="row"><?php echo $student['Mobile'];?></td>
                              <td scope="row"><?php echo $student['BloodGroup'];?></td>
                              <td scope="row"><img class="rounded-circle" src ="images/<?php echo $student['image'];?> "height="100px" width="100px" ></td>
                              <td colspan="2">
                                  <a href="" class="btn btn-primary"> Edit</a>
                                     <a href="" class="btn btn-danger" > Delete</a>
                                  
                              </td>
                           
                              
                            </tr>                            
                            <?php
                            endforeach;
                        ?>
                          </tbody>
                        </table>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ feature end =========================================================-->
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
