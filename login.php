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
  <?php include 'component/navbar.php'; ?>

  <section class="rute mt-5">
    <div class="container">
      <div class="row mt-3 text-center">
        <i class='bx bxs-user' style="color: #21A4CD; font-size: 150px"></i>
      </div>
      <form>
        <!-- Email input -->
        <div class="form-outline mb-4">
          <label class="form-label" for="username">Username</label>
          <input type="input" id="username" class="form-control" />
        </div>

        <!-- Password input -->
        <div class="form-outline mb-4">
          <label class="form-label" for="password">Password</label>
          <input type="password" id="password" class="form-control" />
        </div>

        <!-- Submit button -->
        <button type="button" class="btn btn-primary btn-block mb-3">Sign in</button>
      </form>
    </div>
    
  </section>
  

  <!-- Foot -->
  <?php include 'component/foot.php' ?>

</body>
</html>