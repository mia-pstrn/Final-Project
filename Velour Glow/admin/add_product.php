<?php
session_start();
include "db.php";

if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
}

if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];

    $image = $_FILES['image']['name'];
    $tmp = $_FILES['image']['tmp_name'];
    move_uploaded_file($tmp, "../images/products/".$image);

    mysqli_query($conn, "INSERT INTO products (name, category, price, stock, image) VALUES ('$name','$category','$price','$stock','$image')");

    echo "<script>alert('Product added successfully!'); window.location='admin_dashboard.php';</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Add Product - Velour Glow</title>
<link rel="stylesheet" href="admin_style.css">
</head>
<body>

<header>
  <div class="admin-navbar">
    <h2>Velour Glow Admin</h2>
    <div>
      <a href="admin_dashboard.php">Dashboard</a>
      <a href="add_product.php">Add Product</a>
      <a href="logout.php">Logout</a>
    </div>
  </div>
</header>

<div class="container">
  <h2>Add Product</h2>
  <form method="post" enctype="multipart/form-data">
    <input type="text" name="name" placeholder="Product Name" required>
    <input type="text" name="category" placeholder="Category" required>
    <input type="number" step="0.01" name="price" placeholder="Price" required>
    <input type="number" name="stock" placeholder="Stock" required>
    <input type="file" name="image" required>
    <button name="add">Add Product</button>
  </form>
</div>

</body>
</html>
