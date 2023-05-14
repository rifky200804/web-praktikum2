<?php
  $fileName = pathinfo(__FILE__)['filename'].".".pathinfo(__FILE__)['extension'];
  require_once 'template/header.php';
  require_once 'template/sidebar.php';
  require_once '../config/db.php';
  $sql = "SELECT COUNT(1) as jumlah FROM produk ";
  $produk = $dbh->query($sql)->fetch();

  $sql = "SELECT COUNT(1) as jumlah FROM kategori_produk ";
  $kategori = $dbh->query($sql)->fetch();

  $sql = "SELECT COUNT(1) as jumlah FROM pesanan ";
  $pesanan = $dbh->query($sql)->fetch();
?>

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Dashboard</h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <!-- Default box -->
            <h2>Muhammad Rifky Syiahbudin - TI 15 - 0110222066</h2>
            <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="small-box bg-info">
                  <div class="inner">
                    <h3><?= $pesanan['jumlah']; ?></h3>
                    <p>Pesanan User</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-bag"></i>
                  </div>
                  <a href="pesanan.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>

              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="small-box bg-success">
                  <div class="inner">
                    <h3><?= $kategori['jumlah'];  ?></h3>
                    <p>Kategori Produk</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                  </div>
                  <a href="kategori.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>

              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="small-box bg-warning">
                  <div class="inner">
                    <h3><?= $produk['jumlah']; ?></h3>
                    <p>Produk</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                  </div>
                  <a href="produk.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
            </div>
          <!-- /.card -->
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