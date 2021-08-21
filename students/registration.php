<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SEIP Database Management</title>
    <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
    <meta name="keywords"
          content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
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
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
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
                <li><a href="../index.php">Home <span class="sr-only">(current)</span></a></li>
                <li class="active"><a href="registration.php">Registration</a></li>
                <li><a href="../contact/contact_us.php">Contact US</a>

                    <?php
                    session_start();
                    error_reporting(E_ALL & ~E_NOTICE);
                    if($_SESSION["user"] != '')
                    {
                        echo "<li><a href='../log/log_out.php'>Log Out</a></li>";

                    }
                    else{
                        echo "<li class=\"dropdown\">
                                  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Log In <span class=\"caret\"></span></a>
                                  <ul class=\"dropdown-menu\">
                                      <li><a href=\"../log/log_in_admin.php\">Log in as Admin</a></li>
                                      <li role=\"presentation\" class=\"divider\"></li>
                                      <li><a href=\"../log/log_in_student.php\">Log in as Student</a></li>
                                  </ul>
                              </li>";

                    }

                    ?>

            </ul>
        </div>
    </div>
</nav>
<!--/ Navigation bar end =================================================-->

<!--  form-->
<div class="container">
    <div class="row">

        <form class="form-horizontal" action="registration_manage.php" method="post">
            <fieldset style="border: solid rgba(25,128,126,0.73) 2px"><h3>Registration Form For SEIP Training:</h3>
                <div class="form-group">
                    <label for="course_1" class="col-sm-2 control-label">First Preference: </label>
                    <div class="col-sm-6">
                        <select class="form-control" id="course_1" name="course_1" type="text">
                            <option value="Affiliate Marketing">Affiliate Marketing</option>
                            <option value="Web App Develop- PHP">Web App Develop-PHP</option>
                            <option value="Digital Marketing Course">Digital Marketing Course</option>
                            <option value="Mobile App Develop">Mobile App Develop</option>
                            <option value="Graphics & Web UI design">Graphics & Web UI design</option>
                            <option value="Web design">Web design</option>
                            <option value="Practical SEO">Practical SEO</option>
                            <option value="8">Web App Develop-Dot Net</option>
<!--                            <option value="9">Customer Support & Service</option>-->
<!--                            <option value="10">IT Sales</option>-->
<!--                            <option value="11">IT support Technical</option>-->
<!--                            <option value="12">Server Administration & Cloud Management</option>-->
<!--                            <option value="13">English & business Communication</option>-->
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="course_2" class="col-sm-2 control-label">Second Preference: </label>
                    <div class="col-sm-6">
                        <select class="form-control" id="course_2" name="course_2" type="text">
                            <option value="Affiliate Marketing">Affiliate Marketing</option>
                            <option value="Web App Develop- PHP">Web App Develop-PHP</option>
                            <option value="Digital Marketing Course">Digital Marketing Course</option>
                            <option value="Mobile App Develop">Mobile App Develop</option>
                            <option value="Graphics & Web UI design">Graphics & Web UI design</option>
                            <option value="Web design">Web design</option>
                            <option value="Practical SEO">Practical SEO</option>
                            <option value="8">Web App Develop-Dot Net</option>
                            <!-- <option value="9">Customer Support & Service</option>-->
                            <!--  <option value="10">IT Sales</option>-->
                            <!-- <option value="11">IT support Technical</option>-->
                            <!-- <option value="12">Server Administration & Cloud Management</option>-->
                            <!-- <option value="13">English & business Communication</option>-->
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="course_3" class="col-sm-2 control-label">Third Preference: </label>
                    <div class="col-sm-6">
                        <select class="form-control" id="course_3" name="course_3" type="text">
                            <option value="Affiliate Marketing">Affiliate Marketing</option>
                            <option value="Web App Develop- PHP">Web App Develop-PHP</option>
                            <option value="Digital Marketing Course">Digital Marketing Course</option>
                            <option value="Mobile App Develop">Mobile App Develop</option>
                            <option value="Graphics & Web UI design">Graphics & Web UI design</option>
                            <option value="Web design">Web design</option>
                            <option value="Practical SEO">Practical SEO</option>
                            <option value="8">Web App Develop-Dot Net</option>
                            <!-- <option value="9">Customer Support & Service</option>-->
                            <!-- <option value="10">IT Sales</option>-->
                            <!-- <option value="11">IT support Technical</option>-->
                            <!-- <option value="12">Server Administration & Cloud Management</option>-->
                            <!-- <option value="13">English & business Communication</option>-->
                        </select>
                    </div>
                </div>
            </fieldset>
            <br>
            <fieldset style="border: solid #19807e 2px"><h3>Student Details</h3>
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Name: </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="father_name" class="col-sm-2 control-label">Father Name: </label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="father_name" name="father_name"
                               placeholder="Father's Name" required>
                    </div>
                    <label for="mother_name" class="col-sm-2 control-label">Mother Name: </label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="mother_name" name="mother_name"
                               placeholder="Mother's Name" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="gender" class="col-sm-2 control-label">Gender: </label>
                    <div class="col-sm-3">
                        <select class="form-control" id="gender" name="gender">
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </div>
                    <label for="nid" class="col-sm-2 control-label">NID Number: </label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="nid" name="nid"
                               placeholder="1234567890" required>
                    </div>
                </div>



