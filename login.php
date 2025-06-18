<?php include('connection.php')?>
<body>
<div class="container-fluid d-flex justify-content-center align-items-center min-vh-100" style="background: url('image/img.jpg') no-repeat center center/cover; height: 400px; font-family: cursive;">

  <div class="card shadow p-4" style="max-width: 400px; width: 100%;">
    <div class="text-center mb-3">
      <img src="image/logo.png" alt="PureFlour Logo" class="img-fluid" style="width: 65px;">
    </div>
    <h4 class="text-success text-center mb-4">PureFlour Login</h4>
    
    <form action="login.php" method="POST">
      <div class="input-group mb-3">
  <span class="input-group-text text-success" id="basic-addon1"><i class="bi bi-envelope-check-fill"></i></span>
  <input type="email" class="form-control" name="email" placeholder="Email" aria-label="password" aria-describedby="basic-addon1">
</div>

      <div class="input-group mb-3">
  <span class="input-group-text text-success" id="basic-addon1"><i class="bi bi-lock-fill"></i></span>
  <input type="password" class="form-control" name="password" placeholder="password" aria-label="password" aria-describedby="basic-addon1">
</div>

    <a href="home.php"  type="submit" class="btn btn-success w-100">Login</a>
    </form>

    <div class="text-center mt-2">
      <span class="small">New user? <a href="register.php" class="text-success text-decoration-none">Register here</a></span>
    </div>
  </div>
</div>
</body>
</html>
