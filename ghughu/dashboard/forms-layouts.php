
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Forms / Layouts - NiceAdmin Bootstrap Template</title>
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
      <h1>Tambah Barang</h1>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tambah Barang</h5>

              <!-- Vertical Form -->
              <form action="action/action_add.php" method="POST" class="row g-3">
                <div class="col-12">
                  <label for="foto" class="form-label">Foto Produk</label>
                  <input type="file" class="form-control" id="foto" name="foto">
                </div>
                <div class="col-12">
                  <label for="nama" class="form-label">Nama</label>
                  <input type="text" class="form-control" id="nama" name="nama">
                </div>
                <fieldset class="row mb-3">
                  <legend class="col-form-label col-sm-2 pt-0">Rasa</legend>
                  <div class="col-sm-10">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="rasa" id="original" value="original">
                      <label class="form-check-label" for="original">
                        Original
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="rasa" id="pedas" value="pedas">
                      <label class="form-check-label" for="pedas">
                        Pedas
                      </label>
                    </div>
                </fieldset>

                <div class="col-12">
                  <label for="varian" class="form-label">Varian</label>
                  <select id="varian" class="form-select" name="varian">
                    <option selected value="stik krispi" >Stik Krispi</option>
                    <option value="kripik daun sirih">Kripik Daun Sirih</option>
                    <option value="ladrang malaysia">Ladrang Malaysia</option>
                    <option value="kuping gajah">Kuping Gajah</option>
                  </select>
                </div>
                
                <fieldset class="row mb-3">
                  <legend class="col-form-label col-sm-2 pt-0">Ukuran</legend>
                  <div class="col-sm-10">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="ukuran" id="100" value="100">
                      <label class="form-check-label" for="100">
                        100 gram
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="ukuran" id="150" value="150">
                      <label class="form-check-label" for="150">
                        150 gram
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="ukuran" id="200" value="200">
                      <label class="form-check-label" for="200">
                        200 gram
                      </label>
                    </div>
                </fieldset>

                <div class="col-12">
                  <label for="harga" class="form-label">Harga</label>
                  <input type="number" class="form-control" id="harga" name="harga">
                </div>

                <div class="col-12">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" id="deskripsi" rows="3"></textarea>
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