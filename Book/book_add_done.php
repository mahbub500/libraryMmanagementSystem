<?php
$msg = "";
if(isset($_POST['upload'])){
    $target = "images/".basename($_FILES['image']['name']);
    // var_dump($target);
}
////connection to database

        $mysqli = @new mysqli("localhost", "root", "", "studentlibery");
        $image = $_FILES['image']['name'];

 if(isset($_POST["upload"])){

        extract($_POST);



      //   $education=$_POST["education"];
      //   $allEducation=  implode(",", $education);
      // $mysqli = @new mysqli("localhost", "root", "", "studentlibery");
           


    $sql = "INSERT INTO `book` (`id`, `name`, `writer`, `publication`, `mrp`, `issbn_number`, `language`, `catagory`, `image`, `release_date`, `quantity`) VALUES (NULL,'$book_name','$writer','$publication','$mrp','$issbn','$language','$catagory','$image','$release','$quantity')";
    echo $sql;

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
<body style="padding-top: 100px">
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
                <li><a href="students_view.php">View Trainers</a></li>
                <li><a href="students_add.php">Add Trainers</a></li>

            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-danger text-center">
                <?php
                if($final){
                    echo "Data has been added successfully.";
                    echo "<br>";
                    echo "Please Go back to Dashboard or Trainer Page.";
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
</table>
        </div>
    </div>
</div>



<!-- Latest compiled and minified JavaScript -->
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/jquery.easing.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<!--<script src="js/custom.js"></script>-->

</body>
</html>