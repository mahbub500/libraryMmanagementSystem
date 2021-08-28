<?php

// connection to db
    $mysqli = @new mysqli("localhost", "root", "", "studentlibery");

//build query
$query = "SELECT * FROM `student` WHERE id = ".$_GET['id'];

//execute the query using php
foreach ($mysqli->query($query) as $row){
    $student = $row;
}
$img = $student['image'];
// echo $img;

// print_r($student);


?>

<?php require_once("Header_nav.php") ?>

<!-- edit form begin =========================================================-->
<div class="container">

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="header-section text-center">
                <h2>Edit Trainer's Information</h2>
                
              <hr class="bottom-line">
            </div>
            <form action="students_edit_done.php" method="post" enctype="multipart/form-data">
              		<input type="hidden" class="form-control" name="id" placeholder="ID"
                           value="<?php echo $student['id'];?>">
                Name: <input name="FullName" type="text" value="<?php echo $student['FullName'];?>" class="form-control" placeholder=" Enter Name"  required >
                <br>
                Father's Name: <input name="FatherName" type="text" value="<?php echo $student['FatherName'];?>" class="form-control" placeholder=" Enter Name"  required >
                <br>
                Mother's Name: <input name="MotherName" type="text" value="<?php echo $student['MotherName'];?>" class="form-control" placeholder=" Enter Name"  required >
                <br>
                Email: <input name="emails" type="email" value="<?=$student['email'];?>" class="form-control" placeholder=" Enter Email Address" required >
                <br>
                Nid: <input name="nid" type="number" class="form-control" value="<?=$student['Nid'];?>"  placeholder=" Enter Trainers NID Number " required >
                <br>
                Phone Number: <input name="mobile" type="text" value="<?=$student['Mobile'];?>" class="form-control" placeholder=" Enter Trainers Phone Number " required >
                <br>

                
                <div class="row">
                  <div class="col-md-6">
                         Enter Your Gender : 
                <div class="form-check">
                      <input class="form-check-input" type="radio" value="1" name="gender" <?php
                              if ($student['Gender']== 1) {
                                  echo "checked";
                              }?> >
                      <label class="form-check-label" > Male
                      </label>
                       &nbsp;&nbsp;

                      <input class="form-check-input" type="radio" value="2" <?php
                              if ($student['Gender']== 2) {
                                  echo "checked";
                              }?> name="gender" >
                      <label class="form-check-label" >
                       Female
                      </label>

                </div>
                

                </div>
                    <div class="col-md-6">
                        Bith Date: <input name="BirthDate" value="<?=$student['BithDate'];?>"  type="date" class="form-control" required > 
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-12">
                            <h5>Check Your Education:</h5>  
                         <div class="form-check">
                     <?php 
                        $divide = explode(",",$student["Education"]);?>
                            

                    <input type="checkbox"
                    <?php if (in_array("S.Sc",$divide)) { echo "checked";}?>

                     class="form-check-input" id="Country" name="education[]" value="S.Sc"> S.Sc 
                    <input type="checkbox"  <?php if (in_array("H.Sc",$divide)) { echo "checked";}?> class="form-check-input" id="Country" name="education[]" value="H.Sc"> H.Sc 
                    <input type="checkbox"  <?php if (in_array("Honors",$divide)) { echo "checked";}?> class="form-check-input" id="Country" name="education[]" value="Honors"> Honours 
                    <input type="checkbox" <?php if (in_array("Masters",$divide)) { echo "checked";}?>  class="form-check-input" id="Country" name="education[]" value="Masters"> Masters 


                            
                          </div>
                      </div>
                     
                    <div class="col-md-12">
                        <h5>What is your blood group </h5>
                        <div class="form-check">
                      <input class="form-check-input" type="hidden" name="blood"  value="0" >
                      <input class="form-check-input"  type="radio" name="blood"
                       <?php if ($student['BloodGroup'] == 1) {
                           echo"checked";
                       }?>  value="1" >
                       <label class="form-check-label"> O (+)
                       </label>
                       &nbsp;&nbsp;

                      <input class="form-check-input" type="radio" name="blood"  <?php if ($student['BloodGroup'] ==2) {
                           echo"checked";
                       }?>  value="2" >
                      <label class="form-check-label" >  O (-) </label>
                       &nbsp;&nbsp;

                      <input class="form-check-input" type="radio" name="blood"  <?php if ($student['BloodGroup'] == 3) {
                           echo"checked";
                       }?>  value="3" >
                      <label class="form-check-label" >  A (+) </label>
                       &nbsp;&nbsp;

                      <input class="form-check-input" type="radio" name="blood"  <?php if ($student['BloodGroup'] == 4) {
                           echo"checked";
                       }?>  value="4" >
                      <label class="form-check-label" >  A (-) </label>
                       &nbsp;&nbsp;

                      <input class="form-check-input" type="radio" name="blood"  <?php if ($student['BloodGroup'] == 5) {
                           echo"checked";
                       }?>  value="5" >
                      <label class="form-check-label" >  B (+) </label>
                       &nbsp;&nbsp;

                      <input class="form-check-input" type="radio" name="blood"  <?php if ($student['BloodGroup'] == 6) {
                           echo"checked";
                       }?>  value="6" >
                      <label class="form-check-label" >  B (-) </label>
                       &nbsp;&nbsp;

                      <input class="form-check-input" type="radio" name="blood"  <?php if ($student['BloodGroup'] == 7) {
                           echo"checked";
                       }?>  value="7" >
                      <label class="form-check-label" >  AB (+) </label>
                       &nbsp;&nbsp;

                      <input class="form-check-input" type="radio" name="blood"  <?php if ($student['BloodGroup'] == 8) {
                           echo"checked";
                       }?>  value="8" >
                      <label class="form-check-label" >  AB (-) </label>

                        </div>
                 </div>
                </div> 
                 
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Enter Your Adress : </label>
                    <textarea  class="form-control" name="address" id="exampleFormControlTextarea1" rows="3"><?php echo $student['Adress'];?>


                    </textarea>
                </div>                
               <!-- rc="picture/'.$row["product_picture"].'" -->
               <input type="hidden" name="image" value="<?php echo $img; ?>">
                Image: <input type="file" name="image"  class="form-control" placeholder="Enter the image">
                <br>

                <button type="submit" name="upload" class="btn btn-green" >Submit</button>

            </form>
            <br>
            <div class="panel panel-danger" style="background-color:#eb9a90 ">
                <p class="text-center" style="color: #9c3328">Enter at least 60 or more character for Description.</p>
            </div>
        </div>

    </div>
</div>

<?php require_once("Fotter.php") ?>
