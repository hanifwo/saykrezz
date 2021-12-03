<?php

// Start Session
session_start();

// Mengahpus Semua Session
session_destroy();

// Ke halaman login
header("Location: ../pages-login.php");

?>