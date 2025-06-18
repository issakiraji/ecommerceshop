
<?php include('connection.php')?>

<?php include('header.php')?>


<section class="text-white" style="background: url('image/contact.jpg') no-repeat center center/cover; height: 400px;">
  <div class="d-flex h-100 justify-content-center align-items-center">
    <div class="p-4 text-center">
     
    </div>
  </div>
</section>


<section class="contact-section" id="contact" style="font-family: cursive;">
  <div class="container">
    <h2 class="pt-2">Get in Touch</h2>
    <div class="row g-4 align-items-stretch">
      <div class="col-md-6">
        <div class="contact-card">
          <h5>Send Us a Message</h5>
          <form  action="contact.php" method="post">
            <div class="mb-3">
              <label for="name" class="form-label">Your Name</label>
              <input type="text" class="form-control" id="name" placeholder="Enter your name">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Your Email</label>
              <input type="email" class="form-control" id="email" placeholder="Enter your email">
            </div>
            <div class="mb-3">
              <label for="message" class="form-label">Message</label>
              <textarea class="form-control" id="message" rows="4" placeholder="Write your message here..."></textarea>
            </div>
            <button type="submit" class="btn btn-warning">Send Message</button>
          </form>
        </div>
      </div>
      <div class="col-md-6 mb-5" style="font-family: cursive;">
        <div class="contact-card h-100">
          <h5>Contact Details</h5>
          <p><strong>Address:</strong> Thiruparankundram, Madurai</p>
          <p><strong>Phone:</strong> +91 98765 43210</p>
          <p><strong>Email:</strong> info@battershop.in</p>
          <img src="https://via.placeholder.com/600x300?text=Our+Shop+Location" alt="Map" class="map-img mt-3">
        </div>
      </div>
    </div>
  </div>
</section>


<?php include('footer.php')?>
</body>
</html>