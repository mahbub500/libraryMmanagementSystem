<?php require_once("Header_nav.php") ?>
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
<?php require_once("Fotter.php") ?>