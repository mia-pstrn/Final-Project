<?php
session_start();
include 'db_connect.php';

$login_error = "";

if (isset($_SESSION['user_id'])) {
    $logged_message = "You are already logged in.";
}

if(isset($_POST['login'])){
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email' LIMIT 1";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_assoc($result);

        if(password_verify($password, $row['password'])){
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['email']   = $row['email'];
            header("Location: index.php");
            exit();
        } else {
            $error = "Incorrect password.";
        }
    } else {
        $error = "Email not found.";
    }
}
?>

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

  <style>
  .login_error{colo: red;}

.login-section {
  background-color: #F3F3E6;
  min-height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 60px 20px;
}

.login-container {
  background: #fff9e6;
  border: 2px solid #EECD5C;
  box-shadow: 0 6px 20px rgba(29, 25, 18, 0.15);
  border-radius: 12px;
  padding: 40px;
  width: 100%;
  max-width: 420px;
  text-align: center;
}

.login-container h1 {
  font-size: 1.8rem;
  color: #1D1912;
  margin-bottom: 20px;
  font-family: 'Poppins', sans-serif;
}

.login-container input {
  width: 100%;
  padding: 10px 14px;
  margin-bottom: 15px;
  border: 1px solid #D2A63C;
  border-radius: 8px;
  outline: none;
  background-color: #fff;
  font-size: 1rem;
}

.login-container input:focus {
  border-color: #BB8525;
}

.login-container a {
  color: #BB8525;
  text-decoration: none;
}

.login-container a:hover {
  text-decoration: underline;
}
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
        <a href="login.php" class="nav-link active"><i class="fa fa-user"></i></a>
        <a href="cart.php"><i class="fa fa-bag-shopping"></i></a>
        <a href="user_info.php"><i class="fa-solid fa-location-dot"></i></a>
      </div>
    </div>
  </header>

<section class="login-section">
  <div class="login-container">
    <h1>Login to Your Account</h1>

    <?php if(isset($logged_message)): ?>
        <p style="color:green; text-align:center; font-weight:bold;">
            <?= $logged_message ?>
        </p>

        <div style="text-align:center; margin-top:20px;">
            <a href="index.php" 
               style="background:#D9BD71; padding:10px 20px; border-radius:6px; 
                      text-decoration:none; color:#1D1912; font-weight:600;">
                Go to Homepage
            </a>

            <a href="logout.php" 
               style="background:#BB4B4B; padding:10px 20px; border-radius:6px; 
                      text-decoration:none; color:#fff; font-weight:600; margin-left:10px;">
                Logout
            </a>
        </div>

    <?php else: ?>

      <?php if($login_error != ""): ?>
        <p style="color:red; text-align:center;"><?= $login_error ?></p>
      <?php endif; ?>

      <form method="post" action="">
        <input type="email" name="email" placeholder="Email" required><br><br>
        <input type="password" name="password" placeholder="Password" required><br><br>

        <button type="submit" name="login" 
          style="background-color:#D9BD71; color:#1D1912; font-weight:600; padding:12px 20px; border:none; border-radius:8px; font-size:1rem; width:100%; cursor:pointer; transition:0.3s;"
          onmouseover="this.style.backgroundColor='#BB8525'; this.style.color='#fff';"
          onmouseout="this.style.backgroundColor='#D9BD71'; this.style.color='#1D1912';">
        Login</button>
      </form>

      <p style="font-weight: bold;"><a href="forgot_password.php">Forgot Password?</a></p>
      <p style="font-weight: bold;"><a href="register.php">Create an account</a></p>

    <?php endif; ?>

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

</body>
</html>
