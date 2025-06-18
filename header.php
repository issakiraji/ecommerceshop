<?php include('connection.php')?>

<nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">pureflour</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
      <ul class="navbar-nav  align-items-center">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="about.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="products.php">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="shop.php">Shop</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="contact.php">Contact Us</a>
        </li>
       
      </ul> 
    </div>
    <a class="btn btn-outline-light me-2  border border-0 rounded-circle" data-bs-toggle="offcanvas" href="#favoriteSidebar" role="button" aria-controls="favoriteSidebar" title="Favorites">
        <i class="bi bi-bag-heart"></i>
      </a>

      <a class="btn btn-outline-light position-relative border border-0 rounded-circle" data-bs-toggle="offcanvas" href="#cartSidebar" role="button" aria-controls="cartSidebar" title="Cart">
        <i class="bi bi-cart4"></i>
        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
          0
        </span>
      </a>

      <!-- Login Button -->
    <a href="login.php" class="btn btn-outline-light border border-0 rounded-circle" title="Login">
      <i class="bi bi-person-circle"></i>
    </a>
  </div>
</nav>