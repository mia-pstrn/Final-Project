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
  <title>Velour Glow | Checkout</title>
  <link rel="stylesheet" href="style.css">
  <!-- Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200&display=swap">

<style>
.checkout-box{
  width:50%;
  margin:120px auto;
  background:#fff;
  padding:30px;
  border-radius:10px;
}
select, button{
  width:100%;
  padding:10px;
  margin-top:10px;
}
button{
  background:#D9BD71;
  border:none;
  font-weight:600;
  cursor:pointer;
}
</style>
</head>
<header>
<!-- Logo Center -->
      <div class="nav-logo">
        <h2 style="text-align:center;">Velour Glow</h2>
      </div>

</header>
<body>
<h2 style="text-align:center;">Checkout</h2>

<div class="checkout-box">
  <h3>Payment Method</h3>
  <select id="payment">
    <option value="COD">Cash on Delivery</option>
    <option value="GCash">GCash</option>
    <option value="Card">Credit / Debit Card</option>
  </select>

  <button onclick="placeOrder()">Place Order</button>
  <button onclick="cancelOrder()" style="background:#ccc; color:#000; margin-top:10px;">Cancel</button>
</div>

<script>
function placeOrder(){
  const cart = JSON.parse(localStorage.getItem('cart')) || [];
  if(cart.length === 0){
    alert("Cart empty!");
    return;
  }

  const receipt = {
    items: cart,
    payment: document.getElementById("payment").value,
    total: cart.reduce((sum,i)=>sum+(i.price*i.quantity),0),
    date: new Date().toLocaleString()
  };

  localStorage.setItem("receipt", JSON.stringify(receipt));
  localStorage.removeItem("cart");

  window.location.href = "receipt.php";
}

function cancelOrder(){
  
  window.location.href = "cart.php";
}
</script>
</body>
</html>
