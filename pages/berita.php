
<?php
require '../admin1/controller/beritaController.php';
// require 'controller/beritaController.php';
$berita = query("SELECT * FROM berita");




?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Desa Selapura</title>

  <!-- Icon Page -->
  <link rel="icon" href="../images/logo-desa-selapura.png">


  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <link href="../style/main.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />
</head>

<body>
  <!-- Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.slim.min.js"></script>
  <script src="../vendor/bootstrap/js2/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> -->
  <script>
    AOS.init();
  </script>

  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
      <a style="font-size: x-large" class="navbar-brand" href="#">
        <img src="../images/logo-desa-selapura.png" alt="" width="30" class="d-inline-block align-text-top me-3" />
        <span class="text-warning">Desa </span>Selapura
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="../../index.php">Beranda</a>
          </li>
          <li class="nav-item mx-1 dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Profil
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li>
                <a class="dropdown-item" href="visi_misi.php">Visi Dan Misi</a>
              </li>
              <li>
                <a class="dropdown-item" href="stk_perangkat_desa.php">Struktur Perangkat Desa</a>
              </li>
              <li>
                <a class="dropdown-item" href="sejarah.php">Sejarah Desa</a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#services">Berita</a>
          </li>
          <li class="nav-item mx-1 dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Informasi
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li>
                  <a class="dropdown-item" href="program_unggulan.php">program unggulan desa</a>
                  <a class="dropdown-item" href="pengumuman.php">pengumuman</a>
                </li>
              </ul>
            </li>
          </li>
          <li class="nav-item mx-1 dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Galeri
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li>
                <a class="dropdown-item" href="album_foto.php">Album Foto</a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="statistik.php">Statistik Penduduk</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="kontak.php">Tentang Kami</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Contact starts -->
  <section id="contact" class="contact section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12" data-aos="zoom-in" data-aos-delay="300">
          <div class="section-header text-center pb-5">
            <h2>Berita</h2>
            <p>Berita Selapura Seputar Desa Selapura</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- contact ends -->

  <!--Section: News of the day-->
  
  <?php foreach ($berita as $info) : ?>
  <div class="container">
    <div class="row gx-5 mt-6">
      <div class="col-md-5 mb-4">
        <div class="bg-image ripple shadow-1-strong rounded-5" data-mdb-ripple-color="light">
          <img src="../admin1/assets/img/<?= $info["gambar"]; ?>" class="img-fluid" />
          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
          </a>
        </div>
      </div>
      <div class="col-md-7 mb-4">
        <span class="badge bg-danger px-2 py-1 shadow-1-strong mb-3">Berita Hari Ini</span>
        <h4><strong><?= htmlspecialchars($info['judul']); ?></strong></h4>
        
        <p class="text-muted">
        <?= htmlspecialchars($info['simpelberita']); ?>
        </p>
        <a href="fullberita.php?id=<?= $info['id']; ?>"><button type="button" class="btn btn-primary">Baca Selepngkapnya</button></a>
      </div>
    </div>
  </div>
  <?php endforeach ?>
<!-- akhir -->


  <!-- Footer -->
  <div class="container-fluid">
    <footer style="background-color: #183661" class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-6 border-top text-white">
      <div class="col mb-3">
        <a href="" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
          <svg class="bi me-2" width="40" height="32">
            <use xlink:href="../images/logo-desa-selapura.png" />
          </svg>
          <img class="bi me-2" width="100" height="100" src="../images/logo-desa-selapura.png" alt="" />
        </a>
        <p class="footer-p center text-white">
          Desa Selapura <br />
          Kecamatan Dukuhwaru <br />
          &copy; 2022
        </p>
      </div>
      <div class="col mb-3">
        <p>
          Desa Selapura <br />
          Kecamatan Dukuhwaru <br />
          Kabupaten Tegal <br />
          Jawa Tengah <br />
          Kode pos : 52451
        </p>
      </div>

      <div class="col mb-3">
        <h5>QUICK LINKS</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2">
            <a href="statistik.php" class="nav-link p-0 text-light">Statistik Penduduk</a>
          </li>
          <li class="nav-item mb-2">
            <a href="sejarah.php" class="nav-link p-0 text-light">Sejarah Desa</a>
          </li>
          <li class="nav-item mb-2">
            <a href="berita.php" class="nav-link p-0 text-light">Berita</a>
          </li>
          <li class="nav-item mb-2">
            <a href="kontak.php" class="nav-link p-0 text-light">Tentang Kami</a>
          </li>
          <li class="nav-item mb-2">
            <a href="album_foto.php" class="nav-link p-0 text-light">Album Foto</a>
          </li>
          <li class="nav-item mb-2">
            <a href="pengumuman.php" class="nav-link p-0 text-light">Pengumuman</a>
          </li>
        </ul>
      </div>

      <div class="col mb-3">
        <h5>GET IN TOUCH</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2">
            <a href="#" class="nav-link p-0 text-light">desaselapura.tegal@gmail.com</a>
          </li>
        </ul>
      </div>

      <div class="col mb-3">
        <h5>PRESENTED BY</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="/pages/team_dev.php" class="nav-link p-0 text-light">Team Developer</a></li>
          <!-- <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Features</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Pricing</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">FAQs</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">About</a></li> -->
        </ul>
      </div>
    </footer>
  </div>
</body>

</html>