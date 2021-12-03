<?php


//Memanggil File Koneksi
require_once("action/connection.php");
require_once("action/session_check.php");

// Cek Sudah Login
if ( $sessionStatus == false) {
  header("Location: pages-login.php");
}
//Status Error
$error = 0;


//Mendapatkan ID Produk
if ( isset($_GET["id_produk"]) ) $id_produk = $_GET["id_produk"];
else echo "ID Produk tidak ditemukan! <a href='../tables-data.php'>Kembali</a>";

$query = "SELECT * FROM produk WHERE id_produk = ". $id_produk;

$result = mysqli_query($mysqli, $query);



foreach ( $result as $produk ) {

    $foto = $produk['foto'];
    $id_produk = $produk['id_produk'];
    $nama_produk = $produk["nama_produk"];
    $rasa = $produk["rasa"];
    $ukuran = $produk["ukuran"];
    $harga = $produk["harga"];
    $deskripsi = $produk["deskripsi"];
    $varian = $produk["varian"];

    $originalFlavour = "";
    $pedasFlavour = "";

    $ukuran100g = "";
    $ukuran150g = "";
    $ukuran200g = "";

    $stikVarian = "";
    $ladrangVarian = "";
    $pingjahVarian = "";
    $sirihVarian = "";

    if ( $produk["rasa"] == "Original") {
        $originalFlavour = "checked";
    }
    else if ( $produk["rasa"] == "Pedas") {
        $pedasFlavour = "checked";
    }
    if ( $produk["ukuran"] == "100gram") {
      $ukuran100g = "checked";
  }
  else if ( $produk["ukuran"] == "150gram") {
    $ukuran150g = "checked";
  }
  else if ( $produk["ukuran"] == "200gram") {
    $ukuran200g = "checked";
  }
  if ( $produk["varian"] == "Stik Krispi") {
    $stikVarian = "selected";
  }
  else if ( $produk["varian"] == "Ladrang Malaysia") {
    $ladrangVarian = "selected";
  }
  else if ( $produk["varian"] == "Kuping Gajah") {
    $pingjahVarian = "selected";
  }
  else if ( $produk["varian"] == "Kripik Daun Sirih") {
    $sirihVarian = "selected";
  }

}




?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Form Data</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <?php include 'asset/style.php'; ?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.0/jquery.js"></script>
  <!-- =======================================================
  * Template Name: NiceAdmin - v2.1.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

<?php include 'asset/header.php'; ?>

<?php include 'asset/sidebar.php'; ?>  


  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Tambah Barang</h1>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tambah Barang</h5>

              <!-- Vertical Form -->
              <form action="action/edit_produk.php" method="POST" class="row g-3" enctype="multipart/form-data">
                <?php if (!is_null($foto) && !empty($foto)) : ?>
                  <div class="form-group mb-2">
                    <img src="action/<?=$foto?>" class="preview" style="width: 120px; height: 120px; object-fit: cover; border-radius: 50%;">

                    <a href="action/hapus_foto.php?id_produk=<?=$id_produk?>">Hapus Foto</a>
                  </div>
                <?php endif; ?>
                <div class="col-12">
                  <label for="foto" class="form-label">Foto Produk</label>
                  <input type="file" class="form-control" id="foto" name="foto">
                </div>
                
                <div class="col-12">
                  <label for="id_prduk" class="form-label"></label>
                  <input type="hidden" value="<?=$id_produk?>" class="form-control" id="id_produk" name="id_produk">
                </div>
                <div class="col-12">
                  <label for="nama" class="form-label">Nama</label>
                  <input type="text" value="<?=$nama_produk?>" class="form-control" id="nama" name="nama_produk">
                </div>
                <fieldset class="row mb-3">
                  <legend class="col-form-label col-sm-2 pt-0">Rasa</legend>
                  <div class="col-sm-10">
                    <div class="form-check">
                      <input class="form-check-input"  type="radio" name="rasa" id="original" value="Original" <?php if ($originalFlavour == "checked")  echo "checked='checked'"; ?>>
                      <label class="form-check-label" for="original">
                        Original
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input"  type="radio" name="rasa" id="pedas" value="Pedas" <?php if ($pedasFlavour == "checked")  echo "checked='checked'"; ?>>
                      <label class="form-check-label" for="pedas">
                        Pedas
                      </label>
                    </div>
                </fieldset>

                <div class="col-12">
                  <label for="varian" class="form-label">Varian</label>
                  <select id="varian" class="form-select" name="varian">
                    <option value="stik krispi" <?php if ($stikVarian == "selected")  echo "selected='selected'"; ?> >Stik Krispi</option>
                    <option value="kripik daun sirih" <?php if ($sirihVarian == "selected")  echo "selected='selected'"; ?>>Kripik Daun Sirih</option>
                    <option value="ladrang malaysia" <?php if ($ladrangVarian == "selected")  echo "selected='selected'"; ?>>Ladrang Malaysia</option>
                    <option value="kuping gajah" <?php if ($pingjahVarian == "selected")  echo "selected='selected'"; ?>>Kuping Gajah</option>
                  </select>
                </div>
                
                <fieldset class="row mb-3">
                  <legend class="col-form-label col-sm-2 pt-0">Ukuran</legend>
                  <div class="col-sm-10">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="ukuran" id="100" value="100gram" <?php if ($ukuran100g == "checked")  echo "checked='checked'"; ?>>
                      <label class="form-check-label" for="100">
                        100 gram
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="ukuran" id="150" value="150gram" <?php if ($ukuran150g == "checked")  echo "checked='checked'"; ?>>
                      <label class="form-check-label" for="150">
                        150 gram
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="ukuran" id="200" value="200gram" <?php if ($ukuran200g == "checked")  echo "checked='checked'"; ?>>
                      <label class="form-check-label" for="200">
                        200 gram
                      </label>
                    </div>
                </fieldset>

                <div class="col-12">
                  <label for="harga" class="form-label">Harga</label>
                  <input type="number" value="<?=$harga?>"class="form-control" id="harga" name="harga">
                </div>

                <div class="col-12">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" id="deskripsi" rows="3" ><?=$deskripsi?></textarea>
                 </div>

                <div class="text-center">
                  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form>
              <!-- Vertical Form -->

            </div>
          </div>


        </div>
      </div>
    </section>

  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->
  <!-- <script>
  $(document).ready(function(){
    console.log($originalFlavour);
    // if ($originalFlavour == "original")    $("#original").prop('checked',true);
   });
</script> -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>

</html>