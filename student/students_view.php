<?php
//connection to database
 $db = @new mysqli("localhost", "root", "", "studentlibery");

//building query
$query = "SELECT * FROM `student` ORDER BY id";


?>
<?php require_once("Header_nav.php") ?>
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
                    <div class="col-md-12">
                        
                        <table class="table table-striped table-dark">
                          <thead>
                            <tr>
                              <th scope="col">Sl No</th>
                              <th scope="col">Full Name</th>
                              <th scope="col">Father's Name</th>
                              <th scope="col">Mother's Name</th>
                              <th scope="col">Gender</th>
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
                            <?php foreach ($db->query($query) as $student):
                    ?>
                            <tr>
                              <td scope="row" class="text-success"><?php echo $student['id'];?></td>
                              <td scope="row"> <a href="students_details.php?id=<?php echo $student['id'];?>"> <?php echo $student['FullName'];?></a> </td>
                              <td scope="row"><?php echo $student['FatherName'];?></td>
                              <td scope="row"><?php echo $student['MotherName'];?></td>
                              <td scope="row"><?php
                              if ($student['Gender']== 1) {
                                  echo "Male";
                              }else{
                                  echo "Female";

                              } ?></td>
                              <td scope="row"><?php echo $student['BithDate'];?></td>
                              <td scope="row"><?php echo $student['Education'];?></td>
                              <td scope="row"><?php echo $student['email'];?></td>
                              <td scope="row"><?php echo $student['Nid'];?></td>
                              <td scope="row"><?php echo $student['Mobile'];?></td>
                              <td scope="row">
                                  <?php 
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
                              <td scope="row"><img class="rounded-circle" src ="images/<?php echo $student['image'];?> "height="100px" width="100px" ></td>
                              <td colspan="2">
                                  <a href="students_edit.php?id=<?php echo $student['id'];?>" class="btn btn-primary"> Edit</a>
                                     <a href="students_delete.php?id=<?php echo $student['id'];?>" class="btn btn-danger" > Delete</a>
                                     
                                  
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
<?php require_once("Fotter.php") ?>