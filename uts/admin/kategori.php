<?php
    $fileName = pathinfo(__FILE__)['filename'].".".pathinfo(__FILE__)['extension'];
    require_once 'template/header.php';
    require_once 'template/sidebar.php';
    require_once '../config/db.php';
    $sql = "SELECT * FROM kategori_produk ORDER BY id ASC";
    $categories = $dbh->query($sql);
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
              <h2>Data Kategori Produk</h2>
              <a href="form_kategori.php" class="btn btn-primary">Tambah Kategori Produk</a>
            </div>
            <div class="card-body">
              <table class="table table-responsive-md table-hover">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Kategori</th>
                    <th>Aksi</th>
                  </tr>  
                </thead>
                <tbody>
                <?php $no=1; ?>
                <?php foreach($categories as $key => $value) : ?>
                  <tr>
                    <td><?= $no; ?></td>
                    <td><?= $value['nama'] ?></td>
                    <td>
                        <a href="form_kategori.php?id=<?= $value['id'] ?>" class="btn btn-warning">Edit</a>
                        <a href="proses_kategori.php?id=<?= $value['id']?>&action=delete" class="btn btn-danger" onclick="if(!confirm('Anda Yakin Hapus Data Produk <?=$value['nama']?>?')) {return false}">
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