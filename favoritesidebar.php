
<?php include('connection.php')?>

<!-- Offcanvas Favorites Sidebar -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="favoriteSidebar" aria-labelledby="favoriteSidebarLabel" style="font-family: cursive;">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="favoriteSidebarLabel">Your Favorites</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body text-center">

    <!-- Empty State -->
    <img src="image/favorite.jpg" alt="Empty" class="mb-3" style="opacity: 0.6; width: 100%;">
    <p class="text-muted">You haven’t added any favorites yet.</p>

    <a href="products.php" class="btn btn-outline-success mt-3">Browse Products</a>
    
  </div>
</div>
