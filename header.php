<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>ABM php</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="css/style.css">
  <!-- MDBootstrap Datatables  -->
  <link href="css/addons/datatables.min.css" rel="stylesheet">

  <style type="text/css">
    .sidebar-fixed{height:100vh;width:270px;-webkit-box-shadow:0 2px 5px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12);box-shadow:0 2px 5px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12);z-index:1050;background-color:#fff;padding:0 1.5rem 1.5rem}.sidebar-fixed .list-group .active{-webkit-box-shadow:0 2px 5px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12);box-shadow:0 2px 5px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12);-webkit-border-radius:5px;border-radius:5px}.sidebar-fixed .logo-wrapper{padding:2.5rem}.sidebar-fixed .logo-wrapper img{max-height:50px}@media (min-width:1200px){.navbar,.page-footer,main{padding-left:270px}}@media (max-width:1199.98px){.sidebar-fixed{display:none}}

      .container-for-admin{
        background-color: #eee!important;
      }

      .map-container{
      overflow:hidden;
      padding-bottom:56.25%;
      position:relative;
      height:0;
      }
      .map-container iframe{
      left:0;
      top:0;
      height:100%;
      width:100%;
      position:absolute;
      }
      #dtBasicExample a:hover {
          text-decoration: underline;
      }

  </style>


</head>
<body>

  <!-- Start your project here-->  
 <div class="container-for-admin">
<!--Main Navigation-->
  <header>

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
      <div class="container-fluid">


        <!-- Collapse -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <!-- Left -->
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link waves-effect" href="index.php">Clientes
                <span class="sr-only">(current)</span>
              </a>
            </li>
          </ul>


        </div>
      <!-- Social icons -->
      <div class="">
        <a href="https://www.facebook.com/martin.niz.355" target="_blank">
          <i class="fab fa-facebook-f p-3"></i>
        </a>

        <a href="https://www.instagram.com/martinniz/" target="_blank">
          <i class="fab fa-instagram p-3"></i>
        </a>

        <a href="https://www.linkedin.com/in/martin-nicolas-niz-0000b1213/" target="_blank">
          <i class="fab fa-linkedin p-3"></i>
        </a>

        <a href="https://github.com/MartinNiz" target="_blank">
          <i class="fab fa-github p-3"></i>
        </a>
      </div>
      <!-- Social icons -->
      </div>
    </nav>
    <!-- Navbar -->

   <?php include("sidebar.php");?>

  </header>
  <!--Main Navigation-->

  <!--Main layout-->
  <main class="pt-5 mx-lg-5">
    <div class="container-fluid mt-5">




      <!--Grid row-->
      <div class="row wow fadeIn">

        <!--Grid column-->
        <div class="col-md-12 mb-4">

          <!--Card-->
          <div class="card">

            <!--Card content-->
            
            <div class="card-body">
                

<?php include('conexion.php');?>