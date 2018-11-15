<div class="row">
  <div class="col-sm">
    <blockquote class="blockquote text-left">
      <h2 class="mb-0">Pilih Tempat Cukur</h2>
      <footer class="blockquote-footer">Cari tempat cukur <cite title="Source Title"> langganan kamu</cite></footer>
    </blockquote>
  </div>
  <div class="col-sm">
    <form class="form-inline my-2 my-lg-0 float-right">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-info my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</div>
<p>
  <a class="btn btn-outline-success btn-lg btn-block" data-toggle="collapse" href="#bekasi" role="button" aria-expanded="false" aria-controls="collapseExample"><i class="fa fa-map"></i>
    Bekasi
  </a>
</p>
<div class="collapse mr-lg" id="bekasi">
        <div class="nonloop owl-carousel">
            <div class="item">
              <div class="card">
                <img class="card-img-top" src="<?= BASE_URL?>/assets/images/haed.jpg" alt="Card image cap">
                <div class="card-body">
                  <div class="alert alert-primary" role="alert">
                    Buka
                  </div>
                  <h5 class="card-title">title</h5>
                  <p class="card-text">jalan jauh banget</p>
                </div>
                  <a href="<?= BASE_URL ?>index.php?page=tempat" class="btn btn-outline-info card-link">Cek</a>
              </div>
            </div>
            <div class="item">
              <div class="card">
                <img class="card-img-top" src="<?= BASE_URL?>/assets/images/haed.jpg" alt="Card image cap">
                <div class="card-body">
                  <div class="alert alert-primary" role="alert">
                    Buka
                  </div>
                  <h5 class="card-title">title</h5>
                  <p class="card-text">Jalan jauh banget</p>
                </div>
                  <a href="#" class="btn btn-outline-info card-link">Cek</a>
              </div>
            </div>
          </div>
  </div>
<br>
  <a class="btn btn-outline-warning btn-lg btn-block" data-toggle="collapse" href="#jakarta" role="button" aria-expanded="false" aria-controls="collapseExample"><i class="fa fa-map"></i>
    Jakarta
  </a>
</p>
<div class="collapse mr-lg" id="jakarta">
        <div class="nonloop owl-carousel">
            <div class="item">
              <div class="card">
                <img class="card-img-top" src="<?= BASE_URL?>/assets/images/haed.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">title</h5>
                  <p class="card-text">jalan jauh banget</p>
                </div>
                <div class="card-body">
                  <a href="#" class="btn btn-outline-info card-link">Cek</a>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="card">
                <img class="card-img-top" src="<?= BASE_URL?>/assets/images/haed.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">title</h5>
                  <p class="card-text">Jalan jauh banget</p>
                </div>
                <div class="card-body">
                  <a href="#" class="btn btn-outline-info card-link">Cek</a>
                </div>
              </div>
            </div>
          </div>
  </div>
<script type="text/javascript">
  $(document).ready(function(){
  $(".owl-carousel").owlCarousel();
});
  $('.nonloop').owlCarousel({
    center: true,
    items:2,
    loop:false,
    margin:10,
    responsive:{
        600:{
            items:4
        }
    }
});
</script>