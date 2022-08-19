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
    $ID = $_GET['id'];
    $query = mysqli_query($koneksi, "SELECT * FROM rute_angkot WHERE ID_RUTE = '$ID'");
    $jalur = mysqli_fetch_array($query);
  ?>


  <section class="jalur">
    <div class="container">
      <div class="row mt-3 text-center">
        <h1 class="heading" style="color: #<?php echo $jalur['COLOR']; ?>;"><?php echo $jalur['NAMA_RUTE']; ?> - <?php echo $jalur['KETERANGAN']; ?></h1>
      </div>
      <div class="row">
        <div class="col text-center">
          <img style="width: 100%" src="<?php echo $jalur['DATA_RUTE']; ?>" alt="<?php echo $jalur['NAMA_RUTE']; ?>">
        </div>
      </div>
    </div>
  </section>
  

  <!-- Foot -->
  <?php include 'component/foot.php' ?>

</body>
</html>