

<?php
//connection to database
 $db = @new mysqli("localhost", "root", "", "studentlibery");

//build query
$query = "SELECT * FROM `student` WHERE id = ".$_GET['id'];

//execute the query using php
foreach ($db->query($query) as $row){
    $student = $row;
    // var_dump($student);
}

?>
<?php require_once("Header_nav.php") ?>
<!--/ Navigation bar end =================================================-->

<!--work-shop details start ==========================================================-->

 <div class="container">   
 <div class="service-box text-center">
     <div class="pm-staff-profile">
              <img src="images/<?php echo $student['image'];?>" alt="" class="img-thumbnail img-squear" height="285px" width="535px" />
            </div>
 </div>
 <div class="row">
    <div class="col-md-12">
        <table class="table table-striped table-dark">
             <thead>
                <tr>
              <th scope="col" class="text-center">Field </th>
              <th scope="col">Detail </th>
            </tr>
          </thead>
          <tbody>
            <tr>

                <td scope="row" class=" text-success text-center">Sl No</td>
                <td scope="row" class="text-success"><?php echo $student['id'];?></td>
            </tr>

            <tr>
              <td scope="row" class="text-success text-center">Student Name</td>
              <td scope="row" class="text-success"> <?php echo $student['FullName'];?> </td>
            </tr>
            <tr>
              <td scope="row" class="text-success text-center">Father's Name</td>
              <td scope="row" class="text-success"> <?php echo $student['FatherName'];?> </td>
            </tr>
            <tr>
              <td scope="row" class="text-success text-center">Mother's Name</td>
              <td scope="row" class="text-success"> <?php echo $student['MotherName'];?> </td>
            </tr>
            <tr>
              <td scope="row" class="text-success text-center">Gender</td>
              <td scope="row" class="text-success "> <?php
              if ($student['Gender']== 1) {echo "Male"; }else{ echo "Female";} ?> </td>
            </tr>
            <tr>
              <td scope="row" class="text-success text-center">Birth Date</td>
              <td scope="row"><?php echo $student['BithDate'];?></td>
            </tr>
            <tr>
              <td scope="row" class="text-success text-center">Education</td>
              <td scope="row"><?php echo $student['Education'];?></td>
            </tr>
            <tr>
              <td scope="row" class="text-success text-center">Email</td>
              <td scope="row"><?php echo $student['email'];?></td>
            </tr>
            <tr>
              <td scope="row" class="text-success text-center">Nid</td>
              <td scope="row"><?php echo $student['Nid'];?></td>
            </tr>
            <tr>
              <td scope="row" class="text-success text-center">Mobile</td>
              <td scope="row"><?php echo $student['Mobile'];?></td>
            </tr>
            <tr>
              <td scope="row" class="text-success text-center">Blood Group</td>
              <td scope="row"><?php 
                  if ($student['BloodGroup'] == 1) {
                      echo "O (+)";
                  }elseif($student['BloodGroup'] == 2){
                      echo "O (-)";
                  }elseif($student['BloodGroup'] == 3){
                      echo "A (+)";
                  }elseif($student['BloodGroup'] == 4){
                      echo "A (-)";
                  }elseif($student['BloodGroup'] == 5){
                      echo "B (+)";
                  }elseif($student['BloodGroup'] == 6){
                      echo "B (-)";
                  }elseif($student['BloodGroup'] == 7){
                      echo "AB (+)";
                  }elseif($student['BloodGroup'] == 8){
                      echo "AB (-)";
                  }elseif($student['BloodGroup'] == ""){
                      echo "Null";
                  }

                   ?>
                       
                </td>
            </tr>
            <tr>
              <td scope="row" class="text-success text-center">Adress</td>
              <td scope="row"><?php echo $student['Adress'];?></td>
            </tr>
        </tbody>
        </table>
        
    </div>
</div>
</div>
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
<?php require_once("Fotter.php") ?>