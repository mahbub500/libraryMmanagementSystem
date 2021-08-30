
<!--
=========================================================
Material Dashboard - v2.1.2
=========================================================

Product Page: https://www.creative-tim.com/product/material-dashboard
Copyright 2020 Creative Tim (https://www.creative-tim.com)
Coded by Creative Tim

=========================================================
The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<?php require_once('header.php'); ?>

<body class="">
  <div class="wrapper ">
   <?php require_once("sidebar.php"); ?>
    <div class="main-panel">
      <!-- Navbar -->
      <?php require("NavBar.php"); ?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
         <?php require_once("Token.php"); ?>
         <?php require_once("main.php"); ?>
         <?php require_once("tables.php"); ?>
          
         
        </div>
      </div>
      <?php require_once("Fotter.php"); ?>
    </div>
  </div>

  <?php require_once("Js.php") ?>
  
  