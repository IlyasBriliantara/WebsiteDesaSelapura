<?php
require './admin1/controller/beritaController.php';

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {

  // cek apakah data berhasil di tambahkan atau tidak
  if (massage($_POST) > 0) {
    echo "
			<script>
				alert('tidak terkirim!');
				document.location.href = './index.php';
			</script>
		";
  } else {
    echo "
			<script>
				alert('Terkirim');
				document.location.href = './index.php';
			</script>
		";
  }
}

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
  <link rel="icon" href="./images/logo-desa-selapura.png">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <link href="../style/main.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />


    <!-- Vendor CSS Files -->
  <!-- <link href="assets2/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets2/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets2/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets2/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets2/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets2/vendor/swiper/swiper-bundle.min.css" rel="stylesheet"> -->

  <!-- Template Main CSS File -->
  <!-- <link href="assets2/css/main.css" rel="stylesheet"> -->


   <!-- slick 1.9 -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" rel="stylesheet">

  <link rel="stylesheet" href="assets/evo-calendar/css/evo-calendar.css">

  <style>
        .offcanvas-header{ display:none; }
        .screen-overlay {
            height: 100%;
            z-index: 30;
            position: fixed;
            top: 0;
            left: 0;
            opacity:0;
            visibility:hidden;
            background-color: rgba(34, 34, 34, 0.6);
            transition:opacity .2s linear, visibility .1s, width 1s ease-in;
        }
        .screen-overlay.show {
            transition:opacity .5s ease, width 0s;
            opacity:1;
            width:100%;
            visibility:visible;
        }

        #mobile-navigation {
            display: flex;
        }

        #brand {
            display: none;
        }

        @media  all and (max-width:992px) {

            .offcanvas-header{ display:block; }

            .mobile-offcanvas{
                visibility: hidden;
                transform:translateX(-100%);
                border-radius:0;
                display:block;
                position: fixed;
                top: 0; left:0;
                height: 100%;
                z-index: 1200;
                width:80%;
                overflow-y: scroll;
                overflow-x: hidden;
                transition: visibility .2s ease-in-out, transform .2s ease-in-out;
            }

            .mobile-offcanvas.show{
                visibility: visible;
                transform: translateX(0);
                background-color: #fff !important;
            }
        }

        @media (min-width: 992px) {

            #mobile-navigation {
                display: none;
            }

            #brand {
                display: flex;
            }

            .fixed-top {
              background-color: #fff !important;
            }

         }

         .tekstur2 {
            background-image: url('assets/img/conture/kontur1-01.png');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
         }
         .tekstur3 {
            background-image: url('assets/img/conture/kontur2-01.png');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
         }
         .tekstur4 {
            background-image: url('assets/img/conture/kontur3-01.png');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
         }
         .tekstur5 {
            background-image: url('assets/img/conture/kontur4-01.png');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
         }
         .tekstur6 {
            background-image: url('assets/img/conture/kontur5-01.png');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
         }
         .tekstur7 {
            background-image: url('assets/img/conture/kontur6-01.png');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
         }

  </style>

  
<link rel="stylesheet" href="assets/css/frontend/landing2.css">

<style>
    #banner {
        height: 700px;
        object-fit: cover;
    }

    /* .slick-list emulates .row */
    #slick1 .slick-list {
      margin-left: -15px;
      margin-right: -15px;
      padding-top: 10px;
    }

    /* .slick-slide emulates .col- */
    #slick1 .slick-slide {
      padding-right: 15px;
      padding-left: 15px;
    }

    #slick1 .slick-slide:focus {
      outline: none;
    }

    /* .slick-list emulates .row */
    #slick2 .slick-list {
      margin-left: -15px;
      margin-right: -15px;
      padding-top: 10px;
    }

    /* .slick-slide emulates .col- */
    #slick2 .slick-slide {
      padding-right: 15px;
      padding-left: 15px;
    }

    #slick2 .slick-slide:focus {
      outline: none;
    }
    /* .slick-list emulates .row */
    #slick3 .slick-list {
      margin-left: -15px;
      margin-right: -15px;
      padding-top: 10px;
    }

    /* .slick-slide emulates .col- */
    #slick3 .slick-slide {
      padding-right: 15px;
      padding-left: 15px;
    }

    #slick3 .slick-slide:focus {
      outline: none;
    }

    .card-horizontal {
        display: flex;
        /* flex: 1 1 auto; */
    }
