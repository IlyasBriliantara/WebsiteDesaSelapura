<?php
session_start();

if (!isset($_SESSION["login"])) {
  header("Location: admin1/pages/userlogin/login.php");
  exit;
}

require './controller/beritaController.php';
$berita = query("SELECT * FROM berita");

// tombol cari ditekan
if (isset($_POST["cari"])) {
  $berita = cari($_POST["keyword"]);
}

// pagination
// konfigurasi
$jumlahDataPerHalaman = 10;
$jumlahData = count(query("SELECT * FROM berita"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;
$berita = query("SELECT * FROM berita LIMIT $awalData, $jumlahDataPerHalaman");
//sql


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>admin Selapura</title>
  <link rel="icon" href="../images/logo-desa-selapura.png">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
  <link rel="stylesheet" href="assets/css/index.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="assets/js/script.js"></script>
  <script src="assets/js/jquery.min.js"></script>
</head>
<body id="body-pd">
  <header class="header" id="header">
    <div class="header_toggle">
      <i class="bx bx-menu" id="header-toggle"></i>
    </div>
    <div class="header_img">
      <img src="../images/blank-profile.jpg" alt="" />
    </div>
  </header>
  <div class="l-navbar" id="nav-bar">
    <nav class="nav">
      <div>
        <a href="index.php" class="nav_logo">
          <!-- <i class="bx bx-layer nav_logo-icon"></i> -->
          <img style="width: 20px; height: 20px;" src="../images/logo-desa-selapura.png" alt="">
          <span class="nav_logo-name">Admin <br> Desa Selapura</span>
        </a>
        <div class="nav_list">
          <a href="index.php" class="nav_link active">
            <i class="bx bx-grid-alt nav_icon"></i>
            <span class="nav_name">Dashboard</span>
          </a>
          <a href="pages/FromBerita.php" class="nav_link">
            <i class="bx bxs-news nav_icon"></i>
            <span class="nav_name">Berita</span>
          </a>
          <a href="pages/recordMessage.php" class="nav_link">
            <i class="bx bx-message-square-detail nav_icon"></i>
            <span class="nav_name">Messages</span>
          </a>
        </div>
      </div>
      <a href="pages/userlogin/logout.php" class="nav_link">
        <i class="bx bx-log-out nav_icon"></i>
        <span class="nav_name">SignOut</span>
      </a>
    </nav>
  </div>
  <!--Container Main start-->
  <!-- <div class="container mt-3"> -->
    <div class="pagetitle">
      <h1>Daftar Berita</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Admin</a></li>
          <li class="breadcrumb-item">Dashboard</li>
          <!-- <li class="breadcrumb-item active">Data</li> -->
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <form action="" method="post">
      <div class="input-group mb-3">
        <input type="text" name="keyword" autocomplete="off" class="form-control " autofocus placeholder="Search Berita....." aria-label="Recipient's username" aria-describedby="button-addon2">
        <button class="btn btn-outline-secondary" type="button" name="cari" id="tombol-cari">Cari</button>
      </div>
    </form>
    <table class="table">
      <thead>
        <tr>
          <th>No</th>
          <th>Judul Berita</th>
          <th>Gambar</th>
          <th>simpel Berita</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php $no = 1; ?>
        <?php foreach ($berita as $info) : ?>
          <tr>
            <td><?= $no; ?></td>
            <td><?= $info["judul"]; ?></td>
            <td><img src="assets/img/<?= $info["gambar"]; ?>" width="50"></td>
            <td><?= $info["simpelberita"]; ?></td>
            <td>
              <div class="col-6 ">
              <a class="" href="pages/HapusBerita.php?id=<?= $info["id"]; ?>" onclick="return confirm('yakin?');"><button name="submit" id="submit" class="btn btn-primary  btn-block" type="submit">Hapus</button></a>
              </div>
              <div class="col-6 mt-2 ">
              <a class="mt-2" href="pages/editBerita.php?id=<?= $info["id"]; ?>"><button name="submit" id="submit" class="btn btn-primary btn-block" type="submit">Edit</button></a>
              </div>
            </td>
          </tr>
          <?php $no++; ?>
        <?php endforeach; ?>
      </tbody>
    </table>
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
  <!-- </div> -->
  <!--Container Main end-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- <script src="../vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/boxicons@latest/js/boxicons.min.js"></script>
  <script src="assets/js/index.js"></script>
</body>

</html>