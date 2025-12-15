<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Velour Glow | Home</title>
  <link rel="stylesheet" href="style.css">
  <!-- Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200&display=swap">
</head>
<body>
  <!-- Top Bar -->
  <div class="top-bar">
    <p>VELOUR GLOW COSMETICS <a href="shop.php">Shop Now</a></p>
  </div>

  <!-- Navbar -->
  <header>
    <div class="navbar">
      <!-- Left Nav -->
      <nav class="nav-left">
        <a href="index.php" class="nav-link active">Home</a>
        <a href="shop.php" class="nav-link">Shop</a>
        <a href="tutorials.php" class="nav-link">Tutorial & Tips</a>
        <a href="about.php" class="nav-link">About Us</a>
        <a href="contact.php" class="nav-link">Contact</a>
      </nav>

      <!-- Logo Center -->
      <div class="nav-logo">
        <h2>Velour Glow</h2>
      </div>

      <!-- Right Nav -->
      <div class="nav-right">
        <div class="search-box">
          <input type="text" placeholder="What are you looking for?">
          <i class="fa fa-search"></i>
        </div>
        <a href="login.php"><i class="fa fa-user"></i></a>
        <a href="cart.php"><i class="fa fa-bag-shopping"></i></a>
        <a href="user_info.php"><i class="fa-solid fa-location-dot"></i></a>
      </div>
    </div>
  </header>

  <!-- Hero Section -->
<section id="home" class="hero">
  <video autoplay muted loop playsinline class="hero-video">
    <source src="bg-video.mp4" type="video/mp4">
  </video>

  <div class="hero-content">
    <h4>Velour Glow Cosmetics</h4>
    <h1>Embrace Your Timeless Glow.</h1>
    <p>Discover beauty made to enhance your natural radiance.</p>
    <a href="shop.php" class="btn">Shop Now</a>
  </div>
</section>

  <!--IG-SECTION-->  
<section class="ig-section">
<h2>💬 What Our Customers Say</h2>
<p>Catch more shades, swatches, and behind-the-scenes on our socials.<br>
    IG: @velourglowcosmetics
</p>
<div class="ig-gallery">
<img src="IGpost1.png" alt="IG Post 1">
<img src="IGpost2.png" alt="IG Post 2">
<img src="IGpost3.jpg" alt="IG Post 3">
</div>
</section>

  <!-- CATEGORY -->
<section class="category-section">
  <h2>Shop by Category</h2>
  <div class="category-container">

    <!-- Face -->
    <div class="category-card">
      <a href="shop.php#face-section">
        <img src="Face_Cover.png" alt="Face_Cover">
        <div class="category-name">Face</div>
      </a>
    </div>

    <!-- Lips -->
    <div class="category-card">
      <a href="shop.php#lips-section">
        <img src="Lips_Cover.png" alt="Lips_Cover">
        <div class="category-name">Lips</div>
      </a>
    </div>

    <!-- Cheeks -->
    <div class="category-card">
      <a href="shop.php#cheeks-section">
        <img src="Cheeks_Cover.jpg" alt="Cheeks_Cover">
        <div class="category-name">Cheeks</div>
      </a>
    </div>

    <!-- Eyes -->
    <div class="category-card">
      <a href="shop.php#eyes-section">
        <img src="Eyes_Cover.png" alt="Eyes_Cover">
        <div class="category-name">Eyes</div>
      </a>
    </div>

  </div>
</section>

<footer class="footer">
    <div class="footer-social">
        <a href="#"><img src="facebook.png" alt="Facebook"></a>
        <a href="#"><img src="insta.png" alt="Instagram"></a>
        <a href="#"><img src="tiktok.png" alt="Tiktok"></a>
    </div>

    <div class="footer-links">
        <a href="#">Info</a> |
        <a href="#">Support</a> |
        <a href="#">Marketing</a>
    </div>

    <div class="footer-legal">
        <a href="#">Terms of Use</a> · 
        <a href="#">Privacy Policy</a>
    </div>

    <p class="footer-copy">© 2024 Velour Glow</p>
</footer>
</body>
</html>