</style>

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

  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top data-aos=" fade-down"">
    <div class="container">
      <a style="font-size: x-large" class="navbar-brand" href="/index.php">
        <img src="images/logo-desa-selapura.png" alt="" width="30" class="d-inline-block align-text-top me-3" />
        <span class="text-warning">Desa </span>Selapura
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Beranda</a>
          </li>
          <li class="nav-item mx-1 dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Profil
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li>
                <a class="dropdown-item" href="pages/visi_misi.php">Visi Dan Misi</a>
              </li>
              <li>
                <a class="dropdown-item" href="pages/stk_perangkat_desa.php">Struktur Perangkat Desa</a>
              </li>
              <li>
                <a class="dropdown-item" href="pages/sejarah.php">Sejarah Desa</a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/berita.php">Berita</a>
          </li>
          <li class="nav-item mx-1 dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Informasi
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li>
                  <a class="dropdown-item" href="./pages/program_unggulan.php">program unggulan desa</a>
                  <a class="dropdown-item" href="./pages/pengumuman.php">pengumuman</a>
                </li>
              </ul>
            </li>
          <li class="nav-item mx-1 dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Galeri
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li>
                <a class="dropdown-item" href="pages/album_foto.php">Album Foto</a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/statistik.php">Statistik Penduduk</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/kontak.php">Tentang Kami</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-aos="zoom-in">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/banner-1.jpg" class="d-block w-100" alt="..." />
        <div class="carousel-caption">
          <h5>Selamat Datang di Desa Selapura</h5>
          <p>
            Desa Selapura terletak di Kecamatan Dukuhwaru, Kabupaten Tegal,
            Provinsi Jawa Tengah, Indonesia
          </p>
          <p>
            <a href="#maps" class="btn btn-warning mt-3">Baca Selengkapnya</a>
          </p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/banner-1.jpg" class="d-block w-100" alt="..." />
        <div class="carousel-caption">
          <h5>Program Unggulan Desa Selapura</h5>
          <p>
            Desa Selapura merupakan salah satu desa yang kaya akan program
            unggulannya yang sampai saat ini masih menjadi rutinitas
            masyarakat desa selapura
          </p>
          <p>
            <a href="#program-unggulan-desa" class="btn btn-warning mt-3">Baca Selengkapnya</a>
          </p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/banner-1.jpg" class="d-block w-100" alt="..." />
        <div class="carousel-caption">
          <h5>Sambutan Kepala Desa Selapura</h5>
          <p>Sambutan dari kepala Desa Selapura, yakni Bapak. Iman Santoso</p>
          <p>
            <a href="#sambutan" class="btn btn-warning mt-3">Baca Selengkapnya</a>
          </p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <br /><br />