<!--                <div class="form-group">-->
<!--                    <label for="birth_certificate" class="col-sm-2 control-label">Birth Certificate No: </label>-->
<!--                    <div class="col-sm-3">-->
<!--                        <input type="text" class="form-control" id="birth_certificate" name="birth_certificate"-->
<!--                               placeholder="Birth Certificate Number">-->
<!--                    </div>-->
<!--                    <label for="passport" class="col-sm-2 control-label">Other Valid ID: </label>-->
<!--                    <div class="col-sm-3">-->
<!--                        <input type="text" class="form-control" id="passport" name="passport"-->
<!--                               placeholder="Passport Number">-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="form-group">-->
<!--                    <label for="dob" class="col-sm-2 control-label">Date Of Birth: </label>-->
<!--                    <div class="col-sm-3">-->
<!--                        <input type="date" class="form-control" id="dob" name="dob">-->
<!--                    </div>-->
<!--                    <label for="religion" class="col-sm-2 control-label">Select Religion: </label>-->
<!--                    <div class="col-sm-3">-->
<!--                        <select class="form-control" id="religion" name="religion">-->
<!--                            <option value="Islam">Islam</option>-->
<!--                            <option value="Hinduism">Hinduism</option>-->
<!--                            <option value="Christianity">Christianity</option>-->
<!--                            <option value="Buddhist">Buddhist</option>-->
<!--                        </select>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="form-group">-->
<!--                    <label for="ethnic_group" class="col-sm-2 control-label">Select Ethnic Group: </label>-->
<!--                    <div class="col-sm-3">-->
<!--                        <select name="ethnic_group" id="ethnic_group" class="form-control">-->
<!--                            <option value="">Ethnic Group</option>-->
<!--                            <option value="Armenian community of Dhaka">Armenian community of Dhaka</option>-->
<!--                            <option value="Armenians in Bangladesh">Armenians in Bangladesh</option>-->
<!--                            <option value="Bagdi caste">Bagdi caste</option>-->
<!--                            <option value="Bom people">Bom people</option>-->
<!--                            <option value="Bede people">Bede people</option>-->
<!--                            <option value="Bedia (Muslim caste)">Bedia (Muslim caste)</option>-->
<!--                            <option value="Bengali Hindus">Bengali Hindus</option>-->
<!--                            <option value="Bengali Muslims">Bengali Muslims</option>-->
<!--                            <option value="Bengali people">Bengali people</option>-->
<!--                            <option value="Bihari Muslims">Bihari Muslims</option>-->
<!--                            <option value="Bihari people">Bihari people</option>-->
<!--                            <option value="Buno people">Buno people</option>-->
<!--                            <option value="Chak people">Chak people</option>-->
<!--                            <option value="Chakma people">Chakma people</option>-->
<!--                            <option value="Chinese people in Bangladesh">Chinese people in Bangladesh</option>-->
<!--                            <option value="Dhanuk">Dhanuk</option>-->
<!--                            <option value="Garo people">Garo people</option>-->
<!--                            <option value="Indians in Bangladesh">Indians in Bangladesh</option>-->
<!--                            <option value="Indigenous peoples in Bangladesh">Indigenous peoples in Bangladesh</option>-->
<!--                            <option value="Jumma people">Jumma people</option>-->
<!--                            <option value="Kan (tribe)">Kan (tribe)</option>-->
<!--                            <option value="Khasi people">Khasi people</option>-->
<!--                            <option value="Khumi people">Khumi people</option>-->
<!--                            <option value="Khyang people">Khyang people</option>-->
<!--                            <option value="Kuki Inpi">Kuki Inpi</option>-->
<!--                            <option value="Kuki people">Kuki people</option>-->
<!--                            <option value="Kurukh people">Kurukh people</option>-->
<!--                            <option value="Lushei tribe">Lushei tribe</option>-->
<!--                            <option value="Mahle people">Mahle people</option>-->
<!--                            <option value="Maimal">Maimal</option>-->
<!--                            <option value="Mustafa Majid">Mustafa Majid</option>-->
<!--                            <option value="Mal Muslim">Mal Muslim</option>-->
<!--                            <option value="Marma people">Marma people</option>-->
<!--                            <option value="Mro people">Mro people</option>-->
<!--                            <option value="Munda people">Munda people</option>-->
<!--                            <option value="Murang people">Murang people</option>-->
<!--                            <option value="Naulak">Naulak</option>-->
<!--                            <option value="Nepalis in Bangladesh">Nepalis in Bangladesh</option>-->
<!--                            <option value="Pankho people">Pankho people</option>-->
<!--                            <option value="Rakhine people, Bangladesh">Rakhine people, Bangladesh</option>-->
<!--                            <option value="Rohingya people">Rohingya people</option>-->
<!--                            <option value="Santhal people">Santhal people</option>-->
<!--                            <option value="Stranded Pakistanis">Stranded Pakistanis</option>-->
<!--                            <option value="Tanchangya people">Tanchangya people</option>-->
<!--                            <option value="Thadou people">Thadou people</option>-->
<!--                            <option value="Template:Tribes of Bangladesh">Template:Tribes of Bangladesh</option>-->
<!--                            <option value="Tripuri people">Tripuri people</option>-->
<!--                            <option value="Vaiphei people">Vaiphei people</option>-->
<!--                            <option value="Zo people">Zo people</option>-->
<!--                            <option value="Zomi nationalism">Zomi nationalism</option>-->
<!--                        </select>-->
<!--                    </div>-->
<!--                    <label for="mobile" class="col-sm-2 control-label">Mobile Number: </label>-->
<!--                    <div class="col-sm-3">-->
<!--                        <input type="text" class="form-control" id="mobile" name="mobile" placeholder="+8801xxxxxxxxx">-->
<!--                    </div>-->
<!--                </div>-->
                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Enter Email Address: </label>
                    <div class="col-sm-6">
                        <input type="email" class="form-control" id="email" name="email" placeholder="abc@example.com">
                    </div>
                </div>
