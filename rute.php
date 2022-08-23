<?php
session_start();
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
  ?>

  <section class="rute">
    <div class="container">
      <div class="row mt-3 text-center">
        <h1 class="heading">Informasi Rute</h1>
      </div>
      <div class="row">
        
        <?php
          $rute = mysqli_query($koneksi, "SELECT * FROM rute_angkot");
          foreach ($rute as $row) {
          ?>
          <a class="btn" href="jalur.php?id=<?php echo $row['ID_RUTE'] ?>" role="button">
            <div class="row d-flex justify-content-end">
              <div class="col-8">
                <h2 style="color: #<?php echo $row['COLOR'] ?>;"><?php echo $row['NAMA_RUTE'] ?></h2>
                <p><?php echo $row['KETERANGAN'] ?></p>
              </div>
              <div class="col-4 m-auto d-flex justify-content-end">
                <img src="<?php echo $row['ICON'] ?>" alt="">
              </div>
            </div>
          </a>
        <?php
          ;
        } 
        ?>
        
        
      </div>
    </div>
  </section>
  

  <!-- Foot -->
  <?php include 'component/foot.php' ?>

</body>
</html>