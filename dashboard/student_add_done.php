
<?php
$msg = "";
if(isset($_POST['upload'])){
    $target = "images/".basename($_FILES['image']['name']);
    // var_dump($target);
}
////connection to database

        $mysqli = @new mysqli("localhost", "root", "", "studentlibery");
        $image = $_FILES['image']['name'];
// var_dump($image);


// ////building query
// $query = 'INSERT INTO `teachers` (`image`, `names`, `emails`,`phones`, `educations`, `experiences`) 
//           VALUES ("'.$image.'","'.$_POST['names'].'","'.$_POST['emails'].'","'.$_POST['phones'].'","'.$_POST['educations'].'","'.$_POST['experiences'].'")';

// if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
// $msg = "Image uploaded Successfully";    
// }
// else{
//  $msg = "There is a problem";
// }
// //execute the query using php
// $result = $db->exec($query);


// ***************** mahbub *******************


 
     // $post = extract($_POST);
     // print_r($post);



 if(isset($_POST["upload"])){

        extract($_POST);


        $education=$_POST["education"];
        $allEducation=  implode(",", $education);
      $mysqli = @new mysqli("localhost", "root", "", "studentlibery");
           


    $sql = "INSERT INTO `student` (`id`, `Reg_id`, `FullName`, `FatherName`, `MotherName`, `Gender`, `Nid`, `email`, `BithDate`, `Education`, `image`, `BloodGroup`, `Mobile`, `Adress`) VALUES (NULL, '$Reg_id', '$FullName', '$FatherName', '$MotherName', '$gender', '$nid', '$emails', '$BirthDate', '$allEducation', '$image', '$blood', '$mobile', '$address ') ";

    if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
echo "Image uploaded Successfully";    
}
else{
 echo "There is a problem";
}

     // $sql = "CALL ad_manufacture('$name','$adress','$contact_no')" ;
           // echo $sql;
      $mysqli->query($sql);      
      $final = $mysqli->affected_rows;
      if ($final == 1) {
          echo "Hello";
      }else{
        echo"Good Bye";
      }
   }
  //     if ($final == 1) {
  //           echo" <div class=\"container\">
  //      <div class=\"row\">
  //        <div class=\"col-md-6\">
  //          <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
  // <strong>Congratulations!  </strong>New Company Added Succfully 
  // <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
  //   <span aria-hidden=\"true\">&times;</span>
  // </button> </div>
  //        </div>
  //      </div>
  //    </div> ";
  //     }else{
  //     echo " Good Bye ";
  //   }
      
   
    // **************************

//var_dump($result);

// if($final){
//    echo "Data has been inserted successfully.";
// }else{
//    echo "There is an error. Please try again later.";
// }
// header("location:students_view.php");
?>


<?php
 // require_once("Header_nav.php") 
 ?>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-danger text-center">
                <?php
                if($final){
                    echo "Data has been added successfully.";
                    echo "<br>";
                    header("location:students_view.php");
                    // echo "Please Go back to Dashboard or Trainer Page.";
                }else{
                    echo "Sorry !";
                    echo "<br>";
                    echo "There is an error. Please try again later.";
                }


                ?>


            </div>

        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <table>
<?php 


    // foreach ($_POST as $key => $value) {
    //     echo "<tr>";
    //     echo "<td>";
    //     echo $key;
    //     echo "</td>";
    //     echo "<td>";
    //     echo $value;
    //     echo "</td>";
    //     echo "</tr>";
    // }


?>
<?php
 // require_once("Fotter.php") 
?>