<!--                <div class="form-group">-->
<!--                    <label for="is_employeed" class="col-sm-2 control-label">Is Employee?: </label>-->
<!--                    <div class="col-sm-3">-->
<!--                        <label class="radio-inline">-->
<!--                            <input type="radio" name="is_employeed" value="Yes"> Yes-->
<!--                        </label>-->
<!--                        <label class="radio-inline">-->
<!--                            <input type="radio" name="is_employeed" value="No"> No-->
<!--                        </label>-->
<!--                    </div>-->
<!--                    <label for="monthly_income" class="col-sm-2 control-label">Monthly Income: </label>-->
<!--                    <div class="col-sm-3">-->
<!--                        <input type="number" class="form-control" id="monthly_income" name="monthly_income">-->
<!--                    </div>-->
<!--                </div>-->
            </fieldset>
            <br>
<!--            <fieldset style="border: solid #19807e 2px"><h3>Present Address:</h3>-->
<!--                <div class="form-group">-->
<!--                    <label for="present_address" class="col-sm-2 control-label">Address: </label>-->
<!--                    <div class="col-sm-6">-->
<!--                        <input type="text" class="form-control" id="present_address" name="present_address"-->
<!--                               placeholder="House No, Holding No, Village, Road No">-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="form-group">-->
<!--                    <label for="present_city" class="col-sm-2 control-label">City: </label>-->
<!--                    <div class="col-sm-3">-->
<!--                        <input type="text" class="form-control" id="present_city" name="present_city"-->
<!--                               placeholder="Enter Your City">-->
<!--                    </div>-->
<!--                    <label for="present_postcode" class="col-sm-2 control-label">Post Code: </label>-->
<!--                    <div class="col-sm-3">-->
<!--                        <input type="text" class="form-control" id="present_postcode" name="present_postcode"-->
<!--                               placeholder="Enter Your Post Code">-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="form-group">-->
<!--                    <label for="presentdivision" class="col-sm-2 control-label">Division: </label>-->
<!--                    <div class="col-sm-2">-->
<!--                        <select class="form-control" id="presentdivision" name="presentdivision">-->
<!--                            <option>Dhaka</option>-->
<!--                            <option>Rajshahi</option>-->
<!--                            <option>Rangpur</option>-->
<!--                        </select>-->
<!--                    </div>-->
<!--                    <label for="presentdistrict" class="col-sm-2 control-label">District: </label>-->
<!--                    <div class="col-sm-2">-->
<!--                        <select class="form-control" id="presentdistrict" name="presentdistrict">-->
<!--                            <option>Gopalgonj</option>-->
<!--                            <option>Faridpur</option>-->
<!--                            <option>Madaripur</option>-->
<!--                            <option>Shariatpur</option>-->
<!--                            <option>Rajbari</option>-->
<!--                        </select>-->
<!--                    </div>-->
<!--                    <label for="presentsubdistrict" class="col-sm-2 control-label">Sub-District: </label>-->
<!--                    <div class="col-sm-2">-->
<!--                        <select class="form-control" id="presentsubdistrict" name="presentsubdistrict">-->
<!--                            <option>Gopalgonj Sadar</option>-->
<!--                            <option>Muksudpur</option>-->
<!--                            <option>Kotalipara</option>-->
<!--                            <option>Kashiani</option>-->
<!--                        </select>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </fieldset>-->
            <br>
