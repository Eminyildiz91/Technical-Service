<?php
session_start(); // Oturum başlatma

// Kullanıcı oturumu kontrol et
if (!isset($_SESSION['email'])) {
    header("Location: ./"); // Giriş yapılmadıysa web'ye yönlendir
    exit();
}

// Oturum açmış kullanıcıya gösterilecek mesaj
$email = htmlspecialchars($_SESSION['email']);
?>



<html lang="tr">
<!-- Head -->

<head>
    <title>Technical Service</title>
    <!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Inter:400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.0/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://unpkg.com/@webpixels/css@1.1.93/dist/index.css">
    <link rel="stylesheet" href="https://webpixels.io/css/demo.css">

    
<head>

<body>



<div class="d-flex flex-column flex-lg-row h-lg-full bg-surface-secondary">
  <!-- Vertical Navbar -->
  <nav class="navbar show navbar-vertical h-lg-screen navbar-expand-lg px-0 py-3 py-lg-0 navbar-light bg-light border-bottom border-bottom-lg-0 border-end-lg" id="navbarVertical">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler ms-n2" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand py-lg-5 mb-lg-5 px-lg-6 me-0" href="#">
        <img src="https://preview.webpixels.io/web/img/logos/clever-primary.svg" alt="...">
      </a>
      <!-- User menu (mobile) -->
      <div class="navbar-user d-lg-none">
        <!-- Dropdown -->
        <div class="dropdown">
          <!-- Toggle -->
          <a href="#" id="sidebarAvatar" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="avatar-parent-child">
              <img alt="Image Placeholder" src="https://images.unsplash.com/photo-1548142813-c348350df52b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80" class="avatar avatar- rounded-circle">
              <span class="avatar-child avatar-badge bg-success"></span>
            </div>
          </a>
          <!-- Menu -->
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="sidebarAvatar">
            <a href="#" class="dropdown-item">Profil</a>
            <a href="#" class="dropdown-item">Ayarlar</a>
            <a href="#" class="dropdown-item">Faturalandırma</a>
            <hr class="dropdown-divider">
            <a href="logout.php" class="dropdown-item">Çıkış Yap</a>
          </div>
        </div>
      </div>
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidebarCollapse">
        <!-- Form -->
        <form class="mt-4 mb-3 d-none">
          <div x-data="{focused: false}" :class="{ 'focused': focused }">
            <div class="input-group input-group-sm">
              <span class="input-group-text border-end-0 rounded-left-pill" id="basic-addon1">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z" />
                  <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
                </svg>
              </span>
              <input type="text" class="form-control border-left-0 ps-0 rounded-end-pill" placeholder="Search" aria-label="Username" aria-describedby="basic-addon1" @focus="focused = !focused" @click.away="focused = false">
            </div>
          </div>
        </form>
        <!-- Navigation -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="dashboard.php">
              <i class="bi bi-house"></i> Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
            <i class="bi bi-files"></i> Başvuru
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="bi bi-chat"></i> Mesajlar
              <span class="badge bg-opacity-30 bg-primary text-primary rounded-pill d-inline-flex align-items-center ms-auto">0</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="bi bi-bookmarks"></i> Koleksiyonlar
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="bi bi-people"></i> Kullanıcılar
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">
              <i class="bi bi-envelope"></i> Bize Ulaşın
            </a>
          </li>
        </ul>
        <!-- Divider -->
        <hr class="navbar-divider my-5 opacity-20">
        <!-- Navigation -->
        <ul class="navbar-nav mb-md-4">
          <li>
            <span class="nav-link text-xs font-semibold text-uppercase text-muted ls-wide" href="#">
              Teams
            </span>
          </li>
          <li class="">
            <a class="nav-link text-sm font-semibold" href="#">
              <span class="w-2 h-2 rounded-circle me-3 bg-primary"></span>Pazarlama
            </a>
          </li>
          <li class="">
            <a class="nav-link text-sm font-semibold" href="#">
              <span class="w-2 h-2 rounded-circle me-3 bg-warning"></span>Geliştirme
            </a>
          </li>
          <li class="">
            <a class="nav-link text-sm font-semibold" href="#">
              <span class="w-2 h-2 rounded-circle me-3 bg-success"></span>Tasarım
            </a>
          </li>
          <li class="">
            <a class="nav-link text-sm font-semibold" href="#">
              <span class="w-2 h-2 rounded-circle me-3 bg-tertiary"></span>Sosyal Medya
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="h-screen flex-grow-1 overflow-y-lg-auto">
    <!-- Header -->
    <header class="bg-surface-primary border-bottom pt-6">
      <div class="container-fluid">
        <div class="mb-npx">
          <div class="row align-items-center">
            <div class="col-sm-6 col-12 mb-4 mb-sm-0">
              <!-- Title -->
              <h1 class="h2 mb-0 ls-tight">Version</h1>
            </div>
            <!-- Actions -->
            <div class="col-sm-6 col-12 text-sm-end">
              <div class="mx-n1">
                <a href="#" class="btn d-inline-flex btn-sm btn-neutral mx-1">
                  <span class=" pe-2">
                    <i class="bi bi-pencil"></i>
                  </span>
                  <span>Düzenle</span>
                </a>
                <a href="#" class="btn d-inline-flex btn-sm btn-primary mx-1">
                  <span class=" pe-2">
                    <i class="bi bi-plus"></i>
                  </span>
                  <span>Oluştur</span>
                </a>
              </div>
            </div>
          </div>
          <!-- Nav -->
          <ul class="nav nav-tabs mt-4 overflow-x border-0">
            <li class="nav-item ">
              <a href="profile.php" class="nav-link ">Profil</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link font-regular">Fatura</a>
            </li>
            <li class="nav-item">
              <a href="logout.php" class="nav-link font-regular">Çıkış Yap</a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link active font-regular">Version</a>
            </li>
          </ul>
        </div>
      </div>
    </header>
    <!-- Main -->
    <main class="py-6 bg-surface-secondary">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xl-7 mx-auto">
            <!-- Profile picture -->
            <div class="card shadow border-0 mt-4 mb-10">
              <div class="card-body">
                <div class="d-flex align-items-center">
                  <div>
                    <div class="d-flex align-items-center">
                     
                      <div class="ms-4">
                      <a href="#" class="avatar avatar-lg bg-warning rounded-circle text-white"> 
                        <img alt="..." src="https://preview.webpixels.io/web/img/logos/clever-primary.svg">
                        
                      </a>
                      <br><br>
                      <span class="h4 d-block mb-0">Technical Service</span>
                        
                        <br><br>
                        <h3 class="h4 d-block mb-0"> Version 0.0.1 </h3>
                      </div>
                    </div>
                  </div>
                  <div class="ms-auto">
                    
                  </div>
                </div>
              </div>
            </div>
            <!-- Form -->
          
            <hr class="my-10" />
            <!-- Individual switch cards -->
            <div class="row g-6">
              <div class="col-md-6">
                <div class="card shadow border-0">
                  <div class="card-body">
                    <h5 class="mb-2">Herkese açık profil</h5>
                    <p class="text-sm text-muted mb-6">
                    Profilinizi herkese açık yapmak ağdaki herkesin sizi bulabileceği anlamına gelir.
                    </p>
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" -checked>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card shadow border-0">
                  <div class="card-body">
                    <h5 class="mb-2">E-postamı göster</h5>
                    <p class="text-sm text-muted mb-6">
                    E-posta adreslerinizi göstermeniz, ağdaki herkesin sizi bulabileceği anlamına gelir.
                    </p>
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" -checked>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="card shadow border-0">
                  <div class="card-body d-flex align-items-center">
                    <div>
                      <h5 class="text-danger mb-2">Hesabı devre dışı bırak</h5>
                      <p class="text-sm text-muted">
                      Hesabınızı sildikten sonra geri dönüş yoktur. Lütfen emin olun.
                      </p>
                    </div>
                    <div class="ms-auto">
                      <button type="button" class="btn btn-sm btn-danger">Devre dışı bırak</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>
</div>
    </body>

    </html>

    <script src="/js/demo.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async=""></script>
<script src="https://webpixels.io/js/app.js?id=8cd624330d1f28f68b66f99aa3045bd8" defer=""></script>
<script type="text/javascript" id="" charset="">!function(b,e,f,g,a,c,d){b.fbq||(a=b.fbq=function(){a.callMethod?a.callMethod.apply(a,arguments):a.queue.push(arguments)},b._fbq||(b._fbq=a),a.push=a,a.loaded=!0,a.version="2.0",a.queue=[],c=e.createElement(f),c.async=!0,c.src=g,d=e.getElementsByTagName(f)[0],d.parentNode.insertBefore(c,d))}(window,document,"script","https://connect.facebook.net/en_US/fbevents.js");fbq("init","760844341050116");fbq("track","PageView");</script>
