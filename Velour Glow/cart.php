<?php
session_start();
if (!isset($_SESSION['user_id'])) {
  header("Location: login.php");
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Velour Glow | Your Cart</title>
  <link rel="stylesheet" href="style.css">
  <!-- Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200&display=swap">

  <style>
    body {
      background-color: #F3F3E6;
      font-family: 'Poppins', sans-serif;
    }

    .cart-container {
      max-width: 900px;
      margin: 60px auto;
      padding: 20px;
    }

    .cart-item {
      display: flex;
      align-items: center;
      background: #fff;
      margin-bottom: 15px;
      padding: 15px;
      border-radius: 10px;
    }

    .cart-item img {
      width: 100px;
      margin-right: 20px;
      border-radius: 10px;
    }

    .cart-info {
      flex: 1;
    }

    .cart-info h4 {
      margin: 0 0 5px;
    }

    .qty-controls {
      display: flex;
      align-items: center;
      gap: 10px;
      margin-top: 8px;
    }

    .qty-btn {
      background: #D9BD71;
      border: none;
      padding: 5px 10px;
      cursor: pointer;
      border-radius: 5px;
      font-size: 16px;
    }

    .remove-btn {
      background: #d9534f;
      color: white;
      border: none;
      padding: 8px 12px;
      cursor: pointer;
      border-radius: 5px;
    }

    .total {
      text-align: right;
      font-weight: bold;
      margin-top: 20px;
      font-size: 18px;
    }

    .checkout-btn {
      display: block;
      margin-left: auto;
      margin-top: 15px;
      background: #D9BD71;
      border: none;
      padding: 10px 20px;
      cursor: pointer;
      border-radius: 5px;
    }
  </style>
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
        <a href="cart.php" class="nav-link active"><i class="fa fa-bag-shopping"></i></a>
        <a href="user_info.php"><i class="fa-solid fa-location-dot"></i></a>
      </div>
    </div>
  </header>
<body>

<div class="cart-container">
  <h2>My Cart</h2>
  <div id="cartItems"></div>
  <div class="total" id="cartTotal"></div>
  <button class="checkout-btn" onclick="goCheckout()">Proceed to Checkout</button>
</div>

<script>
let cart = JSON.parse(localStorage.getItem('cart')) || [];
const cartItems = document.getElementById('cartItems');
const cartTotal = document.getElementById('cartTotal');

function renderCart() {
  cartItems.innerHTML = "";
  let total = 0;

  if (cart.length === 0) {
    cartItems.innerHTML = "<p>Your cart is empty.</p>";
    cartTotal.innerHTML = "";
    return;
  }

  cart.forEach((item, index) => {
    const subtotal = item.price * item.quantity;
    total += subtotal;

    cartItems.innerHTML += `
      <div class="cart-item">
        <img src="${item.img}">
        <div class="cart-info">
          <h4>${item.name}</h4>
          <p>₱${item.price}</p>

          <div class="qty-controls">
            <button class="qty-btn" onclick="updateQty(${index}, -1)">−</button>
            <strong>${item.quantity}</strong>
            <button class="qty-btn" onclick="updateQty(${index}, 1)">+</button>
          </div>

          <p>Subtotal: ₱${subtotal}</p>
        </div>

        <button class="remove-btn" onclick="removeItem(${index})">Remove</button>
      </div>
    `;
  });

  cartTotal.innerHTML = "Total: ₱" + total.toFixed(2);
}

function updateQty(index, change) {
  cart[index].quantity += change;

  if (cart[index].quantity <= 0) {
    cart.splice(index, 1);
  }

  localStorage.setItem('cart', JSON.stringify(cart));
  renderCart();
}

function removeItem(index) {
  cart.splice(index, 1);
  localStorage.setItem('cart', JSON.stringify(cart));
  renderCart();
}

function goCheckout() {
  if (cart.length === 0) {
    alert("Your cart is empty.");
    return;
  }
  window.location.href = "checkout.php";
}

renderCart();
</script>

</body>
</html>
