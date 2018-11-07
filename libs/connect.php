<?php
define("HOST","localhost");
define("USER","root");
define("PASS","");
define("DB","3ds");
function connectDB(){
    $c = mysqli_connect(HOST,USER,PASS,DB);
    return $c;
}
?>