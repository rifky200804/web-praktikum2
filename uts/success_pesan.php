<?php 
    $fileName = pathinfo(__FILE__)['filename'].".".pathinfo(__FILE__)['extension'];
    require_once 'template/header.php';
    require_once 'config/db.php';
    $sql = "SELECT * FROM produk WHERE stok != 0 ORDER BY id DESC LIMIT 6 ";
    $products = $dbh->query($sql);
?>
<section class="home_banner_area mb-40">
    <div class="banner_inner d-flex align-items-center">
      <div class="container">
        <div class="banner_content row">
          <div class="col-lg-12">
            <p class="sub text-uppercase">Welcome To </p>
            <h3><span>Shopping</span> <br />All <span> Your Style</span></h3>
            <h4>You Can Shopping All Categories in here.</h4>
            <a class="main_btn mt-40" href="produk.php">View Product</a>
          </div>
        </div>
      </div>
    </div>
</section>

<section class="feature_product_area section_gap_bottom_custom">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="main_title">
            <h2><span>Terima Kasih Sudah Berbelanja</span></h2>
            <p>Hasil Pesanan Sudah Tercatat </p>
          </div>
        </div>
      </div>
    </div>
</section>

<?php
    require_once 'template/footer.php';
?>