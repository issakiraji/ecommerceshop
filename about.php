
<?php include('connection.php')?>

<?php include('header.php')?>

<section class="text-white" style="background: url('image/about1.png') no-repeat center center/cover; height: 400px;">
  <div class="d-flex justify-content-center align-items-center">
    <div class="p-4 text-end me-5">
    </div>
  </div>
</section>
<!-- About Content -->
 <div class="about-section" style="font-family: cursive;">
<div class="container my-5">
  <div class="row align-items-center g-4">
    <div class="col-md-6">
      <img src="image/about.jpg" alt="Idly/Dosa Batter Shop" class="img-fluid about-img shadow">
    </div>
    <div class="col-md-6">
      <h2 class="section-title">Our Story</h2>
      <p style="text-align: justify;">Welcome to our Idly/Dosa Batter Shop, where tradition meets purity. Started with the passion to deliver fresh, homemade-style batter, our mission is to bring authentic South Indian taste to your home with zero preservatives and 100% hygiene.</p>
      <p style="text-align: justify;">We source premium ingredients and use clean, modern processing methods to ensure the best quality batter for your daily needs.</p>

      <div class="col-md-6">
      <img src="image/about1.jpg" alt="Idly/Dosa Batter Shop" class="img-fluid about-img shadow">
    </div>

    </div>
 
  </div>
</div>
</div>

<!-- Mission & Vision -->
<div class="container pb-5 mb-3" style="font-family: cursive;">
  <div class="row g-4">
    <!-- Mission -->
    <div class="col-md-6">
      <div class="mission-card d-flex">
        <div class="icon-box">
          <i class="bi bi-bullseye"></i>
        </div>
        <div>
          <h5 class="text-success fw-bold">Our Mission</h5>
          <p style="text-align: justify;">To provide fresh, hygienic, and ready-to-use idly/dosa batter made from high-quality ingredients at an affordable price to every home.</p>
        </div>
      </div>
    </div>

    <!-- Vision -->
    <div class="col-md-6" style="font-family: cursive;">
      <div class="mission-card d-flex">
        <div class="icon-box">
          <i class="bi bi-eye"></i>
        </div>
        <div>
          <h5 class="text-success fw-bold">Our Vision</h5>
          <p style="text-align: justify;">To become a trusted household name for batter products while maintaining traditional taste with modern convenience.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Why Choose Us -->
<div class="container-fluid my-5" style="background: url('image/img.jpg') no-repeat center center/cover; font-family: cursive;">
  <div class="row align-items-center g-4">
    <div class="col-md-6">
      <h3 class="text-success ms-5">Why Choose Us?</h3>
      <ul class="list-unstyled">
        <li class="mb-2"><i class="bi bi-check-circle-fill text-success  ms-5"></i> No preservatives or additives</li>
        <li class="mb-2"><i class="bi bi-check-circle-fill text-success  ms-5"></i> Freshly prepared daily</li>
        <li class="mb-2"><i class="bi bi-check-circle-fill text-success  ms-5"></i> Hygienic packaging and delivery</li>
        <li class="mb-2"><i class="bi bi-check-circle-fill text-success  ms-5"></i> Authentic South Indian taste</li>
        <li class="mb-2"><i class="bi bi-check-circle-fill text-success  ms-5"></i> Easy online ordering & doorstep delivery</li>
      </ul>
    </div>
    <div class="col-md-6">
      <img src="image/batter.png" alt="Why Choose Us" class="img-fluid">
    </div>
  </div>
</div>


<!-- FAQ Section -->
<div class="container my-5" style="font-family: cursive;">
  <h3 class="text-center text-success mb-4">Frequently Asked Questions</h3>
  <div class="accordion" id="faqAccordion">

    <!-- Question 1 -->
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="true" aria-controls="faq1">
          What is the shelf life of the batter?
        </button>
      </h2>
      <div id="faq1" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
          Our batter stays fresh for up to 4-5 days when refrigerated at or below 5°C. Always keep it sealed and chilled.
        </div>
      </div>
    </div>

    <!-- Question 2 -->
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingTwo">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
          Do you add any preservatives or soda?
        </button>
      </h2>
      <div id="faq2" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
          No. Our batter is 100% natural and free from preservatives, soda, or any artificial additives.
        </div>
      </div>
    </div>

    <!-- Question 3 -->
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingThree">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
          How do I place an order?
        </button>
      </h2>
      <div id="faq3" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
          Simply visit our <a href="shop.php" class="text-success text-decoration-underline">Shop Page</a>, select your product, and proceed to checkout. We offer secure online payment and doorstep delivery.
        </div>
      </div>
    </div>

    <!-- Question 4 -->
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingFour">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4">
          Can I cancel or change my order after placing it?
        </button>
      </h2>
      <div id="faq4" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
          Yes, you can cancel or update your order within 30 minutes of placing it by contacting our customer support team.
        </div>
      </div>
    </div>

    <!-- Question 5 -->
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingFive">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5" aria-expanded="false" aria-controls="faq5">
          Do you deliver every day?
        </button>
      </h2>
      <div id="faq5" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
          Yes, we deliver every day including weekends and holidays, depending on your location and order time.
        </div>
      </div>
    </div>

  </div>
</div>

<!-- Call to Action -->
<div class="container text-center my-5" style="font-family: cursive;">
  <h4 class="mb-3 text-success">Ready to experience homemade-style freshness?</h4>
  <a href="shop.php" class="btn btn-danger btn-lg px-4">Order Now</a>
</div>

<?php include('footer.php')?>

<?php include('favoritesidebar.php')?>
<?php include('cartsidebar.php')?>

</body>
</html>