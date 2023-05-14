<?php 
    if(!isset($_GET['produk_id'])){
        header('location:index.php');
    }
    $fileName = pathinfo(__FILE__)['filename'].".".pathinfo(__FILE__)['extension'];
    require_once 'template/header.php';
    require_once 'config/db.php';

    $id = $_GET['produk_id'];
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
                    <ul class="list">
                        <li>
                            <span>Kategori</span> : <?=  $row['kategori']; ?>
                        </li>
                        <li>
                            <span>Ketersediaan</span> : <?php if($row['stok'] > 0){echo "In Stock";}else{echo "Out Of Stock";}    ?>
                        </li>
                        <li>
                            <span>Sisa Stok</span> : <?=$row['stok'];  ?>
                        </li>
                    </ul>
                    <p>
                        <?= $row['deskripsi']; ?>
                    </p>
                    <!-- <div class="card_area">
                        <a class="main_btn" href="form_pesanan.php">Pesan Barang</a>
                    </div> -->
                </div>
            </div>
        </div>
        <h2 class="text-center">Form Pemesanan</h2><br>
            <form method="POST" action="proses_pesanan.php">
                <input type="hidden" name="produk_id" value="<?=$_GET['produk_id']?>">
                <div class="form-group row">
                    <label for="nama" class="col-4 col-form-label">Nama Pemesan</label> 
                    <div class="col-8">
                        <input id="nama" name="nama" type="text" class="form-control" required="required">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-4 col-form-label">email</label> 
                    <div class="col-8">
                        <input id="email" name="email" type="text" class="form-control" required="required">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="no_hp" class="col-4 col-form-label">No Handphone</label> 
                    <div class="col-8">
                        <input id="no_hp" name="no_hp" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jumlah_pesanan" class="col-4 col-form-label">Jumlah Pesanan</label> 
                    <div class="col-8">
                        <input id="jumlah_pesanan" name="jumlah_pesanan" type="number" value="1" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-4 col-form-label">Alamat</label> 
                    <div class="col-8">
                        <textarea id="alamat" name="alamat" cols="40" rows="5" class="form-control" required="required"></textarea>
                    </div>
                </div> 
                <div class="form-group row">
                    <label for="deskripsi" class="col-4 col-form-label">Deskirpsi</label> 
                    <div class="col-8">
                        <textarea id="deskripsi" name="deskripsi" cols="40" rows="5" class="form-control" required="required"></textarea>
                    </div>
                </div> 
                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button name="proses" type="submit" value="create" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        
    </div>
</section>

<?php
    require_once 'template/footer.php';
?>