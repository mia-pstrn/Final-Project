<?php
include "db.php";
session_start();

if (!isset($_SESSION['admin'])) header("Location: admin_login.php");

$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM products WHERE product_id=$id");
header("Location: admin_dashboard.php");