<!--            <fieldset style="border: solid #19807e 2px"><h3>Permanent Address:</h3>-->
<!--                <div class="form-group">-->
<!--                    <label for="permanent_address" class="col-sm-2 control-label">Address: </label>-->
<!--                    <div class="col-sm-6">-->
<!--                        <input type="text" class="form-control" id="permanent_address" name="permanent_address"-->
<!--                               placeholder="House No, Holding No, Village, Road No">-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="form-group">-->
<!--                    <label for="permanent_city" class="col-sm-2 control-label">City: </label>-->
<!--                    <div class="col-sm-3">-->
<!--                        <input type="text" class="form-control" id="permanent_city" name="permanent_city"-->
<!--                               placeholder="Enter Your City">-->
<!--                    </div>-->
<!--                    <label for="permanent_postcode" class="col-sm-2 control-label">Post Code: </label>-->
<!--                    <div class="col-sm-3">-->
<!--                        <input type="text" class="form-control" id="permanent_postcode" name="permanent_postcode"-->
<!--                               placeholder="Enter Your Post Code">-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="form-group">-->
<!--                    <label for="permanentdivision" class="col-sm-2 control-label">Division: </label>-->
<!--                    <div class="col-sm-2">-->
<!--                        <select class="form-control" id="permanentdivision" name="permanentdivision">-->
<!--                            <option>Dhaka</option>-->
<!--                            <option>Rajshahi</option>-->
<!--                            <option>Rangpur</option>-->
<!--                        </select>-->
<!--                    </div>-->
<!--                    <label for="permanentdistrict" class="col-sm-2 control-label">District: </label>-->
<!--                    <div class="col-sm-2">-->
<!--                        <select class="form-control" id="permanentdistrict" name="permanentdistrict">-->
<!--                            <option>Gopalgonj</option>-->
<!--                            <option>Faridpur</option>-->
<!--                            <option>Madaripur</option>-->
<!--                            <option>Shariatpur</option>-->
<!--                            <option>Rajbari</option>-->
<!--                        </select>-->
<!--                    </div>-->
<!--                    <label for="permanentsubdistrict" class="col-sm-2 control-label">Sub-District: </label>-->
<!--                    <div class="col-sm-2">-->
<!--                        <select class="form-control" id="permanentsubdistrict" name="permanentsubdistrict">-->
<!--                            <option>Gopalgonj Sadar</option>-->
<!--                            <option>Muksudpur</option>-->
<!--                            <option>Kotalipara</option>-->
<!--                            <option>Kashiani</option>-->
<!--                        </select>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </fieldset>-->
            <br>
