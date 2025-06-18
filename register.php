
<?php include('connection.php')?>

<div class="container-fluid d-flex justify-content-center align-items-center min-vh-100" style="background: url('image/img.jpg') no-repeat center center/cover; font-family: cursive;">
  <div class="card shadow p-4" style="max-width: 400px; width: 100%;">
    <div class="text-center mb-3">
      <img src="image/logo.png" alt="PureFlour Logo" class="img-fluid" style="width: 65px;">
    </div>
    <h4 class="text-success text-center mb-4">Register Account</h4>
    
    <form action="register.php" method="POST">
      <div class="input-group mb-3">
        <span class="input-group-text text-success"><i class="bi bi-person-fill"></i></span>
        <input type="text" class="form-control" name="name" placeholder="Full Name" required>
      </div>

      <div class="input-group mb-3">
        <span class="input-group-text text-success"><i class="bi bi-envelope-fill"></i></span>
        <input type="email" class="form-control" name="email" placeholder="Email" required>
      </div>

      <div class="input-group mb-3">
        <span class="input-group-text text-success"><i class="bi bi-lock-fill"></i></span>
        <input type="password" class="form-control" name="password" placeholder="Password" required>
      </div>

      <button type="submit" class="btn btn-success w-100">Register</button>
    </form>

    <div class="text-center mt-2">
      <span class="small">Already have an account? <a href="login.php" class="text-success text-decoration-none">Login here</a></span>
    </div>
  </div>
</div>

</body>
</html>