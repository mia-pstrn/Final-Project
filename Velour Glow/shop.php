<?php
session_start();

$isLoggedIn = isset($_SESSION['user_id']) ? 'true' : 'false';
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Velour Glow | Shop</title>
  <link rel="stylesheet" href="style.css">
  <!-- Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200&display=swap">
</head>

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
        <a href="shop.php" class="nav-link active">Shop</a>
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

  <body>
 <!-- ===== SHOP SECTION ===== -->
<section class="shop-container">
  <h2>Our Products</h2>

  <!-- ===== LIPSTICK SECTION ===== -->
  <h3 id="lips-section" class="product-category">Velour Matte Lipstick</h3>
  <div class="products">
    <div class="product-card">
      <img src="lipstick1.png" alt="lipstick1">
      <div class="product-info">
        <h4>Gloss</h4>
        <p>A soft nude-pink matte shade that gives a smooth, natural elegance perfect for everyday wear.</p>
        <div class="price">₱199</div>
        <div class="product-buttons">
          <button class="btn">Add to Cart</button>
          <button class="btn buy-now-btn">Buy Now</button>
        </div>
      </div>
    </div>

    <div class="product-card">
      <img src="lipstick2.png" alt="lipstick2">
      <div class="product-info">
        <h4>Vivid</h4>
        <p>Bright and lively, this peach-orange tint brings a fresh burst of color to your lips.</p><br>
        <div class="price">₱199</div>
        <div class="product-buttons">
          <button class="btn">Add to Cart</button>
          <button class="btn buy-now-btn">Buy Now</button>
        </div>
      </div>
    </div>

    <div class="product-card">
      <img src="lipstick3.png" alt="lipstick3">
      <div class="product-info">
        <h4>Berry</h4>
        <p>A rich, pink berry shade that delivers a sophisticated, youthful glow in a bold matte texture.</p>
        <div class="price">₱199</div>
        <div class="product-buttons">
          <button class="btn">Add to Cart</button>
          <button class="btn buy-now-btn">Buy Now</button>
        </div>
      </div>
    </div>

    <div class="product-card">
      <img src="lipstick4.png" alt="lipstick4">
      <div class="product-info">
        <h4>Nude</h4>
        <p>Timeless and natural, this nude shade enhances your lips with a classic matte tone.</p><br>
        <div class="price">₱199</div>
        <div class="product-buttons">
          <button class="btn">Add to Cart</button>
          <button class="btn buy-now-btn">Buy Now</button>
        </div>
      </div>
    </div>
  </div>

  <!-- ===== FOUNDATION SECTION ===== -->
  <h3 id="face-section" class="product-category">Glow Foundation</h3>
  <div class="products">
    <div class="product-card">
      <img src="foundation1.png" alt="foundation1">
      <div class="product-info">
        <h4>Pebble</h4>
        <p>Designed for fair complexions, this shade gives flawless, lightweight coverage.</p><br>
        <div class="price">₱349</div>
        <div class="product-buttons">
          <button class="btn">Add to Cart</button>
          <button class="btn buy-now-btn">Buy Now</button>
        </div>
      </div>
    </div>

    <div class="product-card">
      <img src="foundation2.png" alt="foundation2">
      <div class="product-info">
        <h4>Neutral</h4>
        <p>Perfect for balanced skin tones, this natural shade blends seamlessly for a smooth finish.</p><br>
        <div class="price">₱349</div>
        <div class="product-buttons">
          <button class="btn">Add to Cart</button>
          <button class="btn buy-now-btn">Buy Now</button>
        </div>
      </div>
    </div>

    <div class="product-card">
      <img src="foundation3.png" alt="foundation3">
      <div class="product-info">
        <h4>Ivory</h4>
        <p>Ideal for medium to tan skin, this warm shade creates a radiant, even complexion.</p><br>
        <div class="price">₱349</div>
        <div class="product-buttons">
          <button class="btn">Add to Cart</button>
          <button class="btn buy-now-btn">Buy Now</button>
        </div>
      </div>
    </div>

    <div class="product-card">
      <img src="foundation4.png" alt="foundation4">
      <div class="product-info">
        <h4>Toupe</h4>
        <p>Made for deep skin tones, this formula perfects the complexion with rich, full coverage.</p>
        <div class="price">₱349</div>
        <div class="product-buttons">
          <button class="btn">Add to Cart</button>
          <button class="btn buy-now-btn">Buy Now</button>
        </div>
      </div>
    </div>
  </div>

  <!-- ===== BLUSH SECTION ===== -->
  <h3 id="cheeks-section" class="product-category">Velour Blush</h3>
  <div class="products">
    <div class="product-card">
      <img src="blush1.png" alt="blush1">
      <div class="product-info">
        <h4>Milk Tint Sweet Pea</h4>
        <p>Delivers a rosy flush that adds freshness and a dewy, natural glow.</p>
        <div class="price">₱259</div>
        <div class="product-buttons">
          <button class="btn">Add to Cart</button>
          <button class="btn buy-now-btn">Buy Now</button>
        </div>
      </div>
    </div>

    <div class="product-card">
      <img src="blush2.png" alt="blush2">
      <div class="product-info">
        <h4>Milk Tint Lychee</h4>
        <p>Gives a soft light-pink tint that brightens the cheeks with gentle color.</p>
        <div class="price">₱259</div>
        <div class="product-buttons">
          <button class="btn">Add to Cart</button>
          <button class="btn buy-now-btn">Buy Now</button>
        </div>
      </div>
    </div>

    <div class="product-card">
      <img src="blush3.png" alt="blush3">
      <div class="product-info">
        <h4>Milk Tint Peachy</h4>
        <p>Creates a warm peachy glow that’s perfect for a soft, sunlit look.</p>
        <div class="price">₱259</div>
        <div class="product-buttons">
          <button class="btn">Add to Cart</button>
          <button class="btn buy-now-btn">Buy Now</button>
        </div>
      </div>
    </div>

    <div class="product-card">
      <img src="blush4.png" alt="blush4">
      <div class="product-info">
        <h4>Milk Tint Coral</h4>
        <p>Adds a nude-orange warmth that instantly enhances the cheeks with healthy radiance.</p>
        <div class="price">₱259</div>
        <div class="product-buttons">
          <button class="btn">Add to Cart</button>
          <button class="btn buy-now-btn">Buy Now</button>
        </div>
      </div>
    </div>
  </div>

  <!-- ===== EYE SECTION ===== -->
  <h3 id="eyes-section" class="product-category">Velour Glow Eye Products</h3>
  <div class="products">
    <div class="product-card">
      <img src="eyeliner.png" alt="eyeliner1">
      <div class="product-info">
        <h4>Eyeliner</h4>
        <p>Velour Glow  Precision Liner</p>
        <p>The ultimate fine-tip for a flawless, rich line. Effortlessly create bold wings or subtle definition.</p><br>
        <div class="price">₱189</div>
        <div class="product-buttons">
          <button class="btn">Add to Cart</button>
          <button class="btn buy-now-btn">Buy Now</button>
        </div>
      </div>
    </div>

    <div class="product-card">
      <img src="mascara.png" alt="eyeliner2">
      <div class="product-info">
        <h4>Mascara</h4>
        <p>Velour Glow Volumizing Mascara</p>
        <p>Lush, black intensity for dramatic volume and length, instantly defining your gaze.</p><br>
        <div class="price">₱239</div>
        <div class="product-buttons">
          <button class="btn">Add to Cart</button>
          <button class="btn buy-now-btn">Buy Now</button>
        </div>
      </div>
    </div>

    <div class="product-card">
      <img src="eyeshadow.png" alt="mascara1">
      <div class="product-info">
        <h4>Eyeshadow</h4>
        <p>Velour Glow 6-Shade Eye Palette</p>
        <p>A curated collection of six buttery-smooth shades, designed to blend seamlessly for
        day-to-night glam.</p>
        <div class="price">₱299</div>
        <div class="product-buttons">
          <button class="btn">Add to Cart</button>
          <button class="btn buy-now-btn">Buy Now</button>
        </div>
      </div>
    </div>

    <div class="product-card">
      <img src="ClusterLashes.png" alt="eyeliner4">
      <div class="product-info">
        <h4>Cluster Lashes</h4>
        <p>Velour Glow Luxe Clusters</p>
        <p>Customizable volume that mimics the look of professional extensions. Build your dream lash with ease and comfort.</p><br>
        <div class="price">₱299</div>
        <div class="product-buttons">
          <button class="btn">Add to Cart</button>
          <button class="btn buy-now-btn">Buy Now</button>
        </div>
      </div>
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

    <p class="footer-copy">© 2025 Velour Glow</p>
