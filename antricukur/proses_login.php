<?php
include_once 'function/helper.php';
include_once 'function/koneksi.php';

$username = $_POST['username'];
$userpass = $_POST['password'];

  $query = "SELECT * FROM user WHERE username = '$username'";
  $sql = mysqli_query($koneksi, $query);
  // print_r($sql);

  $getUser = mysqli_num_rows($sql);
  $getDataUser = mysqli_fetch_array($sql);
   if ($getUser == 1) {

         if (password_verify($userpass, $getDataUser['password'])) {
           session_start();
               $_SESSION['username'] = $username;
               $_SESSION['level'] = $getDataUser['level'];
               $_SESSION['user_id'] = $getDataUser['user_id'];
               if ($getDataUser['level'] == "customer") {
                 header("location: ".BASE_URL."user");
               }elseif ($getDataUser['level'] == "admin") {
                 header("location: ".BASE_URL."admin");
               }elseif ($getDataUser['level'] == "admin_cukur") {
                 header("location: ".BASE_URL."admin_cukur/index.php?page=admin");
               }
         }else {
           header("location: ".BASE_URL."index.php?page=login&notif=failed");
         }

   }else {
     header("location: ".BASE_URL."index.php?page=login&notif=failed");
   }

 ?>
