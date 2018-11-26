<?php

  include_once("../function/helper.php"); //helper biar simpel
  include_once("../function/koneksi.php"); //helper biar simpel

  $page = isset($_GET['page']) ? $_GET['page'] : false;
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no"/>
    <title>AntriCukur</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/style.css">
    <!-- New -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- Owl Stylesheets -->
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/owl.theme.default.min.css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- Yeah i know js should not be in header. Its required for demos.-->

    <!-- javascript -->
    <script src="<?= BASE_URL ?>assets/js/jquery.min.js"></script>
    <script src="<?= BASE_URL ?>assets/js/owl.carousel.js"></script>
    <!-- akhir owl carousel -->
  </head>
  <body style="margin-top: 50px;">
    <!-- Navigasi Bar -->
    <nav class="navbar navbar-expand-sm bg-info navbar-dark fixed-top">
        <a class="navbar-brand" href="<?= BASE_URL?>"><img src="../assets/images/logo.png" width="30" height="30" class="d-inline-block align-top" alt=""></a><strong class="text-center text-white">AntriCukur</strong>
    </nav>
    <!-- Akhir Navigasi bar -->
    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid bg-transparent text-center">
      <div class="container">

      <?php
        $filename = "$page.php";
        if (file_exists($filename)) {
          include_once($filename);
        }else {
          echo '
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="'.BASE_URL.'assets/images/sp.png">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="'.BASE_URL.'assets/images/book.png">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="'.BASE_URL.'assets/images/tp.png">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <br/>
          <p>Jangan buang waktu kamu hanya untuk menunggu antrean cukur.</p>
          <hr/>
          <a href="'.BASE_URL.'index.php?page=booking" class="btn btn-lg btn-info btn-block"><i class="fa fa-store-alt"></i> Cari Tempat</a>';
        }
       ?>
     </div>
    </div>
    <!-- Akhir Jumbotron -->
    <!-- Navigasi Bar -->
    <div class="navbar-expand-sm navbar-info bg-info fixed-bottom">
      <div class="row justify-content-center text-center">
        <div class="col">
        <a href="<?= BASE_URL ?>" class="navbar-brand text-white"><i class="fa fa-home"></i></a>
        </div>
        <div class="col">
        <a href="#" class="navbar-brand text-white"><i class="fa fa-book"></i></a>
        </div>
        <div class="col">
        <a href="<?= BASE_URL ?>index.php?page=login" class="navbar-brand text-white"><i class="fa fa-user"></i></a>
        </div>
      </div>
    </div>
    <!-- Akhir Navigasi bar -->
  </body>
</html>
