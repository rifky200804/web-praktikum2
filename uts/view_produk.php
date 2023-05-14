<?php 
    if(!isset($_GET['id'])){
        header('location:index.php');
    }
    $fileName = pathinfo(__FILE__)['filename'].".".pathinfo(__FILE__)['extension'];
    require_once 'template/header.php';
    require_once 'config/db.php';

    $id = $_GET['id'];
    $sql = "SELECT a.*,b.nama as kategori FROM produk as a 
            LEFT JOIN kategori_produk as b ON a.kategori_produk_id = b.id 
            WHERE a.id=?";
    $pr = $dbh->prepare($sql);
    $pr->execute([$id]);
    $row = $pr->fetch();
?>
=

<section class="feature_product_area section_gap_bottom_custom" style="padding:0px;">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="main_title" style="margin-bottom:20px">
            <h2><span>Detail Produk</span></h2>
            <p>berikut adalah detail <?= $row['nama'] ?></p>
          </div>
        </div>
    </div>
    
</div>
</section>

<section class="main mb-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <img src="assets/images/bag-1.jpg" width="100%" height="70%" alt="">
            </div>
            <div class="col-lg-6 offset-lg-1 col-md-6 col-sm-12">
                <div class="s_product_text">
                <h3><?= $row['nama'] ?></h3>
                <h2>Rp. <?=  number_format($row['harga'],2,',','.') ?> </h2>
                <li>
                            <span>Kategori</span> : <?=  $row['kategori']; ?>
                        </li>
                        <li>
                            <span>Ketersediaan</span> : <?php if($row['stok'] > 0){echo "In Stock";}else{echo "Out Of Stock";}    ?>
                        </li>
                        <li>
                            <span>Sisa Stok</span> : <?=$row['stok'];  ?>
                        </li>
                <p>
                    <?= $row['deskripsi']; ?>
                </p>
                <div class="card_area">
                    <a class="main_btn" href="form_pesanan.php?produk_id=<?= $row['id']; ?>">Pesan Barang</a>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
    require_once 'template/footer.php';
?>