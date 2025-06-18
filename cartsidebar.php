
<?php include('connection.php')?>

<div class="offcanvas offcanvas-end" tabindex="-1" id="cartSidebar" aria-labelledby="cartSidebarLabel" style="font-family: cursive;">
  <div class="offcanvas-header" style="font-family: cursive;">
    <h5 class="offcanvas-title" id="cartSidebarLabel">Your Cart</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>

  <div class="offcanvas-body" style="font-family: cursive;">

    <!-- Cart Item 1 -->
    <div class="d-flex mb-3 border-bottom pb-2">
      <img src="image/batter.png" alt="Idly/Dosa Batter 1kg" class="img-thumbnail me-3" style="width: 60px; height: 60px;">
      <div class="flex-grow-1">
        <strong>Idly/Dosa Batter 1kg</strong>
        <div class="text-dark mb-1">₹50</div>
        <div class="input-group input-group-sm w-50">
          <button class="btn btn-outline-danger rounded-circle">-</button>
          <input type="text" class="form-control text-center border border-0" value="1">
          <button class="btn btn-outline-danger  rounded-circle">+</button>
        </div>
      </div>
      <tr><td><button class="btn btn-sm ms-2 rounded-circle">x</button></td></tr>
    </div>

    <!-- Cart Item 2 -->
    <div class="d-flex mb-3 border-bottom pb-2">
      <img src="image/batter.png" alt="Idly/Dosa Batter 2kg" class="img-thumbnail me-3" style="width: 60px; height: 60px;">
      <div class="flex-grow-1">
        <strong>Idly/Dosa Batter 2kg</strong>
        <div class="text-dark mb-1">₹95</div>
        <div class="input-group input-group-sm w-50">
          <button class="btn btn-outline-danger rounded-circle">-</button>
          <input type="text" class="form-control text-center border border-0" value="1">
          <button class="btn btn-outline-danger rounded-circle">+</button>
        </div>
      </div>
      <button class="btn btn-sm ms-2 rounded-circle">x</button>
    </div>

    <!-- Total and Buttons -->
    <div class="mt-4 border-top pt-3">
      <div class="d-flex justify-content-between mb-3">
        <strong>Total:</strong>
        <strong>₹145</strong>
      </div>
      <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="viewcart.php" class="btn btn-outline-warning text-dark w-100">View Cart</a>
        <a href="checkout.php" class="btn btn-success w-100">Checkout</a>
      </div>
    </div>
</div>
