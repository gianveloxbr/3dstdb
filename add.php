<?php
// --- Initial Configuration ---
require 'libs/connect.php';
include 'libs/phpqrcode/qrlib.php';
$sql = "SELECT * FROM db";
$con = connectDB();

// --- HTML body ---
include 'pages/header.php';
include 'pages/navreg.php';
include 'pages/homereg.php';
include 'pages/footer.php';
?>