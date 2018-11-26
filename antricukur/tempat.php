<?php

$id = isset($_GET['id']) ? $_GET['id'] : false;

if ($id) {
  $query = mysqli_query($koneksi, "SELECT * FROM barbershop_list WHERE id_barbershop='$id'");
  $row = mysqli_fetch_assoc($query);

  $nama_barbershop = $row['nama_barbershop'];
  $status_barbershop = $row['status_barbershop'];
}

 ?>
<h2 class="text-left"><?= $nama_barbershop ?></h2>

  <?php
  if ($status_barbershop == "tutup") {
    echo '
    <div class="alert alert-danger" role="alert">
    Tutup
    </div>
    ';
  }elseif ($status_barbershop == "buka") {
    echo '
    <div class="alert alert-primary" role="alert">
    Buka
    </div>
    ';
  }


    ?>


<hr>
<div class="container bg-white">
<div class="table-responsive">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Nomor</th>
            <th scope="col">Nama</th>
            <th scope="col">Status</th>
          </tr>
        </thead>
        <?php
        $no = 1;
        $query = "SELECT * FROM booking_list WHERE id_barbershop='$id'";
        $sql = mysqli_query($koneksi, $query);
        while ($data = mysqli_fetch_array($sql)) {
          echo '
        <tbody>
          <tr>
            <th scope="row">'.$no.'</th>
            <td>'.$data['username'].'</td>
            <td>'.$data['status_booking'].'</td>
          </tr>
          ';
          $no++;
        }

        ?>
        </tbody>
      </table>
    </div>
    </div>
