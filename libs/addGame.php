<?php
require 'connect.php';
require 'phpqrcode/qrlib.php';
$c = connectDB();
define('IMAGE_WIDTH',200);
define('IMAGE_HEIGHT',200);
$boxDir = "../boxdb/";
$name = $_POST['name'];
$link = $_POST['link'];
$desc = $_POST['description'];
$rel = $_POST['releaseDate'];
$reg = $_POST['region'];
$gen = $_POST['genre'];
$box = $_FILES['box']['name'];
$temp_box = $_FILES['box']['tmp_name'];
$qrFolder = '../qrdb/' . $name . '.png';
$qr = QRcode::png($link, $qrFolder);
$qrName = $name . '.png';
move_uploaded_file($temp_box, $boxDir.$box);
if(!empty($reg) and is_array($reg)) {
    $regArr = implode(' , ',$reg);
}
if(!empty($gen) and is_array($gen)) {
    $genArr = implode(' , ',$gen);
}
$stmt = $c->prepare("INSERT INTO db(gameName,ciaLink,gameDesc, releaseDate, region, genre, gameBox,qr) VALUES(?,?,?,?,?,?,?,?)");
$stmt->bind_param("ssssssss",$name,$link,$desc,$rel,$regArr,$genArr,$box,$qrName);
$stmt->execute();
echo "New game added successfully";
$stmt->close();
$c->close();
?>