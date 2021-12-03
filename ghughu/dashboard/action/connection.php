<?php 

$mysqli = new mysqli("jongkreatif.com", "u5250287_saykrezz", "saykrezz1234", "u5250287_saykrezz");
// $mysqli = new mysqli("localhost", "root", "", "saykrezz");

// check connection

if ($mysqli->connect_errno) {
    echo "Gagal Menyambungkan ke MySQL:" . $mysqli->connect_error;
    exit();
}

?>