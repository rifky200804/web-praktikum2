<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="icon" href="assets/images/logo.png" type="image/png" />
  <title>ShopAll</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.css" />
  <link rel="stylesheet" href="assets/vendors/linericon/style.css" />
  <link rel="stylesheet" href="assets/css/font-awesome.min.css" />
  <link rel="stylesheet" href="assets/css/themify-icons.css" />
  <link rel="stylesheet" href="assets/css/flaticon.css" />
  <link rel="stylesheet" href="assets/vendors/owl-carousel/owl.carousel.min.css" />
  <link rel="stylesheet" href="assets/vendors/lightbox/simpleLightbox.css" />
  <link rel="stylesheet" href="assets/vendors/nice-select/css/nice-select.css" />
  <link rel="stylesheet" href="assets/vendors/animate-css/animate.css" />
  <link rel="stylesheet" href="assets/vendors/jquery-ui/jquery-ui.css" />
  <!-- main css -->
  <link rel="stylesheet" href="assets/css/style.css" />
  <link rel="stylesheet" href="assets/css/responsive.css" />
</head>

<body>
  <!--================Header Menu Area =================-->
  <header class="header_area">
    <div class="main_menu">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light w-100">
          <!-- Brand and toggle get grouped for better mobile display -->
          <a class="navbar-brand logo_h" href="index.html">
            <img src="assets/images/logo2.png" width="137px" height="90px" alt="" />
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse offset w-100" id="navbarSupportedContent">
            <div class="row w-100 mr-0">
              <div class="col-lg-7 pr-0">
                <ul class="nav navbar-nav center_nav pull-right">
                    <li class="nav-item <?php if($fileName == 'index.php'){echo 'active';} ?>">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item <?php if($fileName == 'produk.php'){echo 'active';} ?>">
                        <a class="nav-link" href="produk.php">Produk</a>                        
                    </li>
                    <li class="nav-item <?php if($fileName == 'pesanan.php'){echo 'active';} ?>">
                        <a class="nav-link" href="pesanan.php">Pesanan</a>                        
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin/index.php">Admin</a>                        
                    </li>
                </ul>
              </div>

              <div class="col-lg-5 pr-0">
                <ul class="nav navbar-nav navbar-right right_nav pull-right">
                  <li class="nav-item">
                    <a href="pesanan.php" class="icons">
                      <i class="ti-shopping-cart"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </header>
  <!--================Header Menu Area =================-->