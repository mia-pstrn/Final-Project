<?php
include "db_connect.php";
session_start();

if(!isset($_SESSION['user_id'])){
   echo "<script>alert('Please login first!'); window.location='login.php';</script>";
   exit();
}

$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM user_address WHERE id='$id'"));

if(isset($_POST['update'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];

    mysqli_query($conn,"UPDATE user_address SET name='$name',email='$email',phone='$phone',address='$address' WHERE id='$id'");
    echo "<script>alert('Address Updated'); window.location='user_info.php';</script>";
}
?>

<form method="POST" style="width:40%; margin:100px auto; background:white;padding:30px;border-radius:10px;">
<h3>Edit Address</h3>

<input type="text" name="name" value="<?php echo $data['name']; ?>" required style="width:100%;padding:10px;margin:10px 0;">
<input type="email" name="email" value="<?php echo $data['email']; ?>" required style="width:100%;padding:10px;margin:10px 0;">
<input type="text" name="phone" value="<?php echo $data['phone']; ?>" required style="width:100%;padding:10px;margin:10px 0;">
<textarea name="address" rows="3" required style="width:100%;padding:10px;margin:10px 0;"><?php echo $data['address']; ?></textarea>

<button name="update" style="width:100%;background:#D9BD71;color:white;padding:12px;border:none;border-radius:6px;">Update</button>
</form>
