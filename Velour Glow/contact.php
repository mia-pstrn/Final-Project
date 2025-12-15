<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Velour Glow | Contact</title>
  <link rel="stylesheet" href="style.css">
  <!-- Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200&display=swap">
</head>
<body>
  <!-- Top Bar -->
  <div class="top-bar">
    <p>VELOUR GLOW COSMETICS <a href="#products">Shop Now</a></p>
  </div>

  <!-- Navbar -->
  <header>
    <div class="navbar">
      <!-- Left Nav -->
      <nav class="nav-left">
        <a href="index.php" class="nav-link">Home</a>
        <a href="shop.php" class="nav-link">Shop</a>
        <a href="tutorials.php" class="nav-link">Tutorial & Tips</a>
        <a href="about.php" class="nav-link">About Us</a>
        <a href="contact.php" class="nav-link active">Contact</a>
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
  
  <!-- Contact Section -->
  <section class="contact-section">
    <h1>Contact Us</h1>
    <p>We’d love to hear from you! Email us at <strong>support@velourglow.com</strong> or use the form below.</p>

    <div class="contact-form">
      <form action="#" method="post">
        <label for="name">Full Name</label>
        <input type="text" id="name" name="name" placeholder="Enter your full name" required>

        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" required>

        <label for="subject">Subject</label>
        <select id="subject" name="subject" required>
          <option value="" disabled selected>Select an option</option>
          <option value="suggestion">Suggestion</option>
          <option value="question">Question</option>
          <option value="feedback">Feedback</option>
          <option value="others">Others</option>
        </select>

        <label for="message">Your Message</label>
        <textarea id="message" name="message" rows="5" placeholder="Type your message here..." required></textarea>

        <button type="submit">Send Message</button>
      </form>
    </div>
  </section>

  <!-- Footer -->
  <<footer class="footer">
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

    <p class="footer-copy">© 2025 Velour Glow</p>
</footer>
</body>
</html>
