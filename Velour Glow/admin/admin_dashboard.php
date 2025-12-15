<?php
session_start();
include "db.php";

if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit();
}

$products = mysqli_query($conn, "SELECT * FROM products");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Dashboard - Velour Glow</title>
<link rel="stylesheet" href="admin_style.css">
</head>
<body>

<header>
  <div class="admin-navbar">
    <h2>Velour Glow Admin</h2>
    <div>
      <a href="admin_dashboard.php" class="admin_nav-link active">Dashboard</a>
      <a href="add_product.php" class="admin_nav-link">Add Product</a>
      <a href="logout.php">Logout</a>
    </div>
  </div>
</header>

<div class="dashboard-container">
  <h2>Product List</h2>
  <table>
    <tr>
      <th>Name</th>
      <th>Category</th>
      <th>Price</th>
      <th>Stock</th>
      <th>Image</th>
      <th>Action</th>
    </tr>

    <?php while($row = mysqli_fetch_assoc($products)) { ?>
    <tr>
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['category']; ?></td>
      <td>₱<?php echo $row['price']; ?></td>
      <td><?php echo $row['stock']; ?></td>
      <td><img src="../images/products/<?php echo $row['image']; ?>" alt=""></td>
      <td><a href="delete_product.php?id=<?php echo $row['product_id']; ?>">Delete</a></td>
    </tr>
    <?php } ?>
  </table>
</div>

</body>
</html>
