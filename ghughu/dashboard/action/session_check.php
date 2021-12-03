<?php
// start session
session_start();

// Cek dan Mendapatkan SESSION status
if ( isset($_SESSION['status']) ) $sessionStatus = $_SESSION['status'];
else $sessionStatus = false;

// Cek dan Mendapatkan nama
if ( isset($_SESSION['nama']) ) $sessionNama = $_SESSION['nama'];
else $sessionNama = "";

// 
if ( isset($_SESSION['email']) ) $sessionEmail = $_SESSION['email'];
else $sessionEmail = "";

?>