<?php

require_once("connection.php");


//Mendapatkan Data ID Produk
if (isset($_GET["id_produk"]) ) $id_produk = $_GET["id_produk"];
else {
    echo "Data ID Produk Tidak Ditemukan! <a href='../tables-data.php'>Kembali</a>";
    exit();
}


//Query Get Data Siswa
$query = "SELECT * FROM produk WHERE id_produk = " . $id_produk;


//Eksekusi Query
$result = mysqli_query($mysqli, $query);


//Fetching Data
foreach ($result as $produk) { 
    $foto = $produk["foto"];
}

if ( !is_null($foto) && !empty($foto) ) {
    $remove= unlink($foto);

    if ( $remove ) {

        //Menyiapkan Query Utk Dieksekusi
        $query = "
            UPDATE produk SET
                foto = NULL
            WHERE id_produk = '{$id_produk}'";

        //Mengeksekusi MySQL Query 
        $insert = mysqli_query($mysqli, $query);
    }
}

header("Location: ../tables-data.php");
?>