<?php
session_start();

if( !isset($_SESSION["login"]) ) {
	header("Location: ../index.php");
	exit;
}
require '../controller/beritaController.php';
$berita = query("SELECT * FROM pesan");

// tombol cari ditekan
if (isset($_POST["cari"])) {
  $berita = cari($_POST["keyword"]);
}



// pagination
// konfigurasi
$jumlahDataPerHalaman = 10;
$jumlahData = count(query("SELECT * FROM pesan"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;
$berita = query("SELECT * FROM pesan LIMIT $awalData, $jumlahDataPerHalaman");
//sql


// ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>admin Selapura</title>
    <link rel="icon" href="../../images/logo-desa-selapura.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"
    />
    <link rel="stylesheet" href="../assets/css/index.css" />
  </head>
  <body id="body-pd">
    <header class="header" id="header">
      <div class="header_toggle">
        <i class="bx bx-menu" id="header-toggle"></i>
      </div>
      <div class="header_img">
        <img src="../../images/blank-profile.jpg" alt="" />
      </div>
    </header>
    <div class="l-navbar" id="nav-bar">
      <nav class="nav">
        <div>
          <a href="../index.php" class="nav_logo">
            <!-- <i class="bx bx-layer nav_logo-icon"></i> -->
            <img style="width: 20px; height: 20px;" src="../../images/logo-desa-selapura.png" alt="">
            <span class="nav_logo-name">Admin <br> Desa Salapura</span>
          </a>
          <div class="nav_list">
            <a href="../index.php" class="nav_link ">
              <i class="bx bx-grid-alt nav_icon"></i>
              <span class="nav_name">Dashboard</span>
            </a>
            <a href="FromBerita.php" class="nav_link">
              <i class="bx bxs-news nav_icon"></i>
              <span class="nav_name">Berita</span>
            </a>
            <a href="recordMessage.php" class="nav_link active">
              <i class="bx bx-message-square-detail nav_icon"></i>
              <span class="nav_name">Messages</span>
            </a>
          </div>
        </div>
        <a href="#" class="nav_link">
          <i class="bx bx-log-out nav_icon"></i>
          <span class="nav_name">SignOut</span>
        </a>
      </nav>
    </div>
      
    </div>

       

<div class="container">
  <div class="pagetitle">
      <h1>Daftar Pesan</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Admin</a></li>
          <li class="breadcrumb-item">Daftar Pesan</li>
          <!-- <li class="breadcrumb-item active">Data</li> -->
        </ol>
      </nav>
    </div><!-- End Page Title -->

      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Pesan Masuk</h5>
              <p>Daftar Pesan yang di kirimkan pengunjung ke website</p>
              <!-- Table with stripped rows -->

              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Pengirim</th>
                    <th scope="col">Email</th>
                    <th scope="col">Pesan</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1;?>
          <?php foreach ($berita as $info) : ?>
                  <tr>

                    <td><?= $no;  ?></td>
                    <td><?= $info['nama'];  ?></td>
                    <td><?= $info['email'];  ?></td>
                    <td><?= $info['pesan'];  ?></td>
                  </tr>
                  <?php $no++; ?>
                  <?php endforeach; ?>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->
            </div>
          </div>
          <nav aria-label="Page navigation example">
      <ul class="pagination">
        <li class="page-item">
          <?php if ($halamanAktif > 1) : ?>
            <a class="page-link" href="?halaman=<?= $halamanAktif - 1; ?>" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
            <?php endif; ?>

            </a>
        </li>
        <?php for ($i = 1; $i <= $jumlahHalaman; $i++) : ?>
          <?php if ($i == $halamanAktif) : ?>
            <li class="page-item"><a class="page-link" href="?halaman=<?= $i; ?>"><?= $i; ?></a></li>
          <?php else : ?>
            <li class="page-item"><a class="page-link" href="?halaman=<?= $i; ?>"><?= $i; ?></a></li>
          <?php endif; ?>
        <?php endfor; ?>
        <li class="page-item">
          <?php if ($halamanAktif < $jumlahHalaman) : ?>
            <a class="page-link" href="?halaman=<?= $halamanAktif + 1; ?>" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
            </a>
          <?php endif; ?>
        </li>
      </ul>
    </nav>
  </div>

        </div>
      </div>
</div>


    <!--Container Main end-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- <script src="../vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/boxicons@latest/js/boxicons.min.js"></script>
    <script src="../assets/js/index.js"></script>
  </body>
</html>