<!--            <fieldset style="border: solid #19807e 2px"><h3>SSC or Equivalent:</h3>-->
<!--                <div class="form-group">-->
<!--                    <label for="ssc_board" class="col-sm-2 control-label">Board: </label>-->
<!--                    <div class="col-sm-2">-->
<!--                        <input type="text" class="form-control" id="ssc_board" name="ssc_board" placeholder="SSC Board">-->
<!--                    </div>-->
<!--                    <label for="ssc_institute" class="col-sm-2 control-label">Institute: </label>-->
<!--                    <div class="col-sm-2">-->
<!--                        <input type="text" class="form-control" id="ssc_institute" name="ssc_institute"-->
<!--                               placeholder="SSC Institute">-->
<!--                    </div>-->
<!--                    <label for="ssc_subject" class="col-sm-2 control-label">Subject: </label>-->
<!--                    <div class="col-sm-2">-->
<!--                        <input type="text" class="form-control" id="ssc_subject" name="ssc_subject"-->
<!--                               placeholder="SSC Subject">-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="form-group">-->
<!--                    <label for="ssc_year" class="col-sm-2 control-label">Year: </label>-->
<!--                    <div class="col-sm-2">-->
<!--                        <input type="text" class="form-control" id="ssc_year" name="ssc_year" placeholder="SSC Year">-->
<!--                    </div>-->
<!--                    <label for="ssc_roll" class="col-sm-2 control-label">Role Number: </label>-->
<!--                    <div class="col-sm-2">-->
<!--                        <input type="text" class="form-control" id="ssc_roll" name="ssc_roll" placeholder="SSC Roll">-->
<!--                    </div>-->
<!--                    <label for="ssc_result" class="col-sm-2 control-label">Result: </label>-->
<!--                    <div class="col-sm-2">-->
<!--                        <input type="text" class="form-control" id="ssc_result" name="ssc_result"-->
<!--                               placeholder="SSC Result">-->
<!--                    </div>-->
<!--                </div>-->
<!--            </fieldset>-->
            <br>
