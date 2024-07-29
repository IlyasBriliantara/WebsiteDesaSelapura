 <!DOCTYPE html>
<html>


<!-- Mirrored from pkk.tegalkab.go.id/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 May 2023 06:20:23 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <title>Website - PKK KABUPATEN TEGAL</title>
  <!-- Favicon -->
  <link rel="icon" href="#" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <!-- <link rel="stylesheet" href="assets/vendor/nucleo/css/nucleo.css" type="text/css"> -->
  <!-- <link rel="stylesheet" href="assets/vendor/%40fortawesome/fontawesome-free/css/all.min.css" type="text/css"> -->
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@5.9.55/css/materialdesignicons.min.css"> -->
  <!-- Page plugins -->
  <!-- Argon CSS -->
  
  

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" >

  <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
  <!-- <link rel="stylesheet" type="text/css" href="assets/css/iziToast.css">
  <link rel="stylesheet" type="text/css" href="assets/css/iziToast.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/tower-file-input.css"> -->

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
  <!-- Main content -->
  <div class="main-content" id="panel">

    <!-- Topnav -->



<div class="navbar-wrap">
    <nav id="navbar_main" class="mobile-offcanvas navbar navbar-expand-lg navbar-dark" style="background-color: rgba(246, 247, 254, 0.6);">
        <div class="offcanvas-header">
            <button class="btn btn-close float-right"> &times</button>
            <h5 class="py-2">PKK KABUPATEN TEGAL</h5>
            <hr style="border-color: #fff;">
        </div>

        <a class="navbar-brand" href="index.html" id="brand" style="color: #303952;">
            <img src="assets/img/brand/logo-kabupaten-tegal.png" width="35" height="35" class="d-inline-block align-top mr-3" alt="">
            <h5>PKK KABUPATEN TEGAL</h5>
        </a>

        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.html" style="color: #303952; margin-right: 10px; font-size: 14px;">Beranda</a>
            </li>
            

            

            

            <li class="nav-item">
                                        <a class="nav-link" href="menu/profil.html" style="color: #303952; margin-right: 10px; font-size: 14px;">Profil</a>
                                    </li><li class="nav-item">
                                        <a class="nav-link" href="menu/berita.html" style="color: #303952; margin-right: 10px; font-size: 14px;">Berita</a>
                                    </li><li class="nav-item">
                                        <a class="nav-link" href="menu/pengumuman.html" style="color: #303952; margin-right: 10px; font-size: 14px;">Pengumuman</a>
                                    </li><li class="nav-item">
                                        <a class="nav-link" href="menu/kontak.html" style="color: #303952; margin-right: 10px; font-size: 14px;">Kontak</a>
                                    </li><li class="nav-item">
                                        <a class="nav-link" href="menu/galeri.html" style="color: #303952; margin-right: 10px; font-size: 14px;">GALERI</a>
                                    </li><li class="nav-item">
                                        <a class="nav-link" href="menu/infografis-covid19.html" style="color: #303952; margin-right: 10px; font-size: 14px;">Infografis Covid19</a>
                                    </li>

        </ul>
    </nav>
</div>



<nav class="navbar navbar-expand-lg navbar-light" id="mobile-navigation" style="background-color: #fff;">
    <a class="navbar-brand" href="index.html" style="color: #303952;"><b>PKK KABUPATEN TEGAL </b></a>
    <button data-trigger="#navbar_main" class="d-lg-none btn" type="button">  <i class="fa fa-bars" aria-hidden="true" style="font-size: 25px"></i> </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    </div>
</nav>

    <!-- Page content -->

  
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="margin-top: -80px; z-index: -1">
      <div class="carousel-inner">
                    
            <div class="carousel-item active">
                <img src="header_image/1663740024_BGV.jpg" class="d-block w-100" alt="..." id="banner">
                                <div class="carousel-caption d-none d-md-block" style="background-color: rgba(0, 0, 0, 0.25)">
                    <h5>TIM PENGGERAK PKK KABUPATEN TEGAL</h5>
                    <p>Meningkatkan pendidikan daan ekonomi keluarga melalui berbagai upaya keterampilan dan pengembangan koperasi.
Meningkatkan Ketahanan Keluarga melalui pemenuhan pangan, sandang dan perumahan sehat dan layak huni.
Menigkatkan derajat kesehatan keluarga, kelestarian lingkungan hidup serta perencanaan sehat.
Meningkatkan pengelolaan Gerakan PKK meliputi kegiatan pengorganisasian dan peningkatan Sumber Daya Manusia.</p>
                </div>
                            </div>
            
                    
            <div class="carousel-item ">
                <img src="header_image/1645083559_IMG_9021.jpg" class="d-block w-100" alt="..." id="banner">
                            </div>
            
                    
            <div class="carousel-item ">
                <img src="header_image/1663738744_PEMBINAAAN.jpg" class="d-block w-100" alt="..." id="banner">
                            </div>
            
                    
            <div class="carousel-item ">
                <img src="header_image/1645413193_IMG_4518.jpg" class="d-block w-100" alt="..." id="banner">
                            </div>
            
              </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
  </div>
  

  <br>
  <br>

  
          



