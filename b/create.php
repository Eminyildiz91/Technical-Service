<?php
session_start(); // Oturum başlatma

// Kullanıcı oturumu kontrol et
if (!isset($_SESSION['email'])) {
  
    header("Location: ./"); // Giriş yapılmadıysa web'ye yönlendir
    exit();
}
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
   



<body class="group-application-pages group-dashboard-templates component-page-dashboard-sidebar-1">
    <div class="d-flex flex-column flex-lg-row h-lg-full bg-surface-secondary">

    </head>

  <!-- Vertical Navbar -->
  <nav class="navbar show navbar-vertical h-lg-screen navbar-expand-lg px-0 py-3 navbar-light bg-light border-bottom border-bottom-lg-0 border-end-lg" id="navbarVertical">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler ms-n2" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand py-lg-2 mb-lg-5 px-lg-6 me-0" href="dashboard.php">
        <img src="https://preview.webpixels.io/web/img/logos/clever-primary.svg" alt="Technical Service">
      </a>
      <!-- User menu (mobile) -->
      <div class="navbar-user d-lg-none">
        <!-- Dropdown -->
        <div class="dropdown">
          <!-- Toggle -->
          <a href="#" id="sidebarAvatar" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="avatar-parent-child">
              <img alt="Image Placeholder" src="https://images.unsplash.com/photo-1548142813-c348350df52b?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=3&amp;w=256&amp;h=256&amp;q=80" class="avatar avatar- rounded-circle">
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
            <a class="nav-link" href="#">
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
              <h1 class="h2 mb-0 ls-tight">Servis Oluştur</h1> 
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
        <!-- Card stats -->
        
        <main class="py-6 bg-surface-secondary">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xl-7 mx-auto">
            <!-- Profile picture -->
          
            <!-- Form -->
            <div class="mb-5">
              <h5 class="mb-0">Müşteri Hakkında</h5>
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
                    <label class="form-label" for="text">Adres</label>
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
                <hr>
                <h5 class="mb-0">Ürün Hakkında</h5>
                <div class="col-md-6">
                  <div class="">
                    <label class="form-label" for="phone_number">Imei Numarası</label>
                    <input type="tel" class="form-control" id="phone_number" required=" ">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="">
                    <label class="form-label" for="country">Ürün</label>
                    <select class="form-select" id="country" placeholder="Your email" aria-label="Default select example" required=" ">
                      <option selected>Ürün Seçin</option>
                      <option value="1">Hata</option>
                      <option value="2">Ürün ekle </option>
                      <option value="3">Website Hata </option>
                      <option value="4">Başka Konu</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="">
                    <label class="form-label" for="country">Marka</label>
                    <select class="form-select" id="country" placeholder="Your email" aria-label="Default select example" required=" ">
                      <option selected>Marka Seçin</option>
                      <option value="1">Apple</option>
                      <option value="2">Samsung </option>
                      <option value="3">Website Hata </option>
                      <option value="4">Başka Konu</option>
                    </select>
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="">
                    <label class="form-label" for="country">Model</label>
                    <select class="form-select" id="country" placeholder="Your email" aria-label="Default select example" required=" ">
                      <option selected>Model Seçin</option>
                      <option value="1">Hata</option>
                      <option value="2">Ürün ekle </option>
                      <option value="3">Website Hata </option>
                      <option value="4">Başka Konu</option>
                    </select>
                  </div>
                  </div>
                <div class="form-group">

<br>  

    <label class="form-label" for="city">Açıklama</label>
    <textarea class="form-control" placeholder="Gereklidir" rows="3" resize="none" required=" "></textarea>
</div>

              
              <div class="text-end">

<br>

                <button type="button" class="btn btn-sm btn-neutral me-2">Sil</button>
                <button type="submit" class="btn btn-sm btn-primary">Oluştur</button>
              </div>
            </form>
            <hr class="my-10" />
         
      </div>
    </main>
  </div>
</div>

<div class="monaco-aria-container">
    <div class="monaco-alert" role="alert" aria-atomic="true">
    <div class="modal-backdrop fade show"></div>
</div><div class="monaco-alert" role="alert" aria-atomic="true"></div><div class="monaco-status" role="complementary" aria-live="polite" aria-atomic="true"></div>
<div class="monaco-status" role="complementary" aria-live="polite" aria-atomic="true"></div></div>


</body>





</html>




<script src="/js/demo.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async=""></script>
<script src="https://webpixels.io/js/app.js?id=8cd624330d1f28f68b66f99aa3045bd8" defer=""></script>
<script type="text/javascript" id="" charset="">!function(b,e,f,g,a,c,d){b.fbq||(a=b.fbq=function(){a.callMethod?a.callMethod.apply(a,arguments):a.queue.push(arguments)},b._fbq||(b._fbq=a),a.push=a,a.loaded=!0,a.version="2.0",a.queue=[],c=e.createElement(f),c.async=!0,c.src=g,d=e.getElementsByTagName(f)[0],d.parentNode.insertBefore(c,d))}(window,document,"script","https://connect.facebook.net/en_US/fbevents.js");fbq("init","760844341050116");fbq("track","PageView");</script>
    <noscript>
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=760844341050116&amp;ev=PageView&amp;noscript=1">
</noscript>
<script data-turbo-eval="false" data-turbolinks-eval="false">
    if (window.livewire) {
	    console.warn('Livewire: It looks like Livewire\'s @livewireScripts JavaScript assets have already been loaded. Make sure you aren\'t loading them twice.')
	}

    window.livewire = new Livewire();
    window.livewire.devTools(true);
    window.Livewire = window.livewire;
    window.livewire_app_url = '';
    window.livewire_token = 'nKzIwf3MHqwRiGWeEwId1xPjIEd1fQatHZVy2Zen';

	/* Make sure Livewire loads first. */
	if (window.Alpine) {
	    /* Defer showing the warning so it doesn't get buried under downstream errors. */
	    document.addEventListener("DOMContentLoaded", function () {
	        setTimeout(function() {
	            console.warn("Livewire: It looks like AlpineJS has already been loaded. Make sure Livewire\'s scripts are loaded before Alpine.\\n\\n Reference docs for more info: http://laravel-livewire.com/docs/alpine-js")
	        })
	    });
	}

	/* Make Alpine wait until Livewire is finished rendering to do its thing. */
    window.deferLoadingAlpine = function (callback) {
        window.addEventListener('livewire:load', function () {
            callback();
        });
    };

    let started = false;

    window.addEventListener('alpine:initializing', function () {
        if (! started) {
            window.livewire.start();

            started = true;
        }
    });

    document.addEventListener("DOMContentLoaded", function () {
        if (! started) {
            window.livewire.start();

            started = true;
        }
    });
</script>

<script>const myModal = new bootstrap.Modal(document.getElementById('myModal'), options)
// or
const myModalAlternative = new bootstrap.Modal('#myModal', options)</script>