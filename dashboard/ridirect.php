<?php
// Initialize the session
session_start();
var_dump($_SESSION);

 
// // Check if the user is logged in, if not then redirect him to login page
// if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
//     header("location: ../Users/login.php");
//     exit;
// }

// Check if the user is logged in, if not then redirect him to login page
echo $_SESSION['admin'];
if($_SESSION["admin"] == 1 && $_SESSION["loggedin"] == true){
    header("location: ../dashboard/index.php");

    
}elseif($_SESSION["admin"] == 0 && $_SESSION["loggedin"] == true){
  header("location: ../index.html");
}


    
?>