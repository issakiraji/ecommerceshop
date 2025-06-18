
<?php include('connection.php')?>
<body>
<?php include('header.php')?>


<section class="cart-banner mb-4" style="font-family: cursive;">
    <div class="text-center">
      <h2 class="display-5 fw-bold pt-5">Your Cart</h2>
      <p class="text-dark fs-3">Freshly Packed Idly & Dosa Batter Delivered to You!</p>
    </div>
  </section>

<div class="container py-5" style="font-family: cursive;">

  <!-- Cart Table -->
  <div class="table-responsive">
    <table class="table align-middle  text-center">
      <thead class="table-warning">
        <tr>
          <th>Product</th>
          <th>Name</th>
          <th>Price</th>
          <th>Quantity</th>
          <th>Subtotal</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <!-- Cart Item 1 -->
        <tr>
          <td><img src="image/batter.png" alt="1kg Batter" style="width: 60px;" class="img-thumbnail"></td>
          <td>Idly/Dosa Batter 1kg</td>
          <td>₹50</td>
          <td>
            <div class="d-flex justify-content-center align-items-center">
              <button class="btn btn-sm btn-outline-secondary rounded-circle">−</button>
              <span class="mx-2">1</span>
              <button class="btn btn-sm btn-outline-secondary rounded-circle">+</button>
            </div>
          </td>
          <td>₹50</td>
          <td><button class="btn btn-sm btn-outline-danger">×</button></td>
        </tr>

        <!-- Cart Item 2 -->
        <tr>
          <td><img src="image/batter.png" alt="2kg Batter" style="width: 60px;" class="img-thumbnail"></td>
          <td>Idly/Dosa Batter 2kg</td>
          <td>₹95</td>
          <td>
            <div class="d-flex justify-content-center align-items-center">
              <button class="btn btn-sm btn-outline-secondary rounded-circle">−</button>
              <span class="mx-2">1</span>
              <button class="btn btn-sm btn-outline-secondary rounded-circle">+</button>
            </div>
          </td>
          <td>₹95</td>
          <td><button class="btn btn-sm btn-outline-danger">×</button></td>
        </tr>
      </tbody>
    </table>
  </div>

  <!-- Total & Actions -->
  <div class="row mt-4" style="font-family: cursive;">
    <div class="col-md-6 mb-3">
      <a href="products.php" class="btn btn-outline-warning">← Continue Shopping</a>
    </div>
    <div class="col-md-6 text-end">
      <h5>Total: ₹145</h5>
      <a href="checkout.php" class="btn btn-success mt-2">Proceed to Checkout</a>
    </div>
  </div>
</div>


<?php include('cartsidebar.php')?>

<?php include('footer.php')?>

</body>
</html>