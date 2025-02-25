<?php
  // Include db config
  require_once './config/db.php';



session_start(); // Oturum başlatma

// Kullanıcı oturumu kontrol et
if (!isset($_SESSION['email'])) {
    header("Location: ./"); // Giriş yapılmadıysa web'ye yönlendir
    exit();
}

// Oturum açmış kullanıcıya gösterilecek mesaj

// Oturum açmış kullanıcıya gösterilecek bilgiler
$name = htmlspecialchars($_SESSION['name']); // İsim oturumdan alınır
//$username = htmlspecialchars($_SESSION['username']);
$email = htmlspecialchars($_SESSION['email']); 




?>


<!DOCTYPE html>
<html lang="tr">
<!-- Head -->


<head>

    <title>Technical Service</title>
    

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">




    <link href="https://fonts.googleapis.com/css?family=Inter:400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.0/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://unpkg.com/@webpixels/css@1.1.93/dist/index.css">
    <link rel="stylesheet" href="https://webpixels.io/css/demo.css">

    
</head>

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
            <a href="profile.php" class="dropdown-item">Profil</a>
            <a href="#" class="dropdown-item">Ayarlar</a>
            <a href="#" class="dropdown-item">Faturalandırma</a>
            <hr class="dropdown-divider">
            <a href="logout.php" class="dropdown-item">Çıkış Yap</a>
          </div>
        </div>
      </div>
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidebarCollapse">
        <!-- Navigation -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="dashboard.php">
              <i class="bi bi-house"></i> Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="create-service.php">
            <i class="bi bi-files"></i>Servis Oluştur
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="bi bi-chat"></i> Mesajlar
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="bi bi-bookmarks"></i> Koleksiyonlar
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="users.php">
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
            <div class="nav-link text-xs font-semibold text-uppercase text-muted ls-wide" href="#">
            Kişiler
              <span class="badge bg-opacity-30 bg-primary text-primary rounded-pill d-inline-flex align-items-center ms-4">3</span>
            </div>
          </li>
          <li>
            <a href="#" class="nav-link d-flex align-items-center">
              <div class="me-4">
                <div class="position-relative d-inline-block text-white">
                  <img alt="Image Placeholder" src="https://images.unsplash.com/photo-1548142813-c348350df52b?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=3&amp;w=256&amp;h=256&amp;q=80" class="avatar rounded-circle">
                  <span class="position-absolute bottom-2 end-2 transform translate-x-1/2 translate-y-1/2 border-2 border-solid border-current w-3 h-3 bg-success rounded-circle"></span>
                </div>
              </div>
              <div>
                <span class="d-block text-sm font-semibold">
                  Marie Claire
                </span>
                <span class="d-block text-xs text-muted font-regular">
                  Paris, FR
                </span>
              </div>
              <div class="ms-auto">
                <i class="bi bi-chat"></i>
              </div>
            </a>
          </li>
          <li>
            <a href="#" class="nav-link d-flex align-items-center">
              <div class="me-4">
                <div class="position-relative d-inline-block text-white">
                  <span class="avatar bg-opacity-30 bg-warning text-warning rounded-circle">JW</span>
                  <span class="position-absolute bottom-2 end-2 transform translate-x-1/2 translate-y-1/2 border-2 border-solid border-current w-3 h-3 bg-success rounded-circle"></span>
                </div>
              </div>
              <div>
                <span class="d-block text-sm font-semibold">
                  Michael Jordan
                </span>
                <span class="d-block text-xs text-muted font-regular">
                  Bucharest, RO
                </span>
              </div>
              <div class="ms-auto">
                <i class="bi bi-chat"></i>
              </div>
            </a>
          </li>
          <li>
            <a href="#" class="nav-link d-flex align-items-center">
              <div class="me-4">
                <div class="position-relative d-inline-block text-white">
                  <img alt="..." src="https://images.unsplash.com/photo-1610899922902-c471ae684eff?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=3&amp;w=256&amp;h=256&amp;q=80" class="avatar rounded-circle">
                  <span class="position-absolute bottom-2 end-2 transform translate-x-1/2 translate-y-1/2 border-2 border-solid border-current w-3 h-3 bg-danger rounded-circle"></span>
                </div>
              </div>
              <div>
                <span class="d-block text-sm font-semibold">
                  Heather Wright
                </span>
                <span class="d-block text-xs text-muted font-regular">
                  London, UK
                </span>
              </div>
              <div class="ms-auto">
                <i class="bi bi-chat"></i>
              </div>
            </a>
          </li>
        </ul>
        <!-- Push content down -->
        <div class="mt-auto"></div>
        <!-- User (md) -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="profile.php">
              <i class="bi bi-person-square"></i> Hesap
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">
              <i class="bi bi-box-arrow-left"></i> Çıkış Yap
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
              <h1 class="h2 mb-0 ls-tight">Bize Ulaşın</h1> 
              <h2>Hoş geldiniz,<?php echo $name; ?>  !</h2>
              <p>Burada size özel içerikleri görebilirsiniz.</p>
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
                <a href="create.php" class="btn d-inline-flex btn-sm btn-primary mx-1">
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
              <a href="#" class="nav-link active">Tüm Dosyalar</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link font-regular">Paylaşıldı</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link font-regular">Dosya istekleri</a>
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
          
            <!-- Form -->
            <div class="mb-5">
              <h5 class="mb-0">İletişim Bilgileri</h5>
            </div>
            <form class="mb-6">
              <div class="row mb-5">
                <div class="col-md-6">
                  <div class="">
                    <label class="form-label" for="first_name">Ad</label>
                    <input type="text" class="form-control" id="first_name"required=" ">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="">
                    <label class="form-label" for="last_name">Soyadı</label>
                    <input type="text" class="form-control" id="last_name"required=" ">
                  </div>
                </div>
              </div>
              <div class="row g-5">
                <div class="col-md-6">
                  <div class="">
                    <label class="form-label" for="email">E-Posta</label>
                    <input type="email" class="form-control" id="email"required=" ">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="">
                    <label class="form-label" for="phone_number">Telefon numarası</label>
                    <input type="tel" class="form-control" id="phone_number" required=" ">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="">
                    <label class="form-label" for="text">Şirket Ünvan</label>
                    <input type="text" class="form-control" id="text" required=" ">
                  </div>
                </div>
              
                <div class="col-md-6">
                  <div class="">
                    <label class="form-label" for="country">Ülke</label>
                    <select class="form-select" id="country" placeholder="Your email" aria-label="Default select example" required=" ">
                      <option selected>Ülke Seçin</option>
                      <option value="1">Türkiye</option>
                      <option value="2">Danimarka</option>
                      <option value="3">Almanya</option>
                      <option value="4">Norveç</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="">
                    <label class="form-label" for="country">Konu</label>
                    <select class="form-select" id="country" placeholder="Your email" aria-label="Default select example" required=" ">
                      <option selected>Konu Seçin</option>
                      <option value="1">Hata</option>
                      <option value="2">Ürün ekle </option>
                      <option value="3">Website Hata </option>
                      <option value="4">Başka Konu</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
    <label class="form-label" for="city">Mesaj</label>
    <textarea class="form-control" placeholder="Gereklidir" rows="3" resize="none" required=" "></textarea>
</div>

              
              <div class="text-end">
                <button type="button" class="btn btn-sm btn-neutral me-2">Sil</button>
                <button type="submit" class="btn btn-sm btn-primary">Gönder</button>
              </div>
            </form>
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