<!--            <fieldset style="border: solid #19807e 2px"><h3>HSC or Equivalent:</h3>-->
<!--                <div class="form-group">-->
<!--                    <label for="hsc_board" class="col-sm-2 control-label">Board: </label>-->
<!--                    <div class="col-sm-2">-->
<!--                        <input type="text" class="form-control" id="hsc_board" name="hsc_board" placeholder="HSC Board">-->
<!--                    </div>-->
<!--                    <label for="hsc_institute" class="col-sm-2 control-label">Institute: </label>-->
<!--                    <div class="col-sm-2">-->
<!--                        <input type="text" class="form-control" id="hsc_institute" name="hsc_institute"-->
<!--                               placeholder="HSC Institute">-->
<!--                    </div>-->
<!--                    <label for="hsc_subject" class="col-sm-2 control-label">Subject: </label>-->
<!--                    <div class="col-sm-2">-->
<!--                        <input type="text" class="form-control" id="hsc_subject" name="hsc_subject"-->
<!--                               placeholder="HSC Subject">-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="form-group">-->
<!--                    <label for="hsc_year" class="col-sm-2 control-label">Year: </label>-->
<!--                    <div class="col-sm-2">-->
<!--                        <input type="text" class="form-control" id="hsc_year" name="hsc_year" placeholder="HSC Year">-->
<!--                    </div>-->
<!--                    <label for="hsc_roll" class="col-sm-2 control-label">Role Number: </label>-->
<!--                    <div class="col-sm-2">-->
<!--                        <input type="text" class="form-control" id="hsc_roll" name="hsc_roll" placeholder="HSC Roll">-->
<!--                    </div>-->
<!--                    <label for="hsc_result" class="col-sm-2 control-label">Result: </label>-->
<!--                    <div class="col-sm-2">-->
<!--                        <input type="text" class="form-control" id="hsc_result" name="hsc_result"-->
<!--                               placeholder="HSC Result">-->
<!--                    </div>-->
<!--                </div>-->
<!--            </fieldset>-->
            <br>
<!--            <fieldset style="border: solid #19807e 2px"><h3>Highest Academic Achievement:</h3>-->
<!--                <div class="form-group">-->
<!--                    <label for="highest_education" class="col-sm-2 control-label">Level of Education: </label>-->
<!--                    <div class="col-sm-2">-->
<!--                        <input type="text" class="form-control" id="highest_education" name="highest_education"-->
<!--                               placeholder="Highest Education Level">-->
<!--                    </div>-->
<!--                    <label for="highest_institute" class="col-sm-2 control-label">Institute: </label>-->
<!--                    <div class="col-sm-2">-->
<!--                        <input type="text" class="form-control" id="highest_institute" name="highest_institute"-->
<!--                               placeholder="Highest Education Institute">-->
<!--                    </div>-->
<!--                    <label for="highest_subject" class="col-sm-2 control-label">Subject: </label>-->
<!--                    <div class="col-sm-2">-->
<!--                        <input type="text" class="form-control" id="highest_subject" name="highest_subject"-->
<!--                               placeholder="Highest Education Subject">-->
<!--                    </div>-->
<!--                </div>-->
<!--            </fieldset>-->
<!--            <br>-->
<!--            <fieldset style="border: solid #19807e 2px">-->
<!--                <h3>Photo:</h3>-->
<!--                <input type="file" name="image" id="image">-->
<!--                <h4>Image Size Should be 300X300 (Max 100KB) in JPG Format</h4>-->
<!--            </fieldset>-->
<!--            <br>-->
            <button type="reset" class="btn btn-primary">Reset</button>
            <button type="submit" class="btn btn-green">Submit</button>
        </form>
        <br>
    </div>
</div>

<!--Footer-->
<footer id="footer" class="footer">
    <div class="container text-center">
        <!--      <h2 class="text-success">What are you waiting for!</h2>-->
        <!--      <h3 class="text-success">Start Your Course Now! Become a part of BITM</h3>-->
        <!-- <form class="mc-trial row">
          <div class="form-group col-md-3 col-md-offset-2 col-sm-4">
            <div class=" controls">
              <input name="name" placeholder="Enter Your Name" class="form-control" type="text">
            </div>
          </div>
          <div class="form-group col-md-3 col-sm-4">
            <div class=" controls">
              <input name="EMAIL" placeholder="Enter Your email" class="form-control" type="email">
            </div>
          </div>
          <div class="col-md-2 col-sm-4">
            <p>
              <button name="submit" type="submit" class="btn btn-block btn-submit">
              Submit <i class="fa fa-arrow-right"></i></button>
            </p>
          </div>
        </form> -->
        <ul class="social-links">
            <!-- <li><a href="#link"><i class="fa fa-twitter fa-fw"></i></a></li> -->

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

            <!-- <li><a href="#link"><i class="fa fa-dribbble fa-fw"></i></a></li> -->

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

</body>
</html>
