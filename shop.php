
<?php include('connection.php')?>

<?php include('header.php')?>


<!-- Shop Section -->
<section class="text-white" style="background: url('image/image.jpg') no-repeat center center/cover; height: 400px;">
  <div class="d-flex justify-content-center align-items-center">
    <div class="p-4 text-end me-5">
    </div>
  </div>
</section>


    <!-- Categories Filter -->
    <div class="row mb-4 mt-5" style="font-family: cursive;">
      <div class="col text-center">
        <button class="btn btn-outline-danger me-2">All Products</button>
        <button class="btn btn-outline-warning me-2">idly/dosa</button>
        <button class="btn btn-outline-success me-2">idly/dosa combo offers</button>
      </div>
    </div>

    <!-- Product Grid -->
     <div class="container" style="font-family: cursive;">
    <div class="row g-4">
      <!-- Product Card -->
      <div class="col-md-4 col-sm-6">
        <div class="card product-card">
          <img src="image/batter1.png" class="card-img-top product-img mt-2" alt="Product">
          <div class="card-body text-center">
            <h5 class="card-title">idly/dosa 1kg</h5>
             <p class="fw-bold">
              <span class="text-muted text-decoration-line-through">₹60</span>
              <span class="text-success ms-2">₹50 / 1kg</span>
            </p>
            <button class="btn btn-outline-danger w-50 rounded-pill">Add to Cart</button>
          </div>
        </div>
      </div>

      <!-- Copy the above card for more products -->
      <div class="col-md-4 col-sm-6">
        <div class="card product-card">
          <img src="image/batter1.png" class="card-img-top product-img mt-2" alt="Product">
          <div class="card-body text-center">
            <h5 class="card-title">idly/dosa 2kg</h5>
            <p class="fw-bold">
              <span class="text-muted text-decoration-line-through">₹120</span>
              <span class="text-success ms-2">₹95 / 2kg</span>
            </p>
            <button class="btn btn-outline-danger w-50 rounded-pill">Add to Cart</button>
          </div>
        </div>
      </div>
      
       <div class="col-md-4 col-sm-6">
        <div class="card product-card">
          <img src="image/batter1.png" class="card-img-top product-img mt-2" alt="Product">
          <div class="card-body text-center">
            <h5 class="card-title">idly/dosa combo 5kg</h5>
           <p class="fw-bold">
              <span class="text-muted text-decoration-line-through">₹250</span>
              <span class="text-success ms-2">₹220 / 5kg</span>
            </p>
            <button class="btn btn-outline-danger w-50 rounded-pill">Add to Cart</button>
          </div>
        </div>
      </div>

      <!-- More products... -->
    </div>
  </div>


<?php include('favoritesidebar.php')?>
 <?php include('cartsidebar.php')?>
</div>
 <?php include('footer.php')?>
</body>
</html>