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
    $no = 1;  
  ?>

  <section class="dashboard mt-3">
    <div class="container">
      <div class="row text-center">
        <h1 class="heading">Rute Angkot Magelang</h1>
      </div>
      <div class="row mt-3 p-3" style="background: #D9D9D9">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">NO</th>
              <th scope="col">ID</th>
              <th scope="col">Rute</th>
              <th scope="col">Keterangan</th>
              <th scope="col">Action</th>
              <!-- <th scope="col">Action</th> -->
            </tr>
          </thead>
          <tbody>
          <?php
          $result = mysqli_query($koneksi, "SELECT * FROM rute_angkot");
          foreach ($result as $row) {
          ?>
            <tr>
              <th scope="row"><?php echo $no?></th>
              <td><?php echo $row['ID_RUTE'] ?></td>
              <td><?php echo $row['NAMA_RUTE'] ?></td>
              <td><?php echo $row['KETERANGAN'] ?></td>
              <td>
                <a href="edit-rute.php?id=<?php echo $row['ID_RUTE'] ?>">
                  <i class='bx bxs-edit text-primary'></i>
                </a>
                <a href="delete.php?id=<?php echo $row['ID_RUTE'] ?>" onclick="return confirm('Yakin ingin menghapus data?')">
                  <i class='bx bxs-trash text-danger'></i>
                </a>
              </td>
            </tr>
          <?php
            $no++
            ;
          } 
          ?>

          </tbody>
        </table>
      </div>
    </div>
  </section>
  

  <!-- Foot -->
  <?php include 'component/foot.php' ?>

</body>
</html>