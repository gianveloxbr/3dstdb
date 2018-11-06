<?php
require 'connect.php';
$c = connectDB();
$boxDir = "../boxdb/";
$name = $_POST['name'];
$link = $_POST['link'];
$desc = $_POST['description'];
$rel = $_POST['releaseDate'];
$reg = $_POST['region'];
$gen = $_POST['genre'];
$box = $_FILES['box']['name'];
$temp_box = $_FILES['box']['tmp_name'];
move_uploaded_file($temp_box, $boxDir.$box);
foreach ($reg as $r){
$dataR = mysqli_real_escape_string($c,$r);
}
foreach($gen as $g){
$dataG = mysqli_real_escape_string($c,$g);
}
mysqli_query($c,"INSERT INTO db(name,link,description, releaseDate, region, genre, box) VALUES('$name','$link','$desc','$rel','$dataR','$dataG','$temp_box'");
?>