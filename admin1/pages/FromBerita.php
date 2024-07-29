<?php
session_start();

if( !isset($_SESSION["login"]) ) {
	header("Location: ../index.php");
	exit;
}

require '../controller/beritaController.php';

// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
	
	// cek apakah data berhasil di tambahkan atau tidak
	if( tambah($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil ditambahkan!');
				document.location.href = 'FromBerita.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal ditambahkan!');
				document.location.href = 'FromBerita.php';
			</script>
		";
	}


}
?>
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
            <a href="FromBerita.php" class="nav_link active">
              <i class="bx bxs-news nav_icon"></i>
              <span class="nav_name">Berita</span>
            </a>
            <a href="recordMessage.php" class="nav_link">
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
    <!--Container Main start-->
<div class="container">
  <div class="pagetitle">
      <h1>Tambah Berita</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Admin</a></li>
          <li class="breadcrumb-item">Tambah Berita</li>
          <!-- <li class="breadcrumb-item active">Data</li> -->
        </ol>
      </nav>
    </div><!-- End Page Title -->
  <form action="" method="post" enctype="multipart/form-data">
    <div class="mb-3">
      <label for="judul" class="form-label">Judul Berita</label>
      <input type="text"class="form-control" name="judul" id="judul" required>
    </div>
    <div class="mb-3">
      <label for="gambar" class="form-label">Masukan Foto terkait dengan Judul </label>
      <input class="form-control" type="file" id="gambar" name="gambar" required>
    </div>
    <div class="mb-3">
      <label for="simpelberita" class="form-label">Simpel Berita</label>
      <input type="text"class="form-control" name="simpelberita" id="judul" required>
    </div>
    <div class="mb-3">
      <label for="isiberita" >Isi Berita</label>
      <textarea class="form-control" type="text" name="isiberita" id="isiberita" required></textarea>
    </div class="mb-3">
    <button name="submit" id="submit" class="btn btn-primary" type="submit" >kirim</button>
  </form>
</div>


    <!--Container Main end-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- <script src="../vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/boxicons@latest/js/boxicons.min.js"></script>
    <script src="../assets/js/index.js"></script>
  </body>
</html>
