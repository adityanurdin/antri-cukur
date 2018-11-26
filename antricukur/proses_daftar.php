<?php
include_once 'function/helper.php';
include_once 'function/koneksi.php';

$level    = "customer";
$status    = "on";
$username = $_POST['username'];
$email    = $_POST['email'];
$nama     = $_POST['nama'];
$password = $_POST['password'];
$phone    = $_POST['phone'];

unset($_POST['password']);
$dataForm = http_build_query($_POST);

$validasi_email = mysqli_query($koneksi, "SELECT * FROM user WHERE email='$email'");
// $validasi_username = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username'");
$validasi_phone = mysqli_query($koneksi, "SELECT * FROM user WHERE phone='$phone'");

if (empty($username) || empty($email) || empty($phone) || empty($password) || empty($nama)) {
  header("location: ".BASE_URL."index.php?page=daftar&notif=require&$dataForm");
}elseif (mysqli_num_rows($validasi_email) == 1) {
  header("location: ".BASE_URL."index.php?page=daftar&notif=email&$dataForm");
}elseif (mysqli_num_rows($validasi_phone) == 1) {
  header("location: ".BASE_URL."index.php?page=daftar&notif=phone&$dataForm");
}else{
  $password = password_hash($password, PASSWORD_DEFAULT, $option);
  $query = "INSERT INTO user (level,nama,username,email,phone,password,status) VALUES ('$level','$nama','$username','$email','$phone','$password','$status')";
  mysqli_query($koneksi, $query);
  header("location: ".BASE_URL."index.php?page=login&notif=success");
}
 ?>
