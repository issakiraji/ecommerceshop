
<?php include('connection.php')?>

<?php include('header.php')?>


<div class="container py-5"style="font-family: cursive;">
  <h2 class="mb-4 text-center pt-3">Checkout</h2>

  <div class="row g-5">
    <!-- Billing and Shipping Form -->
    <div class="col-md-7">
      <h5><b>Shipping Details</b></h5>
      <form action="checkout.php" method="post">
        <div class="mb-3">
          <label class="form-label">Full Name</label>
          <input type="text" class="form-control" placeholder="Enter your name" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Phone Number</label>
          <input type="tel" class="form-control" placeholder="Enter your phone number" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Address</label>
          <textarea class="form-control" rows="3" placeholder="Full address" required></textarea>
        </div>
        <div class="mb-3">
          <label class="form-label">City</label>
          <input type="text" class="form-control" placeholder="City" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Pincode</label>
          <input type="text" class="form-control" placeholder="Pincode" required>
        </div>
        <!-- You can add more fields if needed -->
      </form>
    </div>

    <!-- Order Summary -->
    <div class="col-md-5">
      <h5><b>Your Order</b></h5>
      <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between">
          <div>
            <h6 class="my-0">Idly/Dosa Batter 1kg</h6>
            <small class="text-muted">Qty: 1</small>
          </div>
          <span>₹50</span>
        </li>
        <li class="list-group-item d-flex justify-content-between">
          <div>
            <h6 class="my-0">Idly/Dosa Batter 2kg</h6>
            <small class="text-muted">Qty: 1</small>
          </div>
          <span>₹95</span>
        </li>
        <li class="list-group-item d-flex justify-content-between bg-light">
          <strong>Total</strong>
          <strong>₹145</strong>
        </li>
      </ul>

      <div class="mb-3">
        <label class="form-label">Payment Method</label>
        <select class="form-select" required>
          <option value="">Select</option>
          <option>Cash on Delivery</option>
          <option>UPI</option>
          <option>Credit/Debit Card</option>
        </select>
      </div>

      <button class="btn btn-warning w-100 mb-3">Place Order</button>
    </div>
  </div>
</div>


<?php include('footer.php')?>

<?php include('cartsidebar.php')?>

</body>
</html>