
<nav class="navbar navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="assets/image/logo_magelang.png" width="30">
      <img src="assets/image/logo_dishub.png" width="30">
      Angkot Magelang
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- <div class="collapse navbar-collapse d-lg-flex justify-content-lg-end align-item-lg-center px-5" id="navbarNavAltMarkup"> -->
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <?php
          if (isset($_SESSION['username'])) {
            ?>
            <a class="nav-link" href="index.php">Home</a>
            <a class="nav-link" href="dashboard.php">Dashboard</a>
            <a class="nav-link" href="peta.php">Peta Magelang</a>
            <a class="nav-link" href="rute.php">Info Rute</a>
            <a class="nav-link" href="help.php">Bantuan</a>
            <a class="nav-link" href="login.php">Login</a>
            <a class="nav-link" href="show-user.php">User</a>
            <a class="nav-link" href="show-rute.php">Edit Rute</a>
            <a class="nav-link" href="logout.php">Logout - [ <?php echo $_SESSION['username'] ?> ]</a>
            <?php
          } else {
            ?>
              <a class="nav-link" href="index.php">Home</a>
              <a class="nav-link" href="peta.php">Peta Magelang</a>
              <a class="nav-link" href="rute.php">Info Rute</a>
              <a class="nav-link" href="help.php">Bantuan</a>
              <a class="nav-link" href="login.php">Login</a>
            <?php
          }
        ?>
        
      </div>
    </div>
  </div>
</nav>