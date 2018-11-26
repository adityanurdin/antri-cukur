<?php
$user_id = $_SESSION['user_id'];
 ?>
<h1>selamat datang <?= $_SESSION['username'] ?></h1>
<p><h4>Point kamu : 1000(P)</h4></p>
<p><h4>ID kamu : <?= $user_id ?></h4></p>
<br>
<a href="../logout.php" class="btn btn-primary">Logout</a>
<br><br>
<div class="jumbotron">
  <h3>Booking History</h3>
  <div class="table-responsive">
    <table class="table table-hover">
        <thead>
          <tr class="table-dark text-dark">
            <th>Barbershop</th>
            <th>tanggal booking</th>
            <th>status</th>
          </tr>
        </thead>
        <tbody>
          <?php
          // $no = 1;
          // $query = "SELECT bol.id_booking,bol.user_id,bol.username,bol.status_booking,bl.nama_barbershop
          //           FROM barbershop_list as bl, booking_list as bol
          //           WHERE bol.id_barbershop=bl.id_barbershop";
             $query = "SELECT * FROM booking_list";
          $sql = mysqli_query($koneksi, $query);
          $row = mysqli_fetch_assoc($sql);
          // print_r($row);
            echo '
            <tr class="table-success">
            <td>'.$row['username'].'</td>
            <td>10/10/2010</td>
            <td>'.$row['status_booking'].'</td>
            </tr>

            ';
          // }
           ?>
        </tbody>
      </table>
    </div>
  </div>
