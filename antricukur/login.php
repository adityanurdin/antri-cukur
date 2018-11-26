<div class="container">
  <?php

  session_start();

// Jika ditemukan session, maka user akan otomatis dialihkan ke halaman admin.
if (isset($_SESSION['level'])) {
  if ($_SESSION['level'] == "admin") {
    header("location: admin/");
  }elseif ($_SESSION['level'] == "customer") {
    header("location: user/");
  }elseif ($_SESSION['level'] == "admin_cukur") {
    header("location: admin_cukur/");
  }
}
// if (isset($_SESSION['username'])) {
//     header("location: admin/");
// }

    $notif = isset($_GET['notif']) ? $_GET['notif'] : false;
    if ($notif == "success") {
      echo '
      <div class="alert alert-info">
      <strong>Selamat!</strong> kamu berhasil mendaftar, silahkan login.
      </div>
      ';
    }elseif ($notif == "failed") {
      echo '
      <div class="alert alert-danger">
      <strong>Oh nooo!</strong> Username atau Password salah, silahkan coba lagi.
      </div>
      ';
    }
  ?>
<h2><i class="fa fa-user"></i> Login</h2>
<form action="<?= BASE_URL ?>proses_login.php" method="POST">
  <div class="form-group">
    <label>Username</label>
    <input type="username" class="form-control" placeholder="Username" name="username">
    <small id="emailHelp" class="form-text text-muted">We'll never share your data with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required>
  </div>
  <button type="submit" class="btn btn-info btn-block">Login</button>
</form>
<p>Belum memiliki akun? <a href="<?= BASE_URL ?>index.php?page=daftar">Daftar</a></p>
</div>