<section id="sambutan" class="about section-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-12 col-12" data-aos="fade-up">
          <div class="about-img">
            <img src="images/kepala-desa.jpeg" alt="" class="img-fluid" /><br />
            <center>
              <h4><span class="text-muted">Kepala Desa Selapura</span></h4>
             <h4><span class="text-muted">Iman Santoso</span></h4>   
            </center>     
          </div>
        </div>
        <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5" data-aos="fade-up" data-aos-delay="100">
          <div class="about-text">
            <h2>Kata Sambutan</h2>
            <p>Assalamualaikum wr.wb</p>
            <p>
              Segala puji hanya untuk Allah dan shalawat serta salam semoga
              tercurah atas nabi yang terakhir , yaitu nabi kita Muhamad SAW
              begitu pula atas keluarga dan para sahabatnya.
            </p>
            <p>
              Alhamdulilah dengan Rahmat Allah yang Maha Kuasa Desa Selapura
              sudah memiliki website yang bertujuan untuk memudahkan dalam
              mengakses informasi tentang profil,aktifitas/kegiatan dan
              perkembangan pembangunan di wilayah Desa Selapura
            </p>
            <p>
              Website ini sabagai wujud rasa keinginan dari Desa Selapura
              untuk senantiasa mengikuti perkembangan teknolgi dewasa ini dan
              menjadi sarana interaksi pada dunia maya yang positif bersifat
              membangun .
            </p>
            <p>
              Terima kasih semoga Allah 'Azza Wa Jalla menyertai doa kita
              semua. Ammin Yaa Rabbal Alamin.
            </p>
            <p>Wassalamu'alaikum Wr.Wb</p>
            <a href="#" class="btn btn-warning">Baca Selengkapnya</a>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- portfolio strats -->
  <section id="program-unggulan-desa" class="portfolio section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12" data-aos="fade-up">
          <div class="section-header text-center pb-5">
            <h2>Program Unggulan Desa</h2>
            <p>
              Desa Selapura merupakan salah satu desa dengan kaya akan program
              unggulannya yang sampai saat ini masih menjadi rutinitas
              masyarakat desa selapura
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md-12 col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="card text-light text-center bg-white pb-2">
            <div class="card-body text-dark">
              <div class="img-area mb-4">
                <img src="images/umkm.jpg" class="img-fluid" alt="" />
              </div>
              <h3 class="card-title">UMKM Desa Selapura</h3>
              <p class="lead">
                Usaha kecil mikro menengah (UMKM), merupakan salahsatu program
                unggulan dari desa selapura.
              </p><br><br><br><br><br><br>
            <a href="/pages/program_unggulan.php" class="btn btn-warning">Baca Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-12 col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="card text-light text-center bg-white pb-2">
            <div class="card-body text-dark">
              <div class="img-area mb-4">
                <img src="images/posyandu.jpeg" class="img-fluid" alt="" />
              </div>
              <h3 class="card-title">Posyandu</h3>
              <p class="lead">
                Posyandu merupakan salah satu bentuk Upaya Kesehatan Berbasis
                Masyarakat (UKBM) yang dikelola dan diselenggarakan dari,
                oleh, untuk dan bersama masyarakat dalam penyelenggaraan
                pembangunan kesehatan guna memberdayakan masyarakat dan
                memberikan kemudahan kepada masyarakat dalam memperoleh
                pelayanan kesehatan dasar/sosial dasar untuk mempercepat
                penurunan Angka Kematian Ibu dan Angka Kematian Bayi.
              </p>
              <a href="/pages/program_unggulan.php" class="btn btn-warning">Baca Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-12 col-lg-4" data-aos="fade-up" data-aos-delay="300">
          <div class="card text-light text-center bg-white pb-2">
            <div class="card-body text-dark">
              <div class="img-area mb-4">
                <img src="images/program-ibu-hamil.jpeg" class="img-fluid" alt="" />
              </div>
              <h3 class="card-title">Posbindu</h3>
              <p class="lead">
                Posbindu merupakan pos pembinaan terpadu penyakit tidak
                menular. Kegiatan posbindu yaitu skrining faktor resiko
                penyakit tdk menular, antara lain timbang BB,TB, Lingkar
                perut, Pengukuran Tekanan Darah dan cek laboratorium sederhana
                yaitu Gula Darah.
              </p><br><br><br><br><br><br>
              <a href="/pages/program_unggulan.php" class="btn btn-warning">Baca Selengkapnya</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br /><br />

    <div class="container">
      <div class="row">
        <div class="col-12 col-md-12 col-lg-4" data-aos="fade-up" data-aos-delay="400">
          <div class="card text-light text-center bg-white pb-2">
            <div class="card-body text-dark">
              <div class="img-area mb-4">
                <img src="images/bian.jpeg" class="img-fluid" alt="" />
              </div>
              <h3 class="card-title">
                BIAN <br />
                (Bulan Imunisasi Anak Nasional)
              </h3>
              <p class="lead">
                BIAN adalah pemberian imunisasi tambahan Campak-Rubela serta
                melengkapi dosis Imunisasi Polio dan DPT-HB-Hib yang terlewat.
                Program ini diwujudkan sebagai upaya menutup kesenjangan
                imunitas anak dengan melakukan hamonisasi kegiatan imunisasi
                tambahan (campak-rubela) dan imunisasi kejar (OPV, IPV, dan
                DPT-HB-Hib)
              </p>
              <a href="/pages/program_unggulan.php" class="btn btn-warning">Baca Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-12 col-lg-4" data-aos="fade-up" data-aos-delay="500">
          <div class="card text-light text-center bg-white pb-2">
            <div class="card-body text-dark">
              <div class="img-area mb-4">
                <img src="images/posyandu-remaja.jpeg" class="img-fluid" alt="" />
              </div>
              <h3 class="card-title">
                POSYANDU REMAJA "GEMES" <br />
                (Generasi Sehat Generasi Cerdas)
              </h3>
              <p class="lead">
                Posyandu remaja adalah kegiatan berbasis kesehatan yang
                diperuntukkan khusus untuk remaja. Kegiatan ini akan membahas
                mengenai kesehatan fisik dan mental dengan tujuan membantu
                perkembangan remaja. Remaja merupakan masa peralihan dari
                anak-anak menuju dewasa.
              </p><br><br><br><br><br>
              <a href="/pages/program_unggulan.php" class="btn btn-warning">Baca Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-12 col-lg-4" data-aos="fade-up" data-aos-delay="600">
          <div class="card text-light text-center bg-white pb-2">
            <div class="card-body text-dark">
              <div class="img-area mb-4">
                <img style="width: 320px" height="300px" src="images/program-ibu-hamil.jpeg" alt="" />
              </div>
              <h3 class="card-title">Kegiatan Ibu Hamil</h3>
              <p class="lead">
                Kegiatan Ibu Hamil merupakan salah satu program unggulan dari
                desa selapura yang sampai saat ini di laksanakan oleh
                masyarakat desa selapura sampai saat ini.
              </p><br><br><br><br><br><br><br><br>
              <a href="/pages/program_unggulan.php" class="btn btn-warning">Baca Selengkapnya</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- portfolio ends -->

  <!-- team starts -->
  <section class="team section-padding" id="team">
    <div class="container">
      <div class="row">
        <div class="col-md-12" data-aos="fade-up">
          <div class="section-header text-center pb-5">
            <h2>Pegawai/Staff Kelurahan <br />Desa Selapura</h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur <br />adipisicing elit.
              Non, quo.
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
          <div class="card text-center">
            <div class="card-body">
              <img src="images/blank-profile.jpg" alt="" class="img-fluid rounded-circle" />
              <h3 class="card-title py-2">Iman Santoso</h3>
              <p class="card-text">Sebagai Kepala Desa Selapura</p><br><br>

              <p class="socials">
                <i class="bi bi-twitter text-dark mx-1"></i>
                <i class="bi bi-facebook text-dark mx-1"></i>
                <i class="bi bi-linkedin text-dark mx-1"></i>
                <i class="bi bi-instagram text-dark mx-1"></i>
              </p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
          <div class="card text-center">
            <div class="card-body">
              <img src="images/blank-profile.jpg" alt="" class="img-fluid rounded-circle" />
              <h3 class="card-title py-2">Tri Winarno</h3>
              <p class="card-text">Sebagai Sekertaris Desa Selapura</p><br>
              <p class="socials">
                <i class="bi bi-twitter text-dark mx-1"></i>
                <i class="bi bi-facebook text-dark mx-1"></i>
                <i class="bi bi-linkedin text-dark mx-1"></i>
                <i class="bi bi-instagram text-dark mx-1"></i>
              </p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
          <div class="card text-center">
            <div class="card-body">
              <img src="images/blank-profile.jpg" alt="" class="img-fluid rounded-circle" />
              <h3 class="card-title py-2">Distia Anugrah Sukma, S.E</h3>
              <p class="card-text">Sebagai Bendahara Desa Selapura</p>
              <p class="socials">
                <i class="bi bi-twitter text-dark mx-1"></i>
                <i class="bi bi-facebook text-dark mx-1"></i>
                <i class="bi bi-linkedin text-dark mx-1"></i>
                <i class="bi bi-instagram text-dark mx-1"></i>
              </p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
          <div class="card text-center">
            <div class="card-body">
              <img src="images/blank-profile.jpg" alt="" class="img-fluid rounded-circle" />
              <h3 class="card-title py-2">Sultoni</h3>
              <p class="card-text">Sebagai Kasi Pemerintahan Desa Selapura</p><br>
              <p class="socials">
                <i class="bi bi-twitter text-dark mx-1"></i>
                <i class="bi bi-facebook text-dark mx-1"></i>
                <i class="bi bi-linkedin text-dark mx-1"></i>
                <i class="bi bi-instagram text-dark mx-1"></i>
              </p>
            </div>
          </div>
        </div>
      </div>
      <br /><br />

      <div class="row">
        <div class="col-12 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
          <div class="card text-center">
            <div class="card-body">
              <img src="images/blank-profile.jpg" alt="" class="img-fluid rounded-circle" />
              <h3 class="card-title py-2">M. Nur Hadi Wibowo</h3>
              <p class="card-text">
                Sebagai Kasi Kesejahteraan Desa Selapura
              </p>

              <p class="socials">
                <i class="bi bi-twitter text-dark mx-1"></i>
                <i class="bi bi-facebook text-dark mx-1"></i>
                <i class="bi bi-linkedin text-dark mx-1"></i>
                <i class="bi bi-instagram text-dark mx-1"></i>
              </p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="600">
          <div class="card text-center">
            <div class="card-body">
              <img src="images/blank-profile.jpg" alt="" class="img-fluid rounded-circle" />
              <h3 class="card-title py-2">Syamsul Falah</h3>
              <p class="card-text">Sebagai Kasi Pelayanan Desa Selapura</p><br>
              <p class="socials">
                <i class="bi bi-twitter text-dark mx-1"></i>
                <i class="bi bi-facebook text-dark mx-1"></i>
                <i class="bi bi-linkedin text-dark mx-1"></i>
                <i class="bi bi-instagram text-dark mx-1"></i>
              </p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="700">
          <div class="card text-center">
            <div class="card-body">
              <img src="images/blank-profile.jpg" alt="" class="img-fluid rounded-circle" />
              <h3 class="card-title py-2">Dedi Aji Purwanto</h3>
              <p class="card-text">Sebagai Kaur Perencanaan Desa Selapura</p>
              <p class="socials">
                <i class="bi bi-twitter text-dark mx-1"></i>
                <i class="bi bi-facebook text-dark mx-1"></i>
                <i class="bi bi-linkedin text-dark mx-1"></i>
                <i class="bi bi-instagram text-dark mx-1"></i>
              </p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="800">
          <div class="card text-center">
            <div class="card-body">
              <img src="images/blank-profile.jpg" alt="" class="img-fluid rounded-circle" />
              <h3 class="card-title py-2">Untung Mulyani</h3>
              <p class="card-text">Sebagai Kaur TU & Umum Desa Selapura</p><br>
              <p class="socials">
                <i class="bi bi-twitter text-dark mx-1"></i>
                <i class="bi bi-facebook text-dark mx-1"></i>
                <i class="bi bi-linkedin text-dark mx-1"></i>
                <i class="bi bi-instagram text-dark mx-1"></i>
              </p>
            </div>
          </div>
        </div>
      </div>
      <br /><br />

      <div class="row">
        <div class="col-12 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
          <div class="card text-center">
            <div class="card-body">
              <img src="images/blank-profile.jpg" alt="" class="img-fluid rounded-circle" />
              <h3 class="card-title py-2">Alpionita Indri Utami</h3>
              <p class="card-text">
                Sebagai Staff Desa Selapura
              </p>

              <p class="socials">
                <i class="bi bi-twitter text-dark mx-1"></i>
                <i class="bi bi-facebook text-dark mx-1"></i>
                <i class="bi bi-linkedin text-dark mx-1"></i>
                <i class="bi bi-instagram text-dark mx-1"></i>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- team ends -->

  <!-- Maps -->
  <div id="maps" class="container mt-5" data-aos="zoom-in" data-aos-delay="500">
    <iframe class="rounded-4" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15841.268856621939!2d109.06629322702007!3d-6.971852419412569!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fbc160880b8e3%3A0x5027a76e3565b20!2sSelapura%2C%20Kec.%20Dukuhwaru%2C%20Kabupaten%20Tegal%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1680226808942!5m2!1sid!2sid" width="100%" height="350" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>

  <!-- Contact starts -->
  <section id="contact" class="contact section-padding">
    <div class="container mt-5 mb-5">
      <div class="row">
        <div class="col-md-12" data-aos="zoom-in" data-aos-delay="300">
          <div class="section-header text-center pb-5">
            <h2>Hubungi Kami</h2>
            <p>
              Silahkan kirim masukan atau pertanyaan anda terkait desa
              selapura.
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="container">
          <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
              <label for="nama" class="form-label">Nama Lengkap</label>
              <input type="text" class="form-control" name="nama" id="nama" required>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="text" class="form-control" name="email" id="email" required>
            </div>
            <div class="mb-3">
              <label for="pesan">Pesan</label>
              <textarea class="form-control" type="text" name="pesan" id="pesan" required></textarea>
            </div class="mb-3">
            <button name="submit" id="submit" class="btn btn-primary" type="submit">Pesan</button>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- contact ends -->


      <section class="link" style="background-color: #2980b930;">
    <div class="container">

        <h4 class="text-center">Link Terkait Lainya</h4>
        <hr>
        <br>

        <div class="row">
            <div class="col-md-12">
                

            <div id="slick2">
                                <div class="slide">
                    <a href="https://www.instagram.com/katar_sela_mandiri/" style="color: #000; text-decoration: none;">
                        <div class="card" style="height: 150px; box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2);
                        -webkit-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2);
                        -moz-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2); border-left-width: 10px; border-left-color: #2980b9;">
                            <div class="card-body" style="font-size: 14px">
                                <div class="row">
                                    <div class="col-12">
                                        <center>
                                        <img src="images/karang-taruna.jpg" class="img-fluid" width="50" alt="...">
                                        <br>
                                        <h6>KARANG TARUNA</h6>
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                                <div class="slide">
                    <a href="https://pkk.tegalkab.go.id/" style="color: #000; text-decoration: none;">
                        <div class="card" style="height: 150px; box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2);
                        -webkit-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2);
                        -moz-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2); border-left-width: 10px; border-left-color: #2980b9;">
                            <div class="card-body" style="font-size: 14px">
                                <div class="row">
                                    <div class="col-12">
                                        <center>
                                        <img src="images/logo-pkk.png" class="img-fluid" width="50" alt="...">
                                        <br>
                                        <h6>PKK DESA SELAPURA</h6>
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                                <div class="slide">
                    <a href="https://www.facebook.com/GPAnsorSelapura/" style="color: #000; text-decoration: none;">
                        <div class="card" style="height: 150px; box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2);
                        -webkit-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2);
                        -moz-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2); border-left-width: 10px; border-left-color: #2980b9;">
                            <div class="card-body" style="font-size: 14px">
                                <div class="row">
                                    <div class="col-12">
                                        <center>
                                        <img src="images/logo-gp-ansor.png" class="img-fluid" width="50" alt="...">
                                        <br>
                                        <h6>GP ANSOR SELAPURA</h6>
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                                <div class="slide">
                    <a href="https://www.instagram.com/ipnuippnu_desaselapura/" style="color: #000; text-decoration: none;">
                        <div class="card" style="height: 150px; box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2);
                        -webkit-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2);
                        -moz-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2); border-left-width: 10px; border-left-color: #2980b9;">
                            <div class="card-body" style="font-size: 14px">
                                <div class="row">
                                    <div class="col-12">
                                        <center>
                                        <img src="images/ipnu.png" class="img-fluid" width="50" alt="...">
                                        <br>
                                        <h6>IPNU DESA SELAPURA</h6>
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                      <div class="slide">
                    <a href="https://www.instagram.com/ipnuippnu_desaselapura/" style="color: #000; text-decoration: none;">
                        <div class="card" style="height: 150px; box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2);
                        -webkit-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2);
                        -moz-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2); border-left-width: 10px; border-left-color: #2980b9;">
                            <div class="card-body" style="font-size: 14px">
                                <div class="row">
                                    <div class="col-12">
                                        <center>
                                        <img src="images/ippnu.png" class="img-fluid" width="50" alt="...">
                                        <br>
                                        <h6>IPPNU DESA SELAPURA</h6>
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                                <div class="slide">
                    <a href="http://www.umkmselapura.com/" style="color: #000; text-decoration: none;">
                        <div class="card" style="height: 150px; box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2);
                        -webkit-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2);
                        -moz-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2); border-left-width: 10px; border-left-color: #2980b9;">
                            <div class="card-body" style="font-size: 14px">
                                <div class="row">
                                    <div class="col-12">
                                        <center>
                                        <img src="images/logo-desa-selapura.png" class="img-fluid" width="50" alt="...">
                                        <br>
                                        <h6>WEBSITE UMKM DESA SELAPURA</h6>
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            </div>
        </div>

    </div>
    </section>

  <!-- Footer -->
  <div class="container-fluid">
    <footer style="background-color: #183661" class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-6 border-top text-white">
      <div class="col mb-3 lg-4">
        <a href="/" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
          <svg class="bi me-2" width="40" height="32">
            <use xlink:href="images/logo-desa-selapura.png" />
          </svg>
          <img class="bi me-2" width="100" height="100" src="images/logo-desa-selapura.png" alt="" />
        </a>
        <p class="footer-p center text-white">
          Desa Selapura <br />
          Kecamatan Dukuhwaru <br />
          &copy; 2022
        </p>
      </div>
      <div class="col mb-3 lg-4">
        <p>
          Desa Selapura <br />
          Kecamatan Dukuhwaru <br />
          Kabupaten Tegal <br />
          Jawa Tengah <br />
          Kode pos : 52451
        </p>
      </div>

      <div class="col mb-3 lg-4">
        <h5>QUICK LINKS</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2">
            <a href="pages/statistik.php" class="nav-link p-0 text-light">Statistik Penduduk</a>
          </li>
          <li class="nav-item mb-2">
            <a href="pages/Sejarah.php" class="nav-link p-0 text-light">Sejarah Desa</a>
          </li>
          <li class="nav-item mb-2">
            <a href="pages/berita.php" class="nav-link p-0 text-light">Berita</a>
          </li>
          <li class="nav-item mb-2">
            <a href="pages/kontak.php" class="nav-link p-0 text-light">Tentang Kami</a>
          </li>
          <li class="nav-item mb-2">
            <a href="pages/album_foto.php" class="nav-link p-0 text-light">Album Foto</a>
          </li>
          <li class="nav-item mb-2">
            <a href="pages/pengumuman.php" class="nav-link p-0 text-light">Pengumuman</a>
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

  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <script src="assets/js/tower-file-input.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.4.0/bootbox.min.js"></script>

  <!-- slick 1.9 -->
