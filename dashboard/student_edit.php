<?php

// connection to db
    $mysqli = @new mysqli("localhost", "root", "", "studentlibery");

//build query
$query = "SELECT * FROM `student` WHERE id = ".$_GET['id'];

//execute the query using php
foreach ($mysqli->query($query) as $row){
    $student = $row;
}
 $divide = explode(",",$student["Education"]);

$img = $student['image'];
// echo $img;

// print_r($student);
// print_r($divide);
// var_dump($divide);


?>

<?php require_once("header.php"); ?>
<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Creative Tim
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item  ">
            <a class="nav-link" href="index.php">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item active ">
            <a class="nav-link" href="students_view.php">
              <i class="fa fa-user"></i>
              <p>All Student Profile</p>
            </a>
             
          </li>
          </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <?php require_once("NavBar.php"); ?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">

          <div class="row">
                <a class="btn btn-primary mt-3" href="students_view.php"> View All Student</a>
          <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Edit Profile</h4>
                  <p class="card-category">Complete your profile</p>
                </div>

                <div class="card-body">                  
                   <form action="students_edit_done.php" method="post" enctype="multipart/form-data">

                     <div class="row">
                      <div class="col-md-4">
                        <input type="hidden" class="form-control" name="id" placeholder="ID"
                           value="<?php echo $student['id'];?>">
                        <div class="form-group">
                          <label class="bmd-label-floating">Full Name</label>
                          <input type="text" name="FullName" value="<?php echo $student['FullName'];?>" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Father's Name</label>
                          <input type="text" name="FatherName" value="<?php echo $student['FatherName'];?>" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Mothers's Name</label>
                          <input type="text"  name="MotherName" value="<?php echo $student['MotherName'];?>" class="form-control">
                        </div>
                      </div>
                    </div>
                  <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Email Adress</label>
                          <input type="email"name="emails"  value="<?php echo $student['email'];?>" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">National Id</label>
                          <input type="number"name="nid" value="<?php echo $student['Nid'];?>" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Mobile Number</label>
                          <input type="number" name="mobile" value="<?php echo $student['Mobile'];?>" class="form-control">
                        </div>
                      </div>
                    </div>              
               

                
                <div class="row">
                   <div class="col-md-4">
                         <label class="bmd-label-floating" > Enter Your Gender</label>
                        <div class="form-group">
                          <input class="form-check-input ml-3" type="radio" value="1" name="gender" <?php
                              if ($student['Gender']== 1) {
                                  echo "checked";
                              }?> >
                          <label class="form-check-label ml-5" > Male</label>

                      <input class="form-check-input ml-3" type="radio" value="2" <?php
                              if ($student['Gender']== 2) {
                                  echo "checked";
                              }?> name="gender" >
                      <label class="form-check-label ml-5" >Female </label>
                            
                        </div>
                    </div>                
                    <div class="col-md-4">
                      <div class="form-group">
                        Birth Date: <input name="BirthDate" value="<?=$student['BithDate'];?>"  type="date" class="form-control" required > 
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                         <label class="bmd-label-floating" > Check Your Education</label> <br>
                         
                        <div class="form-check form-check-inline">
                        <label class="form-check-label">
                       
                          <input class="form-check-input" name="education[]"<?php if (in_array("S.Sc",$divide)) { echo "checked";}?>  type="checkbox"  value="S.Sc"> S.Sc
                          <span class="form-check-sign">
                              <span class="check"></span>
                          </span>
                        </label>
                        </div>
                        <div class="form-check form-check-inline">
                        <label class="form-check-label">
                          <input class="form-check-input" name="education[]" <?php if (in_array("H.Sc",$divide)) { echo "checked";}?> type="checkbox"  value="H.Sc"> H.Sc
                          <span class="form-check-sign">
                              <span class="check"></span>
                          </span>
                        </label>
                        </div>
                        <div class="form-check form-check-inline">
                        <label class="form-check-label">
                          <input class="form-check-input" name="education[]" <?php if (in_array("Honors",$divide)) { echo "checked";}?> type="checkbox"  value="Honurs"> Honurs
                          <span class="form-check-sign">
                              <span class="check"></span>
                          </span>
                        </label>
                        </div>
                        <div class="form-check form-check-inline">
                        <label class="form-check-label">
                          <input class="form-check-input" name="education[]" <?php if (in_array("Masters",$divide)) { echo "checked";}?> type="checkbox" value="Masters"> Masters
                          <span class="form-check-sign">
                              <span class="check"></span>
                          </span>
                        </label>
                        </div>                     
                      </div>
                    </div>
                  </div>              
                
                <div class="row">
                  <div class="col-md-6">
                      <label class="bmd-label-floating" > Enter Your Gender</label>
                     <div class="form-group">
                          <input class="form-check-input ml-3" type="radio" value="1" name="blood" <?php
                              if ($student['BloodGroup']== 1) {
                                  echo "checked";
                              }?> >
                          <label class="form-check-label ml-5" > O (+)</label>
                          <input class="form-check-input ml-3" type="radio" value="2" <?php
                              if ($student['BloodGroup']== 2) {
                                  echo "checked";
                              }?> name="blood" >
                          <label class="form-check-label ml-5" >O (-) </label>
                          <input class="form-check-input ml-3" type="radio" value="3" <?php
                              if ($student['BloodGroup']== 3) {
                                  echo "checked";
                              }?> name="blood" >
                          <label class="form-check-label ml-5" >A (+) </label>
                          <input class="form-check-input ml-3" type="radio" value="4" <?php
                              if ($student['BloodGroup']== 4) {
                                  echo "checked";
                              }?> name="blood" >
                          <label class="form-check-label ml-5" >A (-) </label>
                          <input class="form-check-input ml-3" type="radio" value="5" <?php
                              if ($student['BloodGroup']== 5) {
                                  echo "checked";
                              }?> name="blood" >
                          <label class="form-check-label ml-5" >B (+) </label>
                          <input class="form-check-input ml-3" type="radio" value="6" <?php
                              if ($student['BloodGroup']== 6) {
                                  echo "checked";
                              }?> name="blood" >
                          <label class="form-check-label ml-5" >B (-) </label>
                          <input class="form-check-input ml-3" type="radio" value="7" <?php
                              if ($student['BloodGroup']== 7) {
                                  echo "checked";
                              }?> name="blood" >
                          <label class="form-check-label ml-5" >AB (+) </label>
                          <input class="form-check-input ml-3" type="radio" value="8" <?php
                              if ($student['BloodGroup']== 8) {
                                  echo "checked";
                              }?> name="blood" >
                          <label class="form-check-label ml-5" >AB (-) </label>
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                       <input type="hidden" name="image" value="<?php echo $img; ?>">
                Image: <input type="file" name="image"  class="form-control" placeholder="Enter the image">
                <br>
                    </div>
                  </div>
                 

                 <div class="row">
                   <div class="col-md-12">
                       <div class="form-group">
                    <label for="exampleFormControlTextarea1">Enter Your Adress : </label>
                    <textarea  class="form-control" name="address" id="exampleFormControlTextarea1" rows="3"><?php echo $student['Adress'];?>
                    </textarea>
                </div>  
                   </div>
                 </div>                                
                  </div> 
                  <button type="submit" name="upload" class="btn btn-primary pull-right">Update Profile</button>

            </form>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
     <?php require_once("Fotter.php"); ?>
    </div>
  </div>
 
  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery.min.js"></script>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Plugin for the momentJs  -->
  <script src="assets/js/plugins/moment.min.js"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="assets/js/plugins/sweetalert2.js"></script>
  <!-- Forms Validations Plugin -->
  <script src="assets/js/plugins/jquery.validate.min.js"></script>
  <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="assets/js/plugins/jquery.bootstrap-wizard.js"></script>
  <!--  Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="assets/js/plugins/bootstrap-selectpicker.js"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script src="assets/js/plugins/jquery.dataTables.min.js"></script>
  <!--  Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="assets/js/plugins/bootstrap-tagsinput.js"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="assets/js/plugins/jasny-bootstrap.min.js"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="assets/js/plugins/fullcalendar.min.js"></script>
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="assets/js/plugins/jquery-jvectormap.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="assets/js/plugins/nouislider.min.js"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <!-- Library for adding dinamically elements -->
  <script src="assets/js/plugins/arrive.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/material-dashboard.js?v=2.1.2" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

        if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
          if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
            $('.fixed-plugin .dropdown').addClass('open');
          }

        }

        $('.fixed-plugin a').click(function(event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .active-color span').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
          }
        });

        $('.fixed-plugin .background-color .badge').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('background-color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });

        $('.fixed-plugin .img-holder').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');


          var new_image = $(this).find("img").attr('src');

          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function() {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }

          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function() {
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
        });

        $('.switch-sidebar-image input').change(function() {
          $full_page_background = $('.full-page-background');

          $input = $(this);

          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }

            background_image = false;
          }
        });

        $('.switch-sidebar-mini input').change(function() {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

          } else {

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

            setTimeout(function() {
              $('body').addClass('sidebar-mini');

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
    });
  </script>
</body>

</html>