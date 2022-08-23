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
        <h1 class="heading">Admin Angkot Magelang</h1>
      </div>
      <div class="row mt-3 p-3" style="background: #D9D9D9">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">NO</th>
              <th scope="col">ID</th>
              <th scope="col">Name</th>
              <th scope="col">Username</th>
              <!-- <th scope="col">Action</th> -->
            </tr>
          </thead>
          <tbody>
          <?php
          $result = mysqli_query($koneksi, "SELECT * FROM users");
          foreach ($result as $row) {
          ?>
            <tr>
              <th scope="row"><?php echo $no?></th>
              <td><?php echo $row['ID_USER'] ?></td>
              <td><?php echo $row['NAME'] ?></td>
              <td><?php echo $row['USERNAME'] ?></td>
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