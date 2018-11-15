<form class="needs-validation" novalidate>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom01">Nama Lengkap</label>
      <input type="text" class="form-control" id="validationCustom01" placeholder="Nama Lengkap" required>
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
        <input type="text" class="form-control" placeholder="Email" aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">
          Isi email anda
        </div>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom03">Kota</label>
      <input type="text" class="form-control" id="validationCustom03" placeholder="Kota" required>
      <div class="invalid-feedback">
        Masukkan kota anda
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom04">Provinsi</label>
      <input type="text" class="form-control" id="validationCustom04" placeholder="Provinsi" required>
      <div class="invalid-feedback">
        Masukkan provinsi anda
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom05">Kode Pos</label>
      <input type="text" class="form-control" id="validationCustom05" placeholder="Kode Pos" required>
      <div class="invalid-feedback">
        Masukkan kode pos anda
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <label>Username</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend"><i class="fa fa-user-plus"></i></span>
        </div>
        <input type="text" class="form-control" placeholder="Username" aria-describedby="inputGroupPrepend" required>
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
        <input type="password" class="form-control" placeholder="Password" aria-describedby="inputGroupPrepend" required>
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