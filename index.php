<?php
// --- Initial Configuration ---
require 'libs/connect.php';
include 'libs/phpqrcode/qrlib.php';
$sql = "SELECT * FROM db";
$con = connectDB();
//$demo = QRcode::png('mirror','mirror.png');
define('IMAGE_WIDTH',200);
define('IMAGE_HEIGHT',200);

// --- HTML body ---
include 'pages/header.php';
include 'pages/navbar.php';
include 'pages/home.php';
include 'pages/footer.php';
 ?>