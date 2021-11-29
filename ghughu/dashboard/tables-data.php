<?php

require_once("action/connection.php");

$query = "SELECT * FROM produk";

$result = mysqli_query($mysqli, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Daftar Barang</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

<?php include 'asset/style.php'; ?>

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
      
      <h1>Daftar Barang</h1>
    
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              
                <div class="col text-end">

                    <!-- <a href="forms-layouts.php" class="btn btn-primary" role="button">Tambah Barang</a> -->

                </div>


              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Id produk</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Rasa</th>
                    <th scope="col">Ukuran</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Varian</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  
                  $i= 1;
                  foreach ($result as $produk) {
                    echo '<tr>
                            <th scope="row">' . $i++ . '</th>
                            <td>' . $produk["foto"] . '</td>
                            <td>' . $produk["id_produk"] . '</td>
                            <td>' . $produk["nama_produk"] . '</td>
                            <td>' . $produk["rasa"] . '</td>
                            <td>' . $produk["ukuran"] . '</td>
                            <td>' . $produk["harga"] . '</td>
                            <td>' . $produk["deskripsi"] . '</td>
                            <td>' . $produk["varian"] . '</td>
                            <td>

                                                <a href="form_edit_siswa.php?nis=' . $produk["id_produk"] . '">Edit</a>
                                                <a href="delete_siswa.php?nis=' . $produk["id_produk"] . '" onclick="return confirm_delete()"">Delete</a>

                                            </td>
                          </tr>';

                  }
                  ?>
                </tbody>
              </table>
              <div class="col text-end">
                    <a href="forms-layouts.php" class="btn btn-primary" role="button">Tambah Barang</a>
                </div>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

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