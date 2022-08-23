<?php
  include 'koneksi.php';
  session_start();
  if (isset($_SESSION['username'])) {
    header("Location: dashboard.php");
  }
  if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE USERNAME='$username' AND PASSWORD='$password'";
    $result = mysqli_query($koneksi, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['USERNAME'];
        header("Location: dashboard.php");
    } else {
        echo "<script>alert('Username atau password Anda salah. Silahkan coba lagi!')</script>";
    }
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
  ?>

  <section class="login mt-5">
    <div class="container">
      <div class="row mt-3 text-center">
        <i class='bx bxs-user' style="color: #21A4CD; font-size: 150px"></i>
      </div>
      <form method="POST" action="login.php">
        <!-- Email input -->
        <div class="form-outline mb-4">
          <label class="form-label" for="username">Username</label>
          <input type="input" name="username" id="username" class="form-control" />
        </div>

        <!-- Password input -->
        <div class="form-outline mb-4">
          <label class="form-label" for="password">Password</label>
          <input type="password" name="password" id="password" class="form-control" />
        </div>

        <!-- Submit button -->
        <button name="submit" class="btn mx-auto btn-primary">Sign in</button>
      </form>
    </div>
    
  </section>
  

  <!-- Foot -->
  <?php include 'component/foot.php' ?>

</body>
</html>