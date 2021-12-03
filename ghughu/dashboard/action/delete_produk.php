<?php

require_once("connection.php");

//Mendapatkan Data ID Produk
if ( isset($_GET["id_produk"]) ) $id_produk = $_GET["id_produk"];
else {
    echo "Data ID Produk tidak Ditemukan! <a href='../tables-data.php'>Kembali</a>";
    exit();
}

// Query Get Data Siswa
$query = "DELETE FROM produk WHERE id_produk = " . $id_produk;

//Eksekusi Query
$result = mysqli_query($mysqli, $query);

if ( ! $result ) {
    exit("Gagal Menghapus Data!");
}

header("Location: ../tables-data.php");

?>