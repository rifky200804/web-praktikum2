<?php 
    $fileName = pathinfo(__FILE__)['filename'].".".pathinfo(__FILE__)['extension'];
    require_once 'template/header.php';
    require_once 'config/db.php';
    $sql = "SELECT a.*,b.nama as produk,b.harga as harga FROM pesanan as a LEFT JOIN produk as b ON a.produk_id = b.id";
    $orders = $dbh->query($sql);
?>

<section class="feature_product_area section_gap_bottom_custom">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="main_title">
            <h2><span>Data Pesanan</span></h2>
            <p>Data Pesanan Diterima</p>
          </div>
        </div>
      </div>

      <div class="row">
            <table class="table table-responsive-xl table-hover">
                <thead>
                  <tr>
                    <th>No</th>
                    <th >Nama</th>
                    <th>Tanggal</th>
                    <th>Alamat</th>
                    <th>NO Hp</th>
                    <th>Email</th>
                    <th>Produk</th>
                    <th width="150px">Harga Per Barang</th>
                    <th>Jumlah Pesanan</th>
                    <th>Jumlah Harga</th>
                    <th>Deskripsi</th>
                  </tr>  
                </thead>
                <tbody>
                <?php $no=1; ?>
                <?php foreach($orders as $key => $value) : ?>
                  <tr>
                    <td><?= $no; ?></td>
                    <td><?= $value['nama_pemesan'] ?></td>
                    <td><?= $value['tanggal'] ?></td>
                    <td><?= $value['alamat_pemesan'] ?></td>
                    <td><?= $value['no_hp'] ?></td>
                    <td><?= $value['email'] ?></td>
                    <td><?= $value['produk'] ?></td>
                    <td><?= "Rp. ".number_format($value['harga'],2,',','.');  ?></td>
                    <td><?= $value['jumlah_pesanan'] ?></td>
                    <td><?= "Rp. ".number_format($value['jumlah_pesanan'] * $value['harga'],2,',','.') ?></td>
                    <td><?= $value['deskripsi']?></td>
                  </tr>
                <?php $no++;?>
                <?php endforeach; ?>
                </tbody>
            </table>
      </div>
    </div>
</section>


<?php
    require_once 'template/footer.php';
?>