<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Angkot Magelang</title>

  <!-- Head -->
  <?php include 'component/head.php' ?>

</head>
<body>
  <!-- Navbar -->
  <?php 
    include 'component/navbar.php';
    include 'koneksi.php';
    $jum_user = 0;
    $result = mysqli_query($koneksi, "SELECT * FROM users");
      foreach ($result as $row) {
        $jum_user++;
    }

    $jum_rute = 0;
    $rute = mysqli_query($koneksi, "SELECT * FROM rute_angkot");
      foreach ($rute as $row2) {
        $jum_rute++;
    }
  ?>

  <section class="dashboard mt-3">
    <div class="container">
      <div class="row text-center">
        <h1 class="heading">Selamat Datang <?php echo $_SESSION['username']?></h1>
      </div>
      <a href="show-user.php">
        <div class="row mt-3" style="background: #D9D9D9">
          <div class="col-3 align-self-center">
            <i class='bx bxs-user' style="color: #21A4CD; font-size: 50px"></i>
          </div>
          <div class="col-9 d-flex align-items-end flex-column">
            <h1 class="count"><?php echo $jum_user ?></h1>
            <h3 class="count">Jumlah User</h3>
          </div>
        </div>
      </a>
      <a href="show-rute.php">
        <div class="row mt-3" style="background: #D9D9D9">
          <div class="col-3 align-self-center">
            <i class='bx bxs-map-alt' style="color: #21A4CD; font-size: 50px"></i>
          </div>
          <div class="col-9 d-flex align-items-end flex-column">
            <h1 class="count"><?php echo $jum_rute ?></h1>
            <h3 class="count">Jumlah Rute</h3>
          </div>
        </div>
      </a>
    </div>
  </section>
  

  <!-- Foot -->
  <?php include 'component/foot.php' ?>

</body>
</html>