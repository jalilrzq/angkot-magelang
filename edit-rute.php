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
    $id = $_GET['id'];
    $rute = mysqli_query($koneksi, "SELECT * FROM rute_angkot WHERE ID_RUTE='$id'");
    while($row = mysqli_fetch_array($rute)){
  ?>

  <section class="edit mt-3">
    <div class="container">
      <div class="row text-center">
        <h3>Merubah data Rute</h3>
      </div>
      <form method="POST" action="update-rute.php">
        <!-- ID_RUTE input -->
        <!-- <div class="form-outline mb-1 visually-hidden">
          <label class="form-label" for="id_rute">ID Rute</label>
          <input type="input" name="id_rute" id="id_rute" class="form-control" />
        </div> -->
        
        <!-- ID_RUTE input -->
        <div class="form-outline mb-1">
          <label class="form-label" for="id_rute">ID Rute</label>
          <input type="input" name="id_rute" id="id_rute" class="form-control" readonly value="<?php echo $row['ID_RUTE'] ?>" />
        </div>

        <!-- NAMA_RUTE input -->
        <div class="form-outline mb-1">
          <label class="form-label" for="nama_rute">Nama Rute</label>
          <input type="input" name="nama_rute" id="nama_rute" class="form-control" value="<?php echo $row['NAMA_RUTE'] ?>" />
        </div>
        
        <!-- NAMA_RUTE input -->
        <div class="form-outline mb-1">
          <label class="form-label" for="keterangan">Keterangan</label>
          <input type="input" name="keterangan" id="keterangan" class="form-control" value="<?php echo $row['KETERANGAN'] ?>" />
        </div>

        <!-- Submit button -->
        <button name="submit" class="btn mx-auto btn-primary mt-2">Update</button>
      </form>
    </div>
    
  </section>

  <?php
  }
  ?>
  

  <!-- Foot -->
  <?php include 'component/foot.php' ?>

</body>
</html>