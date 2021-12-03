<?php

require_once("connection.php");

//Status Tidak error
$error = 0;


//Memvalidasi Inputan
if ( isset($_POST['email']) ) $email = $_POST['email'];
else $error = 1; //Status error
if ( isset($_POST['nama']) ) $nama = $_POST['nama'];
else $error = 1; //Status error
if ( isset($_POST['password']) ) $password = $_POST['password'];
else $error = 1; //Status error
if ( isset($_POST['re-password']) ) $repassword = $_POST['re-password'];
else $error = 1; //Status error


// Mengatasi Error Pada Inputan
if ( $error == 1 ) {
    echo "Terjadi Kesalahan Pada Proses Inputan Data <a href='../pages-register.php'>Kembali</a>";
    exit();
}

//Pengecekan Password dan Konfirmasi Password
if ( $password != $repassword ) {
    echo "Password Tidak Sama, Ulangi Kembali! <a href='../pages-register.php'>Kembali</a>";
    exit();
}
else {
    $password = hash("sha256", $password);
}

//Query MySQL
$query = "
        INSERT INTO admin
        (email, nama, password)
        VALUES
        ('{$email}', '{$nama}', '{$password}')";

//Eksekusi Query
$insert =mysqli_query($mysqli, $query);

//Mengangani Error ketika ekseskusi
if  ( $insert == false ) {
    echo "Error dalam Menambahkan Data ! <a href='../pages-register.php'>Kembali</a>";
}
else {
    header("Location: ../tables-data.php");
}
?>