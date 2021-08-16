<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Gawean App</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="../assets/css/admin/stisla/style.css">
  <link rel="stylesheet" href="../assets/css/admin/stisla/components.css">
  <link rel="stylesheet" href="../assets/css/admin/stisla/custom.css">
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
          <div class="search-element">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
            <!-- <button class="btn" type="submit"><i class="fas fa-search"></i></button> -->

            <!-- <div class="search-backdrop"></div> -->

          </div>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <!-- <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle mr-1"> -->
            <div class="d-sm-none d-lg-inline-block">Hi, Ujang Maman</div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <a href="features-profile.html" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
              <a href="#" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>

      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">Gawean App</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header">Contents</li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Materi</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="home.php">Semua Materi</a></li>
                  <li><a class="nav-link" href="create.php">Tambah Baru</a></li>
                  <li><a class="nav-link" href="kategori.php">Kategori</a></li>

                </ul>
              </li>
              <li class="menu-header">Setting</li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Configurasi</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="layout-default.html">Users</a></li>
                  <li><a class="nav-link" href="layout-transparent.html">Integrasi</a></li>
                </ul>
              </li>
        </aside>
      </div>


      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
  
          <h1 class="tulis">
            Selamat datang, <a href="features-profil.html">
          </h1>

        <div class="pembungkus">
        <ul class="gallery">

            <li class="satu">

                <a href="#gambar-1">
                <img src="img/thumbs/gambar-1.jpg" alt="Pekerja">
                    <span>Pekerja</span>
                    <span> <a href="https://www.sodexo.co.id/5-cara-meningkatkan-produktivitas-kerja/" target="_blank">Tips meningkatkan produktivitas saat bekerja</a>
                </a>

                <div class="overlay" id="gambar-1">
                    <a href="#" class="close">X CLOSE</a>
                    <a href="#gambar-4" class="prev">Prev</a>
                    <img src="img/full/gambar-1.jpg" alt="Pekerja">
                    <a href="#gambar-2" class="next">Next</a>
                </div>
            </li>


            <li class="dua">

                <a href="#gambar-2">
                <img src="img/thumbs/gambar-2.jpg" alt="Prakerja">
                    <span>Prakerja</span>
                    <span><a href="https://yoursay.suara.com/lifestyle/2021/05/25/114749/5-tips-cepat-dapat-kerja-bagi-kamu-yang-sedang-mencari-pekerjaan" target="_blank">Tips mendapatkan pekerjaan</a></span>
                </a>

                <div class="overlay" id="gambar-2">
                    <a href="#" class="close">X CLOSE</a>
                    <a href="#gambar-1" class="prev">Prev</a>
                    <img src="img/full/gambar-2.jpg" alt="Prakerja">
                    <a href="#gambar-3" class="next">Next</a>
                </div>
            </li>


            <li class="tiga">

                <a href="#gambar-3">
                <img src="img/thumbs/gambar-3.jpg" alt="Wirausaha">
                    <span>Wirausaha</span>
                    <span><a href="https://www.atursaja.com/317/11-tips-sukses-berwirausaha/" target="_blank">Tips sukses menjadi wirausaha</a></span>
                </a>

                <div class="overlay" id="gambar-3">
                    <a href="#" class="close">X CLOSE</a>
                    <a href="#gambar-2" class="prev">Prev</a>
                    <img src="img/full/gambar-3.jpg" alt="Wirausaha">
                    <a href="#gambar-4" class="next">Next</a>
                </div>
            </li>


            <li class="empat">

                <a href="#gambar-4">
                <img src="img/thumbs/gambar-4.jpg" alt="UMKM">
                    <span>UMKM</span>
                    <span><a href="https://www.dana.id/blog/5-tips-umkm-bertahan-di-masa-pandemi" target="_blank">Tips UMKM di masa pandemi</a></span>
                </a>

                <div class="overlay" id="gambar-4">
                    <a href="#" class="close">X CLOSE</a>
                    <a href="#gambar-3" class="prev">Prev</a>
                    <img src="img/full/gambar-4.jpg" alt="UMKM">
                    <a href="#gambar-1" class="next">Next</a>
                </div>
            </li>
        </div>

        </section>
      </div>
    
    
    
    
    </div>



  </div>


</div>