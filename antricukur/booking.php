<div class="row">
  <div class="col-sm">
    <?php
    $notif = isset($_GET['notif']) ? $_GET['notif'] : false;
    if ($notif == "return") {
      echo '
      <div class="alert alert-info">
      <strong>INFO</strong> Maaf page yang kamu masukan tidak ada dalam system
      </div>
      ';
    }
     ?>
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


    <?php

    $data = mysqli_query($koneksi,"select * from wilayah_barbershop");
		while($d = mysqli_fetch_array($data)){
      echo '
        <p>
          <a class="btn btn-outline-success btn-lg btn-block" data-toggle="collapse" href="#'.$d['nama_wilayah'].'" role="button" aria-expanded="false" aria-controls="collapseExample"><i class="fa fa-map"></i>
            '.$d['nama_wilayah'].'
          </a>
        </p>
      ';

      echo '
      <div class="collapse mr-lg" id="'.$d['nama_wilayah'].'">
        <div class="nonloop owl-carousel">
      ';
      // $buka = "tutup";
      $query = "SELECT bl.id_barbershop,bl.nama_barbershop,bl.alamat_barbershop,bl.rate_barbershop,bl.detail_barbershop,bl.status_barbershop,wb.nama_wilayah
                FROM barbershop_list as bl,wilayah_barbershop as wb
                WHERE bl.id_wilayah=wb.id_wilayah";
      $sql = mysqli_query($koneksi, $query);
      while ($sql_data = mysqli_fetch_array($sql)) {
        if ($sql_data['nama_wilayah'] == $d['nama_wilayah']) {
          echo '

                   <div class="item">
                     <div class="card">
                       <img class="card-img-top" src="'.BASE_URL.'assets/images/haed.jpg" alt="Card image cap">
                       <div class="card-body">
                       ';
                    if ($sql_data['status_barbershop'] == "buka") {

                      if ($time < "09:00") {
                        echo '
                        <div class="alert alert-danger" role="alert">
                        Tutup
                        </div>
                        ';
                      }elseif ($time > "09:01" && $time < "20:00") {
                        echo '
                        <div class="alert alert-primary" role="alert">
                        Buka
                        </div>
                        ';
                      }

                    }elseif ($sql_data['status_barbershop'] == "tutup") {
                      echo '
                      <div class="alert alert-danger" role="alert">
                      Tutup
                      </div>
                      ';
                    }
                         echo '
                         <h5 class="card-title">'.$sql_data['nama_barbershop'].'</h5>
                         <p class="card-text">'.$sql_data['alamat_barbershop'].'</p>
                       </div>
                         <a href="'.BASE_URL.'index.php?page=tempat&id='.$sql_data['id_barbershop'].'" class="btn btn-outline-info card-link">Cek</a>
                     </div>
                   </div>
                   ';

        }
      }
      echo '
      </div>
      </div>
      <br>
      ';
    }
     ?>
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
