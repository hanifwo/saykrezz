<?php


require_once("connection.php");


//Mendapatkan Data ID Produk
if ( isset($_POST['id_produk']) ) $id_produk = $_POST['id_produk'];
else {
    echo "Data ID Produk Tidak ditemukan! <a href='../tables-data.php'>Kembali</a>";
    exit();
}

//Query Get Data Siswa
$query = "SELECT * FROM produk WHERE id_produk = " . $id_produk;

//Eksekusi Query
$result = mysqli_query($mysqli, $query);

//Fetching Data
foreach ($result as $produk) {
     
    $foto = $produk['foto'];
    $id_produk = $produk['id_produk'];
    $nama_produk = $produk['nama_produk'];
    $rasa = $produk['rasa'];
    $ukuran = $produk['ukuran'];
    $harga = $produk['harga'];
    $deskripsi = $produk['deskripsi'];
    $varian = $produk['varian'];


}

if ( isset($_POST['id_produk']) ) $id_produk = $_POST['id_produk'];
if ( isset($_POST['nama_produk']) ) $nama_produk = $_POST['nama_produk'];
if ( isset($_POST['rasa']) ) $rasa = $_POST['rasa'];
if ( isset($_POST['ukuran']) ) $ukuran = $_POST['ukuran'];
if ( isset($_POST['harga']) ) $harga = $_POST['harga'];
if ( isset($_POST['deskripsi']) ) $deskripsi = $_POST['deskripsi'];
if ( isset($_POST['varian']) ) $varian = $_POST['varian'];


//Mengambil Data File Upload
$files = $_FILES['foto'];
$path = "storage/";

//Menangani File Upload
if ( !empty($files['name']) ) {
    $filepath = $path . $files["name"];

    $upload = move_uploaded_file($files["tmp_name"], $filepath);

    if ( $upload ) {
        unlink($foto);
    }
}
else {
    $filepath = $foto;
    $upload = false ;
}


//Menangani error saat mengupload
if ( $upload != true && $filepath != $foto ) {
    exit("Gagal Mengupload File! <a href='../form_edit_produk.php?id_produk={$id_produk}'>Kembali</a>");
}

//Menyiapkan Query MySQL untuk dieksekusi
$query = "
    UPDATE produk SET
        id_produk = '{$id_produk}',
        nama_produk = '{$nama_produk}',
        rasa = '{$rasa}',
        ukuran = '{$ukuran}',
        harga = '{$harga}',
        deskripsi = '{$deskripsi}',
        varian = '{$varian}',
        foto = '{$filepath}'
    WHERE id_produk = '{$id_produk}'
";

// Mengeksekusi MySQL Query
$insert = mysqli_query($mysqli, $query);
// var_dump($query);
// die;
//Menangani Ketika error pada saat eksekusi query
if ( $insert == false ) {
    echo "Error dalam mengubah data. <a href='../tables-data.php'>Kembali</a>";
}
else {
    header("Location: ../tables-data.php");
}
?>