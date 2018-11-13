<?php

  include_once("function/helper.php"); //helper biar simpel

  $page = isset($_GET['page']) ? $_GET['page'] : false;
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>AntriCukur</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/style.css">
  </head>
  <body style="margin-top: 30px;">
    <!-- Navigasi Bar -->
    <nav class="navbar navbar-expand-sm bg-info navbar-dark fixed-top">
        <a class="navbar-brand" href="<?= BASE_URL?>"><img src="assets/images/logo.png" width="30" height="30" class="d-inline-block align-top" alt=""></a><strong class="text-center text-white">AntriCukur</strong>
    </nav>
    <!-- Akhir Navigasi bar -->
    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid text-center">
      <div class="container">
        <h2><strong>Jangan buang waktu kamu hanya untuk menunggu antrean cukur.</strong></h2>
        <br/>
        <h2 class="text-info"><i class="display-4 fa fa-store-alt"></i>&nbsp;<i class="fa fa-arrow-right"></i>&nbsp;<i class="display-4 fa fa-book"></i>&nbsp;<i class="fa fa-arrow-right"></i>&nbsp;<i class="display-4 fa fa-map"></i></h2>
        <br/>
        <p>Pilih tempat - Booking - Datang ketempat</p>
        <hr/>
      <?php
        $filename = "$page.php";
        if (file_exists($filename)) {
          include_once($filename);
        }else {
          echo '<a href="'.BASE_URL.'index.php?page=booking" class="btn btn-lg btn-info btn-block"><i class="fa fa-store-alt"></i> Cari Tempat</a>';
        }
       ?>
     </div>
    </div>
    <!-- Akhir Jumbotron -->
    <!-- footer -->
    <div class="footer">
      <footer>
        <br>
      <p>No Copyright</p>
    </footer>
    </div>
    <!-- Akhir Footer -->
  </body>
</html>
