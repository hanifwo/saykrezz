<?php

require_once("connection.php");

// status tidak error
$error = 0;

//Memvalidasi Inputan

if ( isset($_POST['nama']) ) $nama_produk = $_POST['nama'];
else $error = 1; //Status error
if ( isset($_POST['rasa']) ) $rasa = $_POST['rasa'];
else $error = 1; //Status error
if ( isset($_POST['ukuran']) ) $ukuran = $_POST['ukuran'];
else $error = 1; //Status error
if ( isset($_POST['harga']) ) $harga = $_POST['harga'];
else $error = 1; //Status error
if ( isset($_POST['deskripsi']) ) $deskripsi = $_POST['deskripsi'];
else $error = 1; //Status error
if ( isset($_POST['varian']) ) $varian = $_POST['varian'];
else $error = 1; //Status error
// if ( isset($_POST['foto']) ) $foto = $_POST['foto'];
// else $error = 1; //Status error

if ( $error == 1 ) {
    echo "Terjadi kesalahan pada proses input data";
    exit();

}

// Mengambil data file upload
// $files = $_FILES['foto'];
// $path = "images/";

//Menangani file upload
// if ( !empty($files['name']) ) {
//     $filepath = $path . $files["name"];
//     $upload = move_uploaded_file($files["tmp_name"], $filepath);
// }
// else {
//     $filepath = "";
//     $upload = false;
// }

//Menangani error saat upload file
// if ( $upload != true && $filepath = "") {
//     exit("Gagal Mengupload file! <a href='form_toko.php'>Kembali</a>");
// }

$query = "
    INSERT INTO produk
    (nama_produk, rasa, ukuran, harga, deskripsi, varian)
    VALUES
    ('{$nama_produk}', '{$rasa}', '{$ukuran}', '{$harga}', '{$deskripsi}', '{$varian}');";

var_dump($query);
//Mengkseksekusi MsSQL query
$insert = mysqli_query($mysqli, $query);

//Menangani ketika error pada saaat eksekusi query

if ( $insert == false ) {
    echo "Error dalam menambahkan data <a href='tables-data.php'>Kembali</a>";
} 
else {
    header("Location: tables-data.php");
}
?>