</footer>

  <script>
    // Login check variable from PHP
const isLoggedIn = <?= $isLoggedIn ?>;

// ===== ADD TO CART =====
document.querySelectorAll('.btn').forEach(button => {
  button.addEventListener('click', () => {

    if (!isLoggedIn) {
      alert("Please login first to add items to your cart.");
      window.location.href = "login.php";
      return;
    }

    let cart = JSON.parse(localStorage.getItem('cart')) || [];

    const card = button.closest('.product-card');
    const name = card.querySelector('h4').innerText;
    const price = parseFloat(card.querySelector('.price').innerText.replace('₱',''));
    const img = card.querySelector('img').src;

    const existingItem = cart.find(item => item.name === name);

    if (existingItem) {
      existingItem.quantity += 1;
    } else {
      cart.push({
        name: name,
        price: price,
        img: img,
        quantity: 1
      });
    }

    localStorage.setItem('cart', JSON.stringify(cart));
    alert(name + " added to cart!");
  });
});


// ===== BUY NOW (UPDATED) =====
document.querySelectorAll('.buy-now-btn').forEach((button) => {
  button.addEventListener('click', () => {

    if (!isLoggedIn) {
      alert("Please login first to proceed with buying.");
      window.location.href = "login.php";
      return;
    }

    const card = button.closest('.product-card');

    const product = {
      name: card.querySelector('h4').innerText,
      price: parseFloat(card.querySelector('.price').innerText.replace('₱','')),
      img: card.querySelector('img').src,
      quantity: 1
    };

    localStorage.setItem('cart', JSON.stringify([product]));

    window.location.href = "checkout.php";
  });
});


  </script>
 
</body>
</html>