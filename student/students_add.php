
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
                <li><a href="">Admin Panel</a></li>
                <li><a href="students_view.php">View Trainers</a></li>
                <li class="active"><a href="#">Add Trainers</a></li>
            
            </ul>
        </div>
    </div>
</nav>

<!--form start =========================================================-->
<div class="container">

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="header-section text-center">
                <h2>Add New Trainers.</h2>
                 <hr class="bottom-line">
            </div>
            <?php $reg_id =1000;  ?>
            <form action="students_add_done.php" method="post" enctype="multipart/form-data">
                 <input name="Reg_id" type="hidden" class="form-control" value=" <?php echo $reg_id++; ?> " required >
                <br>
                Name: <input name="FullName" type="text" class="form-control" placeholder=" Enter Name" required >
                <br>
                Father's Name: <input name="FatherName" type="text" class="form-control" placeholder=" Enter Your Father's Name" required >
                <br>
                Mother's Name: <input name="MotherName" type="text" class="form-control" placeholder=" Enter Your Mother's Name" required >
                <br>
                Email: <input name="emails" type="email" class="form-control" placeholder=" Enter Email Address" required >
                <br>
                Nid: <input name="nid" type="number" class="form-control" placeholder=" Enter Trainers NID Number " required >
                <br>
                Mobile No: <input name="mobile" type="number" class="form-control" placeholder=" Enter Trainers Mobile Number " required >
                <br>
                <div class="row">
                  <div class="col-md-6">
                         Enter Your Gender : 
                <div class="form-check">
                      <input class="form-check-input" type="radio" value="1" name="gender"checked>
                      <label class="form-check-label" > Male
                      </label>
                       &nbsp;&nbsp;

                      <input class="form-check-input" type="radio" value="2" name="gender" >
                      <label class="form-check-label" >
                       Female
                      </label>

                </div>
                

                </div>
                    <div class="col-md-6">
                        Bith Date: <input name="BirthDate" type="date" class="form-control" required > 
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-12">
                            <h5>Check Your Education:</h5>  
                         <div class="form-check">

                    <input type="checkbox" class="form-check-input" name="education[]" value="S.Sc"> S.Sc 
                    <input type="checkbox" class="form-check-input" name="education[]" value="H.Sc"> H.Sc 
                    <input type="checkbox" class="form-check-input" name="education[]" value="Honors"> Honours 
                    <input type="checkbox" class="form-check-input" name="education[]" value="Masters"> Masters 


                            
                          </div>
                      </div>
                     
                    <div class="col-md-12">
                        <h5>What is your blood group </h5>
                        <div class="form-check">
                      <input class="form-check-input" type="hidden" name="blood"  value="0" >
                      <input class="form-check-input" type="radio" name="blood"  value="1" >
                       <label class="form-check-label"> O (+)
                       </label>
                       &nbsp;&nbsp;

                      <input class="form-check-input" type="radio" name="blood"  value="2" >
                      <label class="form-check-label" >  O (-) </label>
                       &nbsp;&nbsp;

                      <input class="form-check-input" type="radio" name="blood"  value="3" >
                      <label class="form-check-label" >  A (+) </label>
                       &nbsp;&nbsp;

                      <input class="form-check-input" type="radio" name="blood"  value="4" >
                      <label class="form-check-label" >  A (-) </label>
                       &nbsp;&nbsp;

                      <input class="form-check-input" type="radio" name="blood"  value="5" >
                      <label class="form-check-label" >  B (+) </label>
                       &nbsp;&nbsp;

                      <input class="form-check-input" type="radio" name="blood"  value="6" >
                      <label class="form-check-label" >  B (-) </label>
                       &nbsp;&nbsp;

                      <input class="form-check-input" type="radio" name="blood"  value="7" >
                      <label class="form-check-label" >  AB (+) </label>
                       &nbsp;&nbsp;

                      <input class="form-check-input" type="radio" name="blood"  value="8" >
                      <label class="form-check-label" >  AB (-) </label>

                        </div>
                 </div>
                </div> 
                 
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Enter Your Adress : </label>
                    <textarea class="form-control" name="address" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>                
               
               	Image: <input type="file" name="image" class="form-control" placeholder="Enter the image">
				<br>

                <button type="submit" name="upload" class="btn btn-green" >Submit</button>

            </form>
            <br>
            
        </div>

    </div>
</div>
<!--/ form end =========================================================-->
<!--Footer-->
<footer id="footer" class="footer">
    <div class="container text-center">

        <ul class="social-links">

            <li>
                <a href="#" target="_blank">
                    <i class="fa fa-facebook fa-fw"></i>
                </a>
            </li>

            <li>
                <a href="#" target="_blank">
                    <i class="fa fa-google-plus fa-fw"></i>
                </a>
            </li>


            <li>
                <a href="#" target="_blank">
                    <i class="fa fa-linkedin fa-fw"></i>
                </a>
            </li>
        </ul>
        ©2021 Web Application Development with PHP and Frameworks (WDPF) . All rights reserved
        <div class="credits">
            Designed by <a href="../contact/code_finder.php">Mahbubur Rahman </a>
        </div>
    </div>
</footer>
<!-- Latest compiled and minified JavaScript -->
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/jquery.easing.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/javascript.js"></script>

<!--<script src="js/custom.js"></script>-->

</body>
</html>
