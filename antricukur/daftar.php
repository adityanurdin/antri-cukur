<div class="container">
  <?php
    // $notif = isset($_GET['notif']) ? $_GET['notif'] : false;
    // if ($notif == "success") {
    //   echo '
      // <div class="alert alert-info">
      // <strong>Selamat!</strong> kamu berhasil mendaftar, silahkan login.
      // </div>
    //   ';
    // }elseif ($notif == "failed") {
    //   echo '
    //   <div class="alert alert-danger">
    //   <strong>Oh nooo!</strong> Kamu gagal mendaftar, silahkan coba lagi.
    //   </div>
    //   ';
    // }

    $notif = isset($_GET['notif']) ? $_GET['notif'] : false;
    $nama = isset($_GET['nama']) ? $_GET['nama'] : false;
    $email = isset($_GET['email']) ? $_GET['email'] : false;
    $phone = isset($_GET['phone']) ? $_GET['phone'] : false;
    $username = isset($_GET['username']) ? $_GET['username'] : false;
    if ($notif == "require") {
      echo '<div class="alert alert-danger">
      <strong>Maaf</strong> kamu harus melengkapi form di bawah.
      </div>';
    }elseif ($notif == "email") {
      echo '
      <div class="alert alert-danger">
      <strong>Maaf</strong> Email yang kamu masukan telah digunakan.
      </div>';
    }elseif ($notif == "username") {
      echo '
      <div class="alert alert-danger">
      <strong>Maaf</strong> Username yang kamu masukan telah digunakan.
      </div>';
    }elseif ($notif == "phone") {
      echo '
      <div class="alert alert-danger">
      <strong>Maaf</strong> Nomer telephone yang kamu masukan telah digunakan.
      </div>';
    }


  ?>
<form class="needs-validation" novalidate method="POST" action="<?= BASE_URL?>proses_daftar.php">
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom01">Nama Lengkap</label>
      <input type="text" class="form-control" id="validationCustom01" placeholder="Nama Lengkap" value="<?= $nama ?>" name="nama" required>
      <div class="invalid-feedback">
      	Isi Nama Lengkap
      </div>
      <div class="valid-feedback">
        Terlihat Bagus!
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <label>Email</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend"><i class="fa fa-envelope"></i></span>
        </div>
        <input type="email" class="form-control" placeholder="Email" value="<?= $email ?>" name="email" aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">
          Isi email anda
        </div>
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <label>Nomer Handphone</label>
      <div class="input-group">
        <input type="number" class="form-control" placeholder="Nomer Handphone" value="<?= $phone ?>" name="phone" aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">
          Isi Nomer Handphone anda
        </div>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label>Username</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend"><i class="fa fa-user-plus"></i></span>
        </div>
        <input type="text" class="form-control" placeholder="Username" value="<?= $username ?>" name="username" aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">
          Isi username anda
        </div>
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <label>Password</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend"><i class="fa fa-lock"></i></span>
        </div>
        <input type="password" class="form-control" placeholder="Password" name="password" aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">
          Isi password anda
        </div>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <button class="btn btn-info btn-block" type="submit">Daftar</button>
</form>
<p>Sudah memiliki akun? <a href="<?= BASE_URL ?>index.php?page=login">Login</a></p>
</div>
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
