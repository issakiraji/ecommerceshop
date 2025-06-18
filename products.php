<?php include('connection.php')?>
<?php include('header.php') ?>

<!-- Banner -->
<section class="text-white mt-5" style="background: url('image/product.jpg') no-repeat center center/cover; height: 400px;">
  <div class="d-flex h-100 justify-content-end align-items-center">
    <div class="p-4 text-end me-5">
    </div>
  </div> 
</section>



<!-- Product Section -->
<section id="products" class="py-5 bg-light" style="font-family: cursive;">
  <div class="container">
    <h2 class="text-center mb-4">Our Products</h2>
    <div class="row g-4">

      <!-- Product 1 -->
      <div class="col-md-4 col-sm-6">
        <div class="card product-card border border-0">
          <img src="image/batter1.png" class="card-img-top product-img mt-2" alt="Product">
          <div class="card-body text-center">
            <h5 class="card-title">idly/dosa</h5>
             <p class="fw-bold">
              <span class="text-muted text-decoration-line-through">₹60</span>
              <span class="text-success ms-2">₹50 / 1kg</span>
            </p>
            <button class="btn btn-outline-danger w-50 rounded-pill">Add to Cart</button>
          </div>
        </div>
      </div>

      <!-- Product 2 -->
      <div class="col-md-4 col-sm-6">
        <div class="card product-card border border-0">
          <img src="image/batter1.png" class="card-img-top product-img mt-2" alt="Product">
          <div class="card-body text-center">
            <h5 class="card-title">idly/dosa</h5>
            <p class="fw-bold">
              <span class="text-muted text-decoration-line-through">₹120</span>
              <span class="text-success ms-2">₹95 / 2kg</span>
            </p>
            <button class="btn btn-outline-danger w-50 rounded-pill">Add to Cart</button>
          </div>
        </div>
      </div>
      <!-- Product 3 -->
      <div class="col-md-4 col-sm-6">
        <div class="card product-card border border-0">
          <img src="image/batter1.png" class="card-img-top product-img mt-2" alt="Product">
          <div class="card-body text-center">
            <h5 class="card-title">idly/dosa</h5>
           <p class="fw-bold">
              <span class="text-muted text-decoration-line-through">₹200</span>
              <span class="text-success ms-2">₹ 150/ 5kg</span>
            </p>
            <button class="btn btn-outline-danger w-50 rounded-pill">Add to Cart</button>
          </div>
        </div>
      </div>

      <!-- More products... -->
    </div>
  </div>
</section>

<?php include('footer.php')?>

<?php include('favoritesidebar.php')?>
<?php include('cartsidebar.php')?>

</body>
</html>