<section class="section-annoucement" style="margin-top: 5%; margin-bottom: 2%;">
    <div class="container">

        <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-8">
                  <span class="badge" id="news-title" style="background-color: #2980b9"><h5 class="text-center">Pengumuman</h5></span>
                </div>
                <div class="col-md-4">
                  <a href="menu/pengumuman.html" class="btn btn-sm" style="float: right;">Semua Pengumuman</a>
                </div>
            </div>
            <hr style="margin-top: 0; border: solid 1px #2980b9">
        </div>
        <div class="col-md-12">
            

            <div id="slick1">

                        <a class="btn" data-toggle="modal" data-target=".modal-lg-14">
                <div class="slide">
                    <div class="card" style="height: 110px; box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2);
                    -webkit-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2);
                    -moz-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2); border-left-width: 8px; border-left-color: #2980b9;">
                        <div class="card-body" style="font-size: 14px">
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-2">
                                            <h2><span class="mdi mdi-bullhorn-outline"></span></h2>
                                        </div>
                                        <div class="col-10">
                                            <p class="text-left">JADWAL PEMBINAAN ADMINISTRASI PELAKSANAAN 10 PROGR...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-center text-muted" style="height: 20%; font-size: 12px; padding-top: 0;">
                            <small style="font-size: 12px">Diupload pada : 3 Agustus 2021</small>
                        </div>
                    </div>
                </div>
            </a>
            
            </div>

        </div>
        </div>

    </div>
    </section>
    


  
  <section class="news">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-8">
                      <span class="badge" id="news-title" style="background-color: #2980b9"><h5 class="text-center">Berita</h5></span>
                    </div>
                    <div class="col-md-4">
                      <a href="menu/berita.html" class="btn btn-sm" style="float: right;">Semua Berita</a>
                    </div>
                </div>
                <hr style="margin-top: 0; border: solid 1px #2980b9">

                <div class="row" style="margin-top: 30px;">
                    <div class="col-md-6">
                                                                                <a href="berita/read/59.html">
                            <div class="card bg-dark text-white" style="border-width: 0; box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2);
                            -webkit-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2);
                            -moz-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2);">
                                <img src="thumbnail_img/1666780025_Ungu%20Modern%20Tips%20Carousel%20Konten%20Kreator%20Instagram%20Post%20(10).png" class="card-img-top img-fluid" alt="..." style="width: 100%; height: 500px; object-fit: cover;">
                                <div class="card-img-overlay" style="background-color: rgba(0, 0, 0, 0.31); padding-top: 70%; padding-bottom: 10%; padding-right: 7%; padding-left: 7%">
                                    <h5>Pelatihan Ecoprint Oleh Pokja III TP. PKK Kab. Tegal Tahun 2022</h5>
                                    <small style="color: #ced6e0; font-size: 12px">Diupload pada : 26 Oktober 2022</small>
                                </div>
                            </div>
                            </a>
                                                                                                                                                                                                                                                                                                                                            </div>
                    <div class="col-md-6">
                                                                                                                                    <a href="berita/read/58.html" style="color: #000; text-decoration: none">
                            <div class="card" style="margin-bottom: 2%; box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2);
                            -webkit-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2);
                            -moz-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2);">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img src="thumbnail_img/1666095718_Ungu%20Modern%20Tips%20Carousel%20Konten%20Kreator%20Instagram%20Post%20(3).png" class="card-img-top img-fluid" alt="..." style="width: 100px; height: 90px; object-fit: cover;">
                                    </div>
                                    <div class="card-body">
                                        <h6>PELATIHAN POKJA II TP PKK KABUPATEN TEGAL TAH...</h6>
                                        <small style="color: #ced6e0; font-size: 12px">Diupload pada : 18 Oktober 2022</small>
                                    </div>
                                </div>
                            </div>
                            </a>
                                                                                                            <a href="berita/read/57.html" style="color: #000; text-decoration: none">
                            <div class="card" style="margin-bottom: 2%; box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2);
                            -webkit-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2);
                            -moz-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2);">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img src="thumbnail_img/1666095712_Ungu%20Modern%20Tips%20Carousel%20Konten%20Kreator%20Instagram%20Post%20(3).png" class="card-img-top img-fluid" alt="..." style="width: 100px; height: 90px; object-fit: cover;">
                                    </div>
                                    <div class="card-body">
                                        <h6>PELATIHAN POKJA II TP PKK KABUPATEN TEGAL TAH...</h6>
                                        <small style="color: #ced6e0; font-size: 12px">Diupload pada : 18 Oktober 2022</small>
                                    </div>
                                </div>
                            </div>
                            </a>
                                                                                                            <a href="berita/read/56.html" style="color: #000; text-decoration: none">
                            <div class="card" style="margin-bottom: 2%; box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2);
                            -webkit-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2);
                            -moz-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2);">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img src="thumbnail_img/1663736481_IMG_1252.jpg" class="card-img-top img-fluid" alt="..." style="width: 100px; height: 90px; object-fit: cover;">
                                    </div>
                                    <div class="card-body">
                                        <h6>TP- PKK Kabupaten Tegal kembali menggiatkan P...</h6>
                                        <small style="color: #ced6e0; font-size: 12px">Diupload pada : 21 September 2022</small>
                                    </div>
                                </div>
                            </div>
                            </a>
                                                                                                            <a href="berita/read/55.html" style="color: #000; text-decoration: none">
                            <div class="card" style="margin-bottom: 2%; box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2);
                            -webkit-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2);
                            -moz-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2);">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img src="thumbnail_img/1662439617_Biru%20Modern%20Geometri%20Webinar%20Hari%20Guru%20Flyer.jpg" class="card-img-top img-fluid" alt="..." style="width: 100px; height: 90px; object-fit: cover;">
                                    </div>
                                    <div class="card-body">
                                        <h6>INSPIRASI SEHAT BERSAMA PSV INDONESIA “MENGAP...</h6>
                                        <small style="color: #ced6e0; font-size: 12px">Diupload pada : 6 September 2022</small>
                                    </div>
                                </div>
                            </div>
                            </a>
                                                                                                            <a href="berita/read/54.html" style="color: #000; text-decoration: none">
                            <div class="card" style="margin-bottom: 2%; box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2);
                            -webkit-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2);
                            -moz-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2);">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img src="thumbnail_img/1662042283_IMG_9495.jpg" class="card-img-top img-fluid" alt="..." style="width: 100px; height: 90px; object-fit: cover;">
                                    </div>
                                    <div class="card-body">
                                        <h6>TP-PKK Kab.Tegal Gelar Pelatihan Sekretaris...</h6>
                                        <small style="color: #ced6e0; font-size: 12px">Diupload pada : 1 September 2022</small>
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
  

  
  <section class="information" style="background-color: #2980b930;">
    <div class="container">
        <h4 class="text-center">Informasi</h4>
        <hr>
        <br>
        <div class="row justify-content-center">

                                            <div class="col-md-3">
                    <a href="menu/info-layanan.html" style="color: #000; text-decoration: none;">
                    <div class="card" style="margin-bottom: 2%; border-radius: 30px; box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2); -webkit-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2); -moz-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2);">
                        <div class="card-body">
                            <center>
                            <img src="menus_icon/1627954271_question.png" class="img-fluid" width="50" alt="...">
                            <br><br>
                            <h6>Info Layanan</h6>
                            </center>
                        </div>
                    </div>
                    </a>
                </div>
                                                            <div class="col-md-3">
                    <a href="menu/publikasi.html" style="color: #000; text-decoration: none;">
                    <div class="card" style="margin-bottom: 2%; border-radius: 30px; box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2); -webkit-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2); -moz-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2);">
                        <div class="card-body">
                            <center>
                            <img src="menus_icon/1627954323_application.png" class="img-fluid" width="50" alt="...">
                            <br><br>
                            <h6>Publikasi</h6>
                            </center>
                        </div>
                    </div>
                    </a>
                </div>
                                                            <div class="col-md-3">
                    <a href="menu/regulasi.html" style="color: #000; text-decoration: none;">
                    <div class="card" style="margin-bottom: 2%; border-radius: 30px; box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2); -webkit-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2); -moz-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2);">
                        <div class="card-body">
                            <center>
                            <img src="menus_icon/1627954361_stamp1.png" class="img-fluid" width="50" alt="...">
                            <br><br>
                            <h6>Regulasi</h6>
                            </center>
                        </div>
                    </div>
                    </a>
                </div>
                            
        </div>
    </div>
  </section>
  

  
  <section class="sosmed">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <h4 class="text-center">Link Aduan Dan Sosial Media</h4>
                <br>
                <div class="row">
                    <div class="col-6">
                        <div class="card text-center" style="border-width: 0; background-color:rgba(0, 0, 0, 0.0)">
                            <a href="menu/kontak.html" style="color: black; text-decoration: none;">
                            <div class="card-body">
                                <img src="assets/img/cs2.png" class="img-fluid" width="80" alt="...">
                                <p style="font-size: 9px;">PORTAL ADUAN</p>
                            </div>
                            </a>
                          </div>
                    </div>
                                                            <div class="col-6">
                        <div class="card text-center" style="border-width: 0; background-color:rgba(0, 0, 0, 0.0)">
                            <a href="https://www.facebook.com/bergerakbersamaPKK" style="color: black; text-decoration: none;">
                            <div class="card-body">
                                <img src="assets/img/unnamed3-01.png" class="img-fluid" width="80" alt="...">
                                <p style="font-size: 9px;">FACEBOOK</p>
                            </div>
                            </a>
                          </div>
                    </div>
                                                                                <div class="col-6">
                        <div class="card text-center" style="border-width: 0; background-color:rgba(0, 0, 0, 0.0)">
                            <a href="https://www.instagram.com/pkkkabtegal_/?hl=id" style="color: black; text-decoration: none;">
                            <div class="card-body">
                                <img src="assets/img/unnamed2-01.png" class="img-fluid" width="80" alt="...">
                                <p style="font-size: 9px;">TWITTER</p>
                            </div>
                            </a>
                          </div>
                    </div>
                                                                                <div class="col-6">
                        <div class="card text-center" style="border-width: 0; background-color:rgba(0, 0, 0, 0.0)">
                            <a href="https://www.instagram.com/pkkkabtegal_/?hl=id" style="color: black; text-decoration: none;">
                            <div class="card-body">
                                <img src="assets/img/unnamed4-01.png" class="img-fluid" width="80" alt="...">
                                <p style="font-size: 9px;">INSTAGRAM</p>
                            </div>
                            </a>
                          </div>
                    </div>
                                                                                <div class="col-6">
                        <div class="card text-center" style="border-width: 0; background-color:rgba(0, 0, 0, 0.0)">
                            <a href="https://www.youtube.com/channel/UCK3L49o8Mo-DMKlE1-bzSuw" style="color: black; text-decoration: none;">
                            <div class="card-body">
                                <img src="assets/img/unnamed6-01.png" class="img-fluid" width="80" alt="...">
                                <p style="font-size: 9px;">YOUTUBE</p>
                            </div>
                            </a>
                          </div>
                    </div>
                                                        </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header" style="background-color: #2980b9; color: #fff;">
                        <h5 class="text-center">Twiter Live</h5>
                    </div>
                    <div class="card-body">
                        <a class="twitter-timeline" href="https://twitter.com/HumasTegalkab?ref_src=twsrc%5Etfw" height="400">Tweets by HumasTegalkab</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
  

  
    <section class="link" style="background-color: #2980b930;">
    <div class="container">

        <h4 class="text-center">Link Terkait Lainya</h4>
        <hr>
        <br>

        <div class="row">
            <div class="col-md-12">
                

            <div id="slick2">
                                <div class="slide">
                    <a href="https://jatengprov.go.id/" style="color: #000; text-decoration: none;">
                        <div class="card" style="height: 150px; box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2);
                        -webkit-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2);
                        -moz-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2); border-left-width: 10px; border-left-color: #2980b9;">
                            <div class="card-body" style="font-size: 14px">
                                <div class="row">
                                    <div class="col-12">
                                        <center>
                                        <img src="link_icon/1627954938_Jateng.png" class="img-fluid" width="50" alt="...">
                                        <br>
                                        <h6>Pemerintah Provinsi Jawa Tengah</h6>
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                                <div class="slide">
                    <a href="https://utama.tegalkab.go.id/" style="color: #000; text-decoration: none;">
                        <div class="card" style="height: 150px; box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2);
                        -webkit-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2);
                        -moz-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2); border-left-width: 10px; border-left-color: #2980b9;">
                            <div class="card-body" style="font-size: 14px">
                                <div class="row">
                                    <div class="col-12">
                                        <center>
                                        <img src="link_icon/1627954975_logo-kabupaten-tegal.png" class="img-fluid" width="50" alt="...">
                                        <br>
                                        <h6>Pemerintah Kabupaten Tegal</h6>
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                                <div class="slide">
                    <a href="https://tppkk-pusat.org/home/" style="color: #000; text-decoration: none;">
                        <div class="card" style="height: 150px; box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2);
                        -webkit-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2);
                        -moz-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2); border-left-width: 10px; border-left-color: #2980b9;">
                            <div class="card-body" style="font-size: 14px">
                                <div class="row">
                                    <div class="col-12">
                                        <center>
                                        <img src="link_icon/1646367653_Logo-PKK.png" class="img-fluid" width="50" alt="...">
                                        <br>
                                        <h6>PKK PUSAT</h6>
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                                <div class="slide">
                    <a href="https://www.instagram.com/pkkkabtegal_/" style="color: #000; text-decoration: none;">
                        <div class="card" style="height: 150px; box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2);
                        -webkit-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2);
                        -moz-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2); border-left-width: 10px; border-left-color: #2980b9;">
                            <div class="card-body" style="font-size: 14px">
                                <div class="row">
                                    <div class="col-12">
                                        <center>
                                        <img src="link_icon/1649919892_brw0vdwkbw.jpg" class="img-fluid" width="50" alt="...">
                                        <br>
                                        <h6>INSTAGRAM</h6>
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                                <div class="slide">
                    <a href="index.html" style="color: #000; text-decoration: none;">
                        <div class="card" style="height: 150px; box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2);
                        -webkit-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2);
                        -moz-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2); border-left-width: 10px; border-left-color: #2980b9;">
                            <div class="card-body" style="font-size: 14px">
                                <div class="row">
                                    <div class="col-12">
                                        <center>
                                        <img src="link_icon/1649919999_1200px-Shield_of_Tegal_Regency.svg.png" class="img-fluid" width="50" alt="...">
                                        <br>
                                        <h6>WEBSITE TP PKK KAB. TEGAL</h6>
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
  


  
<div class="modal fade modal-lg-14" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="container" style="padding: 5%">
                <div class="card">
                    <h5 class="card-header">JADWAL PEMBINAAN ADMINISTRASI PELAKSANAAN 10 PROGRAM POKOK PKK DESA BINAAN DAN KECAMATAN SE KABUPATEN TEGALTAHUN 2022</h5>
                    <div class="card-body">
                        <div class="modal-body">
                            <table border="0" cellpadding="0" cellspacing="0" width="1082" style="width: 813pt;"><ul><li>
 <colgroup><col width="37" style="mso-width-source:userset;mso-width-alt:1308;width:28pt">
 <col width="66" style="mso-width-source:userset;mso-width-alt:2360;width:50pt">
 <col width="89" style="mso-width-source:userset;mso-width-alt:3157;width:67pt">
 <col width="166" style="mso-width-source:userset;mso-width-alt:5916;width:125pt">
 <col width="128" style="mso-width-source:userset;mso-width-alt:4551;width:96pt">
 <col width="120" style="mso-width-source:userset;mso-width-alt:4266;width:90pt">
 <col width="125" style="mso-width-source:userset;mso-width-alt:4437;width:94pt">
 <col width="127" style="mso-width-source:userset;mso-width-alt:4522;width:95pt">
 <col width="110" style="mso-width-source:userset;mso-width-alt:3925;width:83pt">
 <col width="114" style="mso-width-source:userset;mso-width-alt:4039;width:85pt">
 </colgroup><tbody><tr height="31" style="height:23.4pt">
  <td colspan="10" height="31" class="xl77" width="1082" style="height:23.4pt;
  width:813pt">JADWAL PEMBINAAN 10 PROGRAM POKOK PKK PADA DESA BINAAN PKK TAHUN
  2022</td>
 </tr>
 <tr height="20" style="height:15.0pt">
  <td height="20" class="xl65" style="height:15.0pt"></td>
  <td class="xl65"></td>
  <td class="xl65"></td>
  <td class="xl65"></td>
  <td class="xl65"></td>
  <td class="xl65"></td>
  <td class="xl65"></td>
  <td class="xl65"></td>
  <td class="xl65"></td>
  <td class="xl65"></td>
 </tr>
 <tr height="32" style="mso-height-source:userset;height:24.0pt">
  <td rowspan="2" height="69" class="xl79" style="text-align: center; border-bottom: 1pt solid black; height: 51.75pt;"><b>NO</b></td>
  <td rowspan="2" class="xl79" style="text-align: center; border-bottom: 1pt solid black;"><b>HARI</b></td>
  <td rowspan="2" class="xl79" style="text-align: center; border-bottom: 1pt solid black;"><b>TANGGAL</b></td>
  <td rowspan="2" class="xl79" style="text-align: center; border-bottom: 1pt solid black;"><b>WAKTU</b></td>
  <td rowspan="2" class="xl79" style="text-align: center; border-bottom: 1pt solid black;"><b>KECAMATAN</b></td>
  <td colspan="5" class="xl81" style="border-right:1.0pt solid black;border-left:
  none"><p style="text-align: center; "><b><br></b></p><p style="text-align: center; "><b><b>DESA BINAAN</b></b></p></td>
 </tr>
 <tr height="37" style="mso-height-source:userset;height:27.75pt">
  <td height="37" class="xl67" style="height:27.75pt;border-top:none;border-left:
  none">I</td>
  <td class="xl68" style="border-top:none">II</td>
  <td class="xl69" style="border-top:none;border-left:none">III</td>
  <td class="xl69" style="border-top:none;border-left:none">IV</td>
  <td class="xl70" style="border-top:none">V</td>
 </tr>
 <tr height="33" style="mso-height-source:userset;height:25.05pt">
  <td height="33" class="xl71" style="height:25.05pt">1</td>
  <td class="xl72">Rabu</td>
  <td class="xl72">07-09-2022</td>
  <td class="xl72">08.30 WIB  s/d  selesai</td>
  <td class="xl73">Dukuturi</td>
  <td class="xl73">Pengarasan</td>
  <td class="xl73">Sidapurna</td>
  <td class="xl74" style="border-top:none;border-left:none">Kademangaran</td>
  <td class="xl74" style="border-top:none;border-left:none">Pagongan</td>
  <td class="xl74" style="border-top:none;border-left:none">Pepedan</td>
 </tr>
 <tr height="33" style="mso-height-source:userset;height:25.05pt">
  <td height="33" class="xl71" style="height:25.05pt">2</td>
  <td class="xl72">Kamis</td>
  <td class="xl72">08-09-2022</td>
  <td class="xl72">08.30 WIB  s/d  selesai</td>
  <td class="xl73">Margasari</td>
  <td class="xl73">Pakulaut</td>
  <td class="xl76">Prupuk Utara</td>
  <td class="xl74" style="border-top:none;border-left:none">Dukuhtengah</td>
  <td class="xl74" style="border-top:none;border-left:none">Wanasari</td>
  <td class="xl74" style="border-top:none;border-left:none">Karangdawa</td>
 </tr>
 <tr height="33" style="mso-height-source:userset;height:25.05pt">
  <td height="33" class="xl71" style="height:25.05pt">3</td>
  <td class="xl72">Senin</td>
  <td class="xl72">12-09-2022</td>
  <td class="xl72">08.30 WIB  s/d  selesai</td>
  <td class="xl73">Kedungbanteng</td>
  <td class="xl73">Karanganyar</td>
  <td class="xl73">Kedungbanteng</td>
  <td class="xl74" style="border-top:none;border-left:none">Sumingkir</td>
  <td class="xl74" style="border-top:none;border-left:none">Margamulya</td>
  <td class="xl74" style="border-top:none;border-left:none">Karangmalang</td>
 </tr>
 <tr height="33" style="mso-height-source:userset;height:25.05pt">
  <td height="33" class="xl71" style="height:25.05pt">4</td>
  <td class="xl72">Selasa</td>
  <td class="xl72">13-09-2022</td>
  <td class="xl72">08.30 WIB  s/d  selesai</td>
  <td class="xl73">Kramat</td>
  <td class="xl76">Kramat</td>
  <td class="xl73">Padaharja</td>
  <td class="xl74" style="border-top:none;border-left:none">Bangun Galih</td>
  <td class="xl74" style="border-top:none;border-left:none">Tanjungharja</td>
  <td class="xl74" style="border-top:none;border-left:none">Kepunduhan</td>
 </tr>
 <tr height="33" style="mso-height-source:userset;height:25.05pt">
  <td height="33" class="xl71" style="height:25.05pt">5</td>
  <td class="xl72">Rabu</td>
  <td class="xl72">14-09-2022</td>
  <td class="xl72">08.30 WIB  s/d  selesai</td>
  <td class="xl73">Lebaksiu</td>
  <td class="xl73">Kambangan</td>
  <td class="xl73">Lebaksiu Kidul</td>
  <td class="xl74" style="border-top:none;border-left:none">Dukuhdamu</td>
  <td class="xl74" style="border-top:none;border-left:none">Timbangreja</td>
  <td class="xl74" style="border-top:none;border-left:none">Yamansari</td>
 </tr>
 <tr height="33" style="mso-height-source:userset;height:25.05pt">
  <td height="33" class="xl71" style="height:25.05pt">6</td>
  <td class="xl72">Kamis</td>
  <td class="xl72">15-09-2022</td>
  <td class="xl72">08.30 WIB  s/d  selesai</td>
  <td class="xl73">Tarub</td>
  <td class="xl73">Bulakwaru</td>
  <td class="xl73">Karangmangu</td>
  <td class="xl74" style="border-top:none;border-left:none">Kemanggungan</td>
  <td class="xl74" style="border-top:none;border-left:none">Mindaka</td>
  <td class="xl74" style="border-top:none;border-left:none">Kabukan</td>
 </tr>
 <tr height="33" style="mso-height-source:userset;height:25.05pt">
  <td height="33" class="xl71" style="height:25.05pt">7</td>
  <td class="xl72">Senin</td>
  <td class="xl72">19-09-2022</td>
  <td class="xl72">08.30 WIB  s/d  selesai</td>
  <td class="xl73">Balapulang</td>
  <td class="xl73">Danawarih</td>
  <td class="xl73">Sangkanjaya</td>
  <td class="xl74" style="border-top:none;border-left:none">Sesepan</td>
  <td class="xl74" style="border-top:none;border-left:none">Pagerwangi</td>
  <td class="xl74" style="border-top:none;border-left:none">Bukateja</td>
 </tr>
 <tr height="33" style="mso-height-source:userset;height:25.05pt">
  <td height="33" class="xl71" style="height:25.05pt">8</td>
  <td class="xl72">Selasa</td>
  <td class="xl72">20-09-2022</td>
  <td class="xl72">08.30 WIB  s/d  selesai</td>
  <td class="xl73">Pangkah</td>
  <td class="xl73">Dermasandi</td>
  <td class="xl73">Jenggawur</td>
  <td class="xl74" style="border-top:none;border-left:none">Grobog Kulon</td>
  <td class="xl74" style="border-top:none;border-left:none">Purbayasa</td>
  <td class="xl74" style="border-top:none;border-left:none">Rancawiru</td>
 </tr>
 <tr height="33" style="mso-height-source:userset;height:25.05pt">
  <td height="33" class="xl71" style="height:25.05pt">9</td>
  <td class="xl72">Rabu</td>
  <td class="xl72">21-09-2022</td>
  <td class="xl72">08.30 WIB  s/d  selesai</td>
  <td class="xl73">Suradadi</td>
  <td class="xl73">Suradadi</td>
  <td class="xl73">Gembongdadi</td>
  <td class="xl74" style="border-top:none;border-left:none">Purwahamba</td>
  <td class="xl74" style="border-top:none;border-left:none">Karangmulya</td>
  <td class="xl74" style="border-top:none;border-left:none">Karangwuluh</td>
 </tr>
 <tr height="33" style="mso-height-source:userset;height:25.05pt">
  <td height="33" class="xl71" style="height:25.05pt">10</td>
  <td class="xl67" style="border-top:none;border-left:none">Kamis</td>
  <td class="xl72">22-09-2022</td>
  <td class="xl72">08.30 WIB  s/d  selesai</td>
  <td class="xl75" style="border-top:none;border-left:none">Bojong</td>
  <td class="xl74" style="border-top:none;border-left:none">Buniwah</td>
  <td class="xl75" style="border-top:none;border-left:none">Danasari</td>
  <td class="xl74" style="border-top:none;border-left:none">Kejenengan</td>
  <td class="xl74" style="border-top:none;border-left:none">Dukuhtengah</td>
  <td class="xl74" style="border-top:none;border-left:none">Karangmulya</td>
 </tr>
 <tr height="33" style="mso-height-source:userset;height:25.05pt">
  <td height="33" class="xl71" style="height:25.05pt">11</td>
  <td class="xl72">Senin</td>
  <td class="xl72">26-09-2022</td>
  <td class="xl72">08.30 WIB  s/d  selesai</td>
  <td class="xl73">Dukuhwaru</td>
  <td class="xl73">Sindang</td>
  <td class="xl73">Selapura</td>
  <td class="xl74" style="border-top:none;border-left:none">Blubuk</td>
  <td class="xl74" style="border-top:none;border-left:none">Bulakpacing</td>
  <td class="xl74" style="border-top:none;border-left:none">Pedagangan</td>
 </tr>
 <tr height="33" style="mso-height-source:userset;height:25.05pt">
  <td height="33" class="xl71" style="height:25.05pt">12</td>
  <td class="xl72">Selasa</td>
  <td class="xl72">27-09-2022</td>
  <td class="xl72">08.30 WIB  s/d  selesai</td>
  <td class="xl73">Talang</td>
  <td class="xl73">Pasangan</td>
  <td class="xl73">Langgeng</td>
  <td class="xl74" style="border-top:none;border-left:none">Pegirikan</td>
  <td class="xl74" style="border-top:none;border-left:none">Pesayangan</td>
  <td class="xl74" style="border-top:none;border-left:none">Kebasen</td>
 </tr>
 <tr height="33" style="mso-height-source:userset;height:25.05pt">
  <td height="33" class="xl71" style="height:25.05pt">13</td>
  <td class="xl72">Rabu</td>
  <td class="xl72">28-09-2022</td>
  <td class="xl72">08.30 WIB  s/d  selesai</td>
  <td class="xl73">Pagerbarang</td>
  <td class="xl76">Sidomulyo </td>
  <td class="xl73">Pagerbarang</td>
  <td class="xl74" style="border-top:none;border-left:none">Pesarean</td>
  <td class="xl74" style="border-top:none;border-left:none">Mulyoharjo</td>
  <td class="xl74" style="border-top:none;border-left:none">Kedungsugih</td>
 </tr>
 <tr height="33" style="mso-height-source:userset;height:24.75pt">
  <td height="33" class="xl71" style="height:24.75pt">14</td>
  <td class="xl72">Kamis</td>
  <td class="xl72">29-09-2022</td>
  <td class="xl72">08.30 WIB  s/d  selesai</td>
  <td class="xl75" style="border-top:none;border-left:none">Jatinegara</td>
  <td class="xl75" style="border-top:none;border-left:none">Wotgalih</td>
  <td class="xl75" style="border-top:none;border-left:none">Sumbarang</td>
  <td class="xl74" style="border-top:none;border-left:none">Padasari</td>
  <td class="xl74" style="border-top:none;border-left:none">Kedungwungu</td>
  <td class="xl74" style="border-top:none;border-left:none">Sitail</td>
 </tr>
 <tr height="33" style="mso-height-source:userset;height:25.05pt">
  <td height="33" class="xl71" style="height:25.05pt">15</td>
  <td class="xl72">Senin</td>
  <td class="xl72">03-10-2022</td>
  <td class="xl72">08.30 WIB  s/d  selesai</td>
  <td class="xl73">Warureja</td>
  <td class="xl73">Demangharjo</td>
  <td class="xl73">Kedungkelor</td>
  <td class="xl74" style="border-top:none;border-left:none">Kreman</td>
  <td class="xl74" style="border-top:none;border-left:none">Banjaragung</td>
  <td class="xl74" style="border-top:none;border-left:none">sigentong</td>
 </tr>
 <tr height="33" style="mso-height-source:userset;height:25.05pt">
  <td height="33" class="xl71" style="height:25.05pt">16</td>
  <td class="xl72">Selasa</td>
  <td class="xl72">04-10-2022</td>
  <td class="xl72">08.30 WIB  s/d  selesai</td>
  <td class="xl73">Adiwerna</td>
  <td class="xl73">Kaliwadas</td>
  <td class="xl73">Adiwerna</td>
  <td class="xl74" style="border-top:none;border-left:none">Tembok Luwung</td>
  <td class="xl74" style="border-top:none;border-left:none">Pecangakan</td>
  <td class="xl74" style="border-top:none;border-left:none">Gumalar</td>
 </tr>
 <tr height="33" style="mso-height-source:userset;height:25.05pt">
  <td height="33" class="xl71" style="height:25.05pt">17</td>
  <td class="xl72">Rabu</td>
  <td class="xl72">05-10-2022</td>
  <td class="xl72">08.30 WIB  s/d  selesai</td>
  <td class="xl73">Slawi</td>
  <td class="xl73">Kalisapu</td>
  <td class="xl73">Trayeman</td>
  <td class="xl74" style="border-top:none;border-left:none">Slawi Kulon</td>
  <td class="xl74" style="border-top:none;border-left:none">Dukuhwringin</td>
  <td class="xl74" style="border-top:none;border-left:none">Dukuhsalam</td>
 </tr>
 <tr height="33" style="mso-height-source:userset;height:25.05pt">
  <td height="33" class="xl71" style="height:25.05pt">18</td>
  <td class="xl72">Kamis</td>
  <td class="xl72">06-10-2022</td>
  <td class="xl72">08.30 WIB  s/d  selesai</td>
  <td class="xl73">Bumijawa</td>
  <td class="xl76">Guci </td>
  <td class="xl76">Sigedong</td>
  <td class="xl74" style="border-top:none;border-left:none">Bumijawa</td>
  <td class="xl74" style="border-top:none;border-left:none">Sokasari</td>
  <td class="xl74" style="border-top:none;border-left:none">Cintamanik</td>
 </tr></tbody></li></ul></table>
                                                        <hr>
                            <p>Tautan :</p>
                            <a href="content_attachment/1663738556_JADWAL%20PEMBINAAN%20PKK%202022.xlsx" target="_blank" rel="noopener noreferrer">Klik disini</a>
                                                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




    <!-- Footer -->
