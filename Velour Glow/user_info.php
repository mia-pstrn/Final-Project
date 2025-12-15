<<?php 
include "db_connect.php";

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if(!isset($_SESSION['user_id'])){
    echo "<script>
        alert('You must login first to access this page.');
        window.location='login.php';
    </script>";
    exit();
}

$user_id = $_SESSION['user_id'];

if(isset($_POST['save'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $insert = "INSERT INTO user_address (user_id, name, email, phone, address)
               VALUES ('$user_id','$name','$email','$phone','$address')";
    mysqli_query($conn,$insert);

    echo "<script>alert('Address Saved Successfully!');</script>";
}

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    mysqli_query($conn,"DELETE FROM user_address WHERE id='$id' AND user_id='$user_id'");
    echo "<script>
        alert('Address Deleted!');
        window.location='user_info.php';
    </script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Velour Glow | Your Address</title>
  <link rel="stylesheet" href="style.css">
  <!-- Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200&display=swap">

    <style>
body{
    background:#F3F3E6;
    font-family:poppins;
}
.user-form-container{
    width:40%;
    margin:130px auto 30px;
    background:white;
    padding:30px;
    border-radius:10px;
    box-shadow:0 0 10px rgba(0,0,0,.1);
}

.user-form-container h3{
    text-align:center;
    margin-bottom:15px;
    font-weight:600;
}

.user-input{
    width:100%;
    padding:10px;
    margin:6px 0 15px;
    border-radius:6px;
    border:1px solid #ccc;
}

.save-btn{
    width:100%;
    background:#D9BD71;
    border:none;
    padding:12px;
    border-radius:6px;
    color:white;
    font-size:16px;
    cursor:pointer;
}

/* List Style */
.address-list{
    width:45%;
    margin:0 auto 60px;
}

.address-item{
    background:white;
    padding:18px;
    border-radius:10px;
    margin-top:10px;
    border-left:5px solid #D9BD71;
}
.address-item p{ margin:3px 0; }
</style>
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
        <a href="cart.php"><i class="fa fa-bag-shopping"></i></a>
        <a href="user_info.php" class="nav-link active"><i class="fa-solid fa-location-dot"></i></a>
      </div>
    </div>
  </header>
<!-- Form Box -->
<div class="user-form-container">
  <h3>Add Address</h3>
  
  <form method="POST">
      <label>Full Name</label>
      <input class="user-input" type="text" name="name" required>

      <label>Email</label>
      <input class="user-input" type="email" name="email" required>

      <label>Phone</label>
      <input class="user-input" type="text" name="phone" required>

      <label>Address</label>
      <textarea class="user-input" name="address" rows="3" required></textarea>

      <button class="save-btn" name="save">Save</button>
  </form>
</div>

<!-- Display Saved Addresses -->
<div class="address-list">
    <h3 style="text-align:center; margin-bottom:10px;">Saved Addresses</h3>

    <?php
    $result = mysqli_query($conn, "SELECT * FROM user_address WHERE user_id='$user_id' ORDER BY id DESC");
    while($row = mysqli_fetch_assoc($result)){ ?>
    
    <div class="address-item">
        <p><strong><?php echo $row['name']; ?></strong></p>
        <p><?php echo $row['email']; ?></p>
        <p><?php echo $row['phone']; ?></p>
        <p><?php echo $row['address']; ?></p>
        <small>Added on: <?php echo $row['created_at']; ?></small>

        <div style="margin-top:10px;">
        <a href="edit_address.php?id=<?php echo $row['id']; ?>" 
           style="padding:6px 10px; background:#4CAF50; color:white; border-radius:5px; text-decoration:none; margin-right:5px;">Edit</a>

        <a href="user_info.php?delete=<?php echo $row['id']; ?>" 
           onclick="return confirm('Delete this address?');"
           style="padding:6px 10px; background:#E74C3C; color:white; border-radius:5px; text-decoration:none;">Delete</a>
    </div>

    <?php } ?>
</div>

</body>
</html> 