<script src="assets/js/slick.min.js"></script>



  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  
  <!-- Argon JS -->
  <script src="assets/js/argon5438.js?v=1.2.0"></script>
  <script src="assets/js/iziToast.js"></script>
  <script src="assets/js/iziToast.min.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>

  <script>
      $(document).ready(function () {
        $("[data-trigger]").on("click", function(e){
            e.preventDefault();
            e.stopPropagation();
            var offcanvas_id =  $(this).attr('data-trigger');
            $(offcanvas_id).toggleClass("show");
            $('body').toggleClass("offcanvas-active");
            $(".screen-overlay").toggleClass("show");
        });

        $(".btn-close, .screen-overlay").click(function(e){
            $(".screen-overlay").removeClass("show");
            $(".mobile-offcanvas").removeClass("show");
            $("body").removeClass("offcanvas-active");
        });

        if ($(window).width() > 992) {
            var navbar_height =  $('.navbar').outerHeight();
            $(window).scroll(function() {
              if ($(this).scrollTop() > 300) {
                $('.navbar-wrap').css('height', navbar_height + 'px');
                $('#navbar_main').addClass("fixed-top");
              }else {
                $('#navbar_main').removeClass("fixed-top");
                $('.navbar-wrap').css('height', 'auto');
              }
            });
        } // end if

      });
  </script>

  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <script src="assets/js/tower-file-input.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.4.0/bootbox.min.js"></script>

  <!-- slick 1.9 -->
  <script src="assets/js/slick.min.js"></script>

  

  <script>
      function getIP(json) {

        axios.post('/ip', {
            ip: json.ip,
        })
        .then(function (response) {
            // iziToast.success({
            //     title: 'Success',
            //     message: 'Proses Berhasil',
            //     position: 'topRight'
            // });
        })
        .catch(function (error) {
            // iziToast.warning({
            //     title: 'Upps !',
            //     message: 'Proses Gagal',
            //     position: 'topRight'
            // });
        });

          // console.log("My public IP address is: ", json.ip);
          // document.getElementById("ip").value = json.ip;
      }
  </script>

  <script src="https://api.ipify.org/?format=jsonp&amp;callback=getIP"></script>

  <script>
      $(document).ready(function(){
        axios.get('/api/tema')
        .then(function (response) {
            // handle success
            var data = 0;

            var res = response.data['data'];
            for (let n = 0; n < res.length; n++) {
                var tekstur = res[n].tekstur_selected;
                data += tekstur;
            }

            switch (data){
                case 1:
                    $('body').removeClass('tekstur3');
                    $('body').removeClass('tekstur4');
                    $('body').removeClass('tekstur5');
                    $('body').removeClass('tekstur6');
                    $('body').removeClass('tekstur7');
                    $('body').removeClass('tekstur2');
                    break;
                case 2:
                    $('body').removeClass('tekstur3');
                    $('body').removeClass('tekstur4');
                    $('body').removeClass('tekstur5');
                    $('body').removeClass('tekstur6');
                    $('body').removeClass('tekstur7');
                    $('body').addClass('tekstur2');
                    break;
                case 3:
                    $('body').removeClass('tekstur2');
                    $('body').removeClass('tekstur4');
                    $('body').removeClass('tekstur5');
                    $('body').removeClass('tekstur6');
                    $('body').removeClass('tekstur7');
                    $('body').addClass('tekstur3');
                    break;
                case 4:
                    $('body').removeClass('tekstur2');
                    $('body').removeClass('tekstur3');
                    $('body').removeClass('tekstur5');
                    $('body').removeClass('tekstur6');
                    $('body').removeClass('tekstur7');
                    $('body').addClass('tekstur4');
                    break;
                case 5:
                    $('body').removeClass('tekstur2');
                    $('body').removeClass('tekstur3');
                    $('body').removeClass('tekstur4');
                    $('body').removeClass('tekstur6');
                    $('body').removeClass('tekstur7');
                    $('body').addClass('tekstur5');
                    break;
                case 6:
                    $('body').removeClass('tekstur2');
                    $('body').removeClass('tekstur3');
                    $('body').removeClass('tekstur4');
                    $('body').removeClass('tekstur5');
                    $('body').removeClass('tekstur7');
                    $('body').addClass('tekstur6');
                    break;
                case 7:
                    $('body').removeClass('tekstur2');
                    $('body').removeClass('tekstur3');
                    $('body').removeClass('tekstur4');
                    $('body').removeClass('tekstur5');
                    $('body').removeClass('tekstur6');
                    $('body').addClass('tekstur7');
                    break;
                default:
                    $('body').removeClass('tekstur2');
                    $('body').removeClass('tekstur3');
                    $('body').removeClass('tekstur4');
                    $('body').removeClass('tekstur5');
                    $('body').removeClass('tekstur6');
                    $('body').removeClass('tekstur7');
		    }

        })
        .catch(function (error) {
            // handle error
            console.log(error);
        })
        .then(function () {
            // always executed
        });
      });
  </script>

  
