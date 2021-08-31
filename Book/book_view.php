<?php
//connection to database
 $db = @new mysqli("localhost", "root", "", "studentlibery");

//building query
$query = "SELECT * FROM `book` ORDER BY id";


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
                <li><a href="">Admin Panel</a></li>
                <li class="active"><a href="book_view.php">View Trainers</a></li>
                <li ><a href="book_add.php">Add Trainers</a></li>
            
            </ul>
        </div>
    </div>
</nav>
<!--Feature start =========================================================-->
<section id ="feature" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="header-section text-center">
                <h2>List of Books</h2>
                
                <hr class="bottom-line">
            </div>

            <div class="container">
                
                <div class="row">
                    <div class="col-md-12">
                        
                        <table class="table table-striped table-dark">
                          <thead>
                            <tr>
                              <th scope="col">Image</th>
                              <th scope="col">Book Name</th>
                              <th scope="col">Writer's Name</th>
                              <th scope="col">Publication</th>
                              <th scope="col">MRP</th>
                              <th scope="col">ISSBN Number</th>
                              <th scope="col">Language</th>
                              <th scope="col">Catagory</th>
                              <th scope="col">Release Date</th>
                              <th scope="col">Books Availabe</th>
                             
                            </tr>
                          </thead>
                          <tbody>
                            <?php foreach ($db->query($query) as $book):
                    ?>
                            <tr>
                                <td scope="row"><img class="rounded-circle" src ="images/<?php echo $book['image'];?> "height="100px" width="100px" ></td>
                              <td scope="row" class="text-success"><?php echo $book['id'];?></td>
                              <td scope="row"><?php echo $book['name'];?></td>
                              <td scope="row"><?php echo $book['writer'];?></td>
                              <td scope="row"><?php echo $book['publication'];?></td>
                              <td scope="row"><?php echo $book['mrp'];?></td>
                              <td scope="row"><?php echo $book['issbn_number'];?></td>
                              <td scope="row"><?php echo $book['language'];?></td>
                              <td scope="row"><?php echo $book['catagory'];?></td>
                              <td scope="row"><?php echo $book['release_date'];?></td> 
                              <td scope="row"><?php echo $book['quantity'];?></td>
                              
                             
                              <td colspan="2">
                                  <a href="book_edit.php?id=<?php echo $book['id'];?>" class="btn btn-primary"> Edit</a>
                                     <a href="book_delete.php?id=<?php echo $book['id'];?>" class="btn btn-danger" > Delete</a>
                                     
                                  
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


<!-- jqery -->
<!-- <script>
    $('#newsletterForm').validate({
    submitHandler: function(form) {
        jQuery(form).ajaxSubmit({
                success: function() {
                    $('#newsletterForm').html("<div id='success-message'></div>");
                    $('#success-message').html("<p><strong>Thank you.</strong> <br/>You've been added to our list and will hear from us soon!</p>");
                },
                error: function() {
                    $('#newsletterForm').html("<div id='success-message'></div>");
                    $('#success-message').html("<p><strong>That email already exists.</strong> <br/>Please enter another email address.</p>");
                }
            });
        }
    });
</script>
 -->


<!-- Latest compiled and minified JavaScript -->
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/jquery.easing.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<!--<script src="js/custom.js"></script>-->

</body>
</html>
