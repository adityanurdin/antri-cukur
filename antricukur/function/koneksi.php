<?php
  $server   = "localhost";
  $user     = "root";
  $pass     = "";
  $database = "antricukur";

  $koneksi = mysqli_connect($server,$user,$pass, $database) or die("CONNETION TO DATABASE ERROR!");
 ?>
