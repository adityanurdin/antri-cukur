<?php

  include_once("function/helper.php"); //helper biar simpel

  $page = isset($_GET['page']) ? $_GET['page'] : false;
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/style.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-sm bg-info navbar-dark">
        <a class="navbar-brand" href="<?= BASE_URL?>"><i class="fa fa-cut"></i> <strong>Antri cukur</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#dropdown">
          <span class="navbar-toggler-icon"></span>
        </button>
      <div class="collapse navbar-collapse" id="dropdown">
        <ul class="navbar-nav mr-auto">

        </ul>
      </div>
    </nav>
    <div class="jumbotron jumbotron-fluid text-center">
      <div class="container">

      <?php
        $filename = "$page.php";
        if (file_exists($filename)) {
          include_once($filename);
        }else {
          echo '<a href="'.BASE_URL.'index.php?page=booking" class="btn btn-outline-info"><i class="fa fa-cut"></i> Booking Tempat</a>';
        }
       ?>

     </div>
    </div>

    <div class="footer">
      <footer>
        <br>
      <p>Copyright Adityanurdin 2018</p>
    </footer>
    </div>
  </body>
</html>
