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
  <title>Velour Glow | Receipt</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins&display=swap">

  <style>
    body {
      background-color: #F3F3E6;
      font-family: 'Poppins', sans-serif;
    }

    .receipt-container {
      max-width: 800px;
      margin: 60px auto;
      background: #fff;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 6px 20px rgba(0,0,0,0.1);
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    .receipt-item {
      display: flex;
      justify-content: space-between;
      border-bottom: 1px solid #eee;
      padding: 10px 0;
    }

    .total {
      text-align: right;
      font-size: 18px;
      font-weight: bold;
      margin-top: 20px;
    }

    .receipt-footer {
      text-align: center;
      margin-top: 30px;
    }

    .btn {
      background: #D9BD71;
      border: none;
      padding: 10px 20px;
      border-radius: 6px;
      cursor: pointer;
      font-weight: 600;
    }
  </style>
</head>

<body>

<div class="receipt-container">
  <h2>Order Receipt</h2>

  <div id="receiptItems"></div>

  <div class="total" id="receiptTotal"></div>

  <div class="receipt-footer">
    <p>Thank you for shopping at <strong>Velour Glow</strong> 💄</p>
    <button class="btn" onclick="goHome()">Back to Home</button>
  </div>
</div>

<script>
const receipt = JSON.parse(localStorage.getItem('receipt'));
const receiptItems = document.getElementById('receiptItems');
const receiptTotal = document.getElementById('receiptTotal');

if (!receipt) {
  receiptItems.innerHTML = "<p>No receipt found.</p>";
} else {
  let total = 0;

  receipt.items.forEach(item => {
    const subtotal = item.price * item.quantity;
    total += subtotal;

    receiptItems.innerHTML += `
      <div class="receipt-item">
        <span>${item.name} (x${item.quantity})</span>
        <span>₱${subtotal}</span>
      </div>
    `;
  });

  receiptTotal.innerHTML = "Total Paid: ₱" + total.toFixed(2);
}

function goHome() {
  localStorage.removeItem('receipt');
  window.location.href = "index.php";
}
</script>

</body>
</html>
