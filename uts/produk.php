<?php 
    $fileName = pathinfo(__FILE__)['filename'].".".pathinfo(__FILE__)['extension'];
    require_once 'template/header.php';
    require_once 'config/db.php';
    $sql = "SELECT * FROM produk";
    $products = $dbh->query($sql);
?>

<section class="feature_product_area section_gap_bottom_custom">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="main_title">
            <h2><span>Produk</span></h2>
            <p>Silahkan Pilih Product</p>
          </div>
        </div>
      </div>

      <div class="row">
        <?php foreach($products as $key => $value) : ?>
        <div class="col-lg-4 col-md-6">
          <div class="single-product">
            <div class="product-img">
              <img class="img-fluid w-100" src="assets/images/bag.jpg" alt="">
              <div class="p_icon">
                <a href="view_produk.php?id=<?= $value['id'] ?>">
                  <i class="ti-eye"></i>
                </a>                
                <a href="form_pesanan.php?produk_id=<?= $value['id'] ?>">
                  <i class="ti-shopping-cart"></i>
                </a>
              </div>
            </div>
            <div class="product-btm">
              <a href="#" class="d-block">
                <h4><?= $value['nama'] ?></h4>
              </a>
              <div class="mt-3">
                <span class="mr-4">Rp. <?= number_format($value['harga'],2,',','.'); ?></span>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
</section>


<?php
    require_once 'template/footer.php';
?>