<script>
$(document).ready(function(){
  // bootstrap 4 breakpoints
  const breakpoint = {
    // small screen / phone
    sm: 576,
    // medium screen / tablet
    md: 768,
    // large screen / desktop
    lg: 992,
    // extra large screen / wide desktop
    xl: 1200
  };

  // bootstrap 4 responsive multi column slick carousel
  $('#slick1').slick({
      autoplay: true,
      autoplaySpeed: 5000,
      draggable: true,
      pauseOnHover: false,
      infinite: true,
      dots: false,
      arrows: false,
      speed: 1000,

      mobileFirst: true,

      slidesToShow: 1,
      slidesToScroll: 1,

      responsive: [{
          breakpoint: breakpoint.sm,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: breakpoint.md,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3
          }
        },
        {
          breakpoint: breakpoint.lg,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3
          }
        },
        {
          breakpoint: breakpoint.xl,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3
          }
        }
      ]
    });

    // bootstrap 4 responsive multi column slick carousel
  $('#slick2').slick({
      autoplay: true,
      autoplaySpeed: 5000,
      draggable: true,
      pauseOnHover: false,
      infinite: true,
      dots: false,
      arrows: false,
      speed: 1000,

      mobileFirst: true,

      slidesToShow: 1,
      slidesToScroll: 1,

      responsive: [{
          breakpoint: breakpoint.sm,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: breakpoint.md,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3
          }
        },
        {
          breakpoint: breakpoint.lg,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3
          }
        },
        {
          breakpoint: breakpoint.xl,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3
          }
        }
      ]
    });

});
</script>

<!-- Assets 2 -->
  <!-- Vendor JS Files -->
  <!-- <script src="assets2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets2/vendor/aos/aos.js"></script>
  <script src="assets2/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets2/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets2/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets2/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets2/vendor/php-email-form/validate.js"></script> -->

  <!-- Template Main JS File -->
  <!-- <script src="assets2/js/main.js"></script> -->
</body>

</html>