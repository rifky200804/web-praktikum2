<?php
    $fileName = pathinfo(__FILE__)['filename'].".".pathinfo(__FILE__)['extension'];
    require_once 'template/header.php';
    require_once 'template/sidebar.php';
    require_once '../config/db.php';
    $sql = "SELECT a.*,b.nama as kategori FROM produk as a LEFT JOIN kategori_produk as b ON a.kategori_produk_id = b.id";
    $products = $dbh->query($sql);

    
?>

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <!-- <h1>Produk</h1> -->
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h2>Data Produk</h2>
              <a href="form_produk.php" class="btn btn-primary">Tambah Produk</a>
            </div>
            <div class="card-body">
              <table class="table table-responsive-md table-hover">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Kategori</th>
                    <th>Aksi</th>
                  </tr>  
                </thead>
                <tbody>
                <?php $no=1; ?>
                <?php foreach($products as $key => $value) : ?>
                  <tr>
                    <td><?= $no; ?></td>
                    <td><?= $value['kode'] ?></td>
                    <td><?= $value['nama'] ?></td>
                    <td><?= "Rp. ".number_format($value['harga'],2,',','.'); ?></td>
                    <td><?= $value['stok'] ?></td>
                    <td><?= $value['kategori']?></td>
                    <td> 
                      <a href="detail_produk.php?id=<?= $value['id']?>" class="btn btn-primary">Detail</a>
                      <a href="form_produk.php?id=<?= $value['id'] ?>" class="btn btn-warning">Edit</a>
                      <a href="proses_produk.php?id=<?= $value['id']?>&action=delete" class="btn btn-danger" onclick="if(!confirm('Anda Yakin Hapus Data Produk <?=$value['nama']?>?')) {return false}">
                        Hapus
                      </a>
                    </td>
                  </tr>
                <?php $no++;?>
                <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php
    require_once 'template/footer.php';
?>