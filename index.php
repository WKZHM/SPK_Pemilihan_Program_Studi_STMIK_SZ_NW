<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Halaman Utama</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
</head>

<body class="index-page" data-bs-spy="scroll" data-bs-target="#navmenu">

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
        <h1>Sistem Pendukung Keputusan</h1>
        <span>.</span>
      </a>

      <!-- Nav Menu -->
      <nav id="navmenu" class="navmenu">


        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav><!-- End Nav Menu -->

      <a class="btn-getstarted" href="login.php">Login</a>

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- Hero Section - Home Page -->
    <section id="hero" class="hero">

      <img src="assets/img/kampus.JPG" alt="" data-aos="fade-in">

      <div class="container">
        <div class="row">
          <div class="col-lg-10">
            <h2 data-aos="fade-up" data-aos-delay="100">Sisem Pendukung Keputusan</h2>
            <p data-aos="fade-up" data-aos-delay="200">Pemilihan Program Studi Untuk Mahasiswa Baru</p>
            <p data-aos="fade-up" data-aos-delay="200">STMIK SYAIKH ZAINUDDIN NW</p>
          </div>
          <div class="col-lg-5">
            <form action="print.php" class="sign-up-form d-flex" data-aos="fade-up" data-aos-delay="300">
              <input type="text" class="form-control" placeholder="Masukkan No UJian" name="no_ujian" required>
              <input type="submit" class="btn btn-primary" value="Cetak">
            </form>
          </div>
        </div>
      </div>

    </section><!-- End Hero Section -->


    <!-- About Section - Home Page -->
    <section id="about" class="about">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row align-items-xl-center gy-5">

          <div class="col-xl-5 content">
            <h3>About</h3>
            <h2>SPK</h2>
            <p>Sistem Pendukung Keputusan (SPK) merupakan suatu sistem informasi berbasis komputer yang menghasilkan berbagai alternatif keputusan untuk membantu dalam menangani suatu permasalahan yang terstruktur maupun tidak terstruktur. Tujuan adanya SPK, untuk mendukung pengambilan keputusan dengan memilih alternatif hasil pengolahan informasi dengan model-model pengambilan keputusan serta untuk menyelesaikan masalah yang bersifat semi terstruktur dan tidak terstruktur. (Nashrullah et al, 2015)</p>
            <a href="index.php#about" class="read-more"><span>Langkah-Langkah</span><i class="bi bi-arrow-right"></i></a>
          </div>

          <div class="col-xl-7">
            <div class="row gy-4 icon-boxes">

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box">
                  <i class="bi bi-1-circle"></i>
                  <h3>Pembobotan</h3>
                  <p>Pertama akan ditentukan bobot nilai masing-masing aspek dengan menggunakan bobot gap. Untuk mendapatkan bobot gap harus menghitung dulu gapnya</p>
                  <p>Rumus <strong>Gap = (Profil Maba/Hasil Ujian)-(Standar Kriteria/Profil Data)</strong></p>
                </div>
              </div> <!-- End Icon Box -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box">
                  <i class="bi bi-2-circle"></i>
                  <h3>Cari CF & SF</h3>
                  <p>Setelah menentukan bobot nilai gap, kemudian dikelompokan menjadi 2 kelompok yaitu:</p>
                  <p>1. Core Factor (Faktor Utama), Rumus : <strong>NFC = ENC / EIC</strong></p>
                  <p>2. Secondary Factor (faktor pendukung), Rumus : <strong>NFS = ENS / EIS</strong></p>
                </div>
              </div> <!-- End Icon Box -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box">
                  <i class="bi bi-3-circle"></i>
                  <h3>Menghitung Nilai Total</h3>
                  <p>Nilai Total diperoleh dari prosentase core factor dan secondary factor yang diperkirakan berpengaruh terhadap hasil tiap-tiap profil.</p>
                  <p><strong>N = (x) % NCF + (x) % NSF</strong></p>
                </div>
              </div> <!-- End Icon Box -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="icon-box">
                  <i class="bi bi-4-circle"></i>
                  <h3>Ranking</h3>
                  <p>Hasil Akhir dari proses profile matching adalah ranking. Penentuan ranking mengacu pada hasil perhitungan tertentu.</p>
                  <p><strong>Ranking = (x) % NMA + (x) % NSA</strong></p>
                </div>
              </div> <!-- End Icon Box -->

            </div>
          </div>

        </div>
      </div>

    </section><!-- End About Section -->

  </main>
  <hr>

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-7 col-md-12 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span>SISTEM PENDUKUNG KEPUTUSAN</span>
          </a>
          <p>Sistem Pendukung Keputusan Pemilihan Program Studi Untuk Mahasiswa Baru DI STMIK Syaikh Zainuddin Nahdlatul Wathan</p>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-5 col-md-12 footer-contact text-center text-md-start">
          <h2>Contact</h2>
          <p>Alamat :</p>
          <p>Jln. Raya Mataram- Lb.Lombok KM 49 Desa Anjani, Lombok Timur- NTB</p>
          <p class="mt-4"><strong>Phone:</strong> <span>(0376) 631645 789</span></p>
          <p><strong>Email:</strong> <span>kontak@stmiksznw.ac.id</span></p>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>&copy; <span>Copyright</span> <strong class="px-1">WKZHM</strong> <span><?= date('Y'); ?></span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://www.instagram.com/haris_2nd/">Mahasiswa STMIK</a>
      </div>
    </div>

  </footer><!-- End Footer -->

  <!-- Scroll Top Button -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
  </div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->

</body>

</html>