<footer class="footer" style="background-color: #fff">
    <div class="container">
        <div class="row justify-content-between" style="padding-top: 2%;">

          <div class="col-md-5">
            <p style="font-weight: bold; margin-bottom: 0">PKK KABUPATEN TEGAL</p>
            <small><p><span style="color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 14px;">Jl. DR. Soetomo No.3, Prenam, Dukuhwringin, Kec. Slawi, Kabupaten Tegal, Jawa Tengah 52419</span><br></p><table class="table table-bordered"><tbody><tr><td><b>Email&nbsp;</b></td><td><b>pkktegal@gmail.com</b></td></tr><tr><td><b>No.Tlp</b></td><td><b>(0283) 456 1128</b></td></tr></tbody></table><p><br></p></small>
          </div>

          <div class="col-md-5" style="padding-top: 1%;">
            <div style="padding: 70px 0;">
                <p class="text-right" style="font-size: 12px; color: #8A8A8A;">Copyright &copy;2023 - PKK KABUPATEN TEGAL <br> Powered by Dinas Kominfo Kab. Tegal </p>
            </div>
          </div>
        </div>
    </div>
</footer>

  </div>
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

</body>


<!-- Mirrored from pkk.tegalkab.go.id/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 May 2023 06:24:07 GMT -->
</html>
<div style="display:none;">
<a href="https://dkpn.sulselprov.go.id/-/slot-gacor/">https://dkpn.sulselprov.go.id/-/slot-gacor/</a>
<a href="https://pemira.upp.ac.id/public/-/slot-pulsa/">https://pemira.upp.ac.id/public/-/slot-pulsa/</a>
<a href="https://jdih.pa-sungguminasa.go.id/-/slot-pulsa/">https://jdih.pa-sungguminasa.go.id/-/slot-pulsa/</a>
<a href="https://elearning.stikeshafshawaty.ac.id/akper/-/bandar-togel/">https://elearning.stikeshafshawaty.ac.id/akper/-/bandar-togel/</a>
<a href="https://siska.inkadha.ac.id/ajax/-/slot-deposit-pulsa/">https://siska.inkadha.ac.id/ajax/-/slot-deposit-pulsa/</a>
<a href="https://elearning.stikeshafshawaty.ac.id/assets/-/slot-pulsa/">https://elearning.stikeshafshawaty.ac.id/assets/-/slot-pulsa/</a>
<a href="https://cbt.ummetro.ac.id/assets/slot-pulsa/">https://cbt.ummetro.ac.id/assets/slot-pulsa/</a>
<a href="https://kel-parit.belitung.go.id/-/slot-pulsa/">https://kel-parit.belitung.go.id/-/slot-pulsa/</a>
<a href="https://www.loglod.com/togel-online/">https://www.loglod.com/togel-online/</a>
</div>