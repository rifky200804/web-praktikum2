<?php
    $fileName = pathinfo(__FILE__)['filename'].".".pathinfo(__FILE__)['extension'];
    if(empty($_GET['id'])){
        header('location:produk.php');
    }

    require_once 'template/header.php';
    require_once 'template/sidebar.php';
    require_once '../config/db.php';
    // $sql = "SELECT a.*,b.nama as kategori FROM produk as a LEFT JOIN kategori_produk as b ON a.kategori_produk_id = b.id";
    // $products = $dbh->query($sql);
    $id = $_GET['id'];
    $sql = "SELECT a.*,b.nama as kategori FROM produk as a 
            LEFT JOIN kategori_produk as b ON a.kategori_produk_id = b.id 
            WHERE a.id=?";
    $pr = $dbh->prepare($sql);
    $pr->execute([$id]);
    $row = $pr->fetch();
    
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
              <h2>Detail Produk</h2>
            </div>
            <div class="card-body">
              <table class="table table-striped">
                <tr>
                    <td>ID</td>
                    <td><?= $row['id']; ?></td>
                </tr>
                <tr>
                    <td>Kode</td>
                    <td><?= $row['kode']; ?></td>
                </tr>
                <tr>
                    <td>Nama Produk</td>
                    <td><?= $row['nama']; ?></td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td><?= "Rp. ".number_format($row['harga'],2,',','.'); ?></td>
                </tr>
                <tr>
                    <td>Stok</td>
                    <td><?= $row['stok']; ?></td>
                </tr>
                <tr>
                    <td>Deskripsi</td>
                    <td><?= $row['deskripsi']; ?></td>
                </tr>
                <tr>
                    <td>Kategori</td>
                    <td><?= $row['kategori']; ?></td>
                </tr>
              </table>
            </div>
            <div class="card-footer">
                <a href="produk.php" class="btn btn-warning">Kembali</a>
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