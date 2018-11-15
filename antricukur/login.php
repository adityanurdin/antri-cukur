<div class="container">
<h2><i class="fa fa-user"></i> Login</h2>
<form>
  <div class="form-group">
    <label>Username</label>
    <input type="username" class="form-control" placeholder="Username">
    <small id="emailHelp" class="form-text text-muted">We'll never share your data with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
  </div>
  <button type="submit" class="btn btn-info btn-block">Login</button>
</form>
<p>Belum memiliki akun? <a href="<?= BASE_URL ?>index.php?page=daftar">Daftar</a></p>
</div>