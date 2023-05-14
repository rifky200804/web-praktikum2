<?php
  $fileName = pathinfo(__FILE__)['filename'].".".pathinfo(__FILE__)['extension'];
  require_once 'template/header.php';
  require_once 'template/sidebar.php';
  require_once '../config/db.php';
  $sql = "SELECT * FROM kategori_produk";
  $categories = $dbh->query($sql);

  if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "SELECT * FROM produk WHERE id=?";
    $pr = $dbh->prepare($sql);
    $pr->execute([$id]);
    $row = $pr->fetch();
  }

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
          <div class="card">
            <div class="card-body">
                <h1 class="text-center">Form Produk</h1>
                <form method="POST" action="proses_produk.php">
                    <div class="form-group row">
                        <label for="kode" class="col-4 col-form-label">Kode</label> 
                        <div class="col-8">
                        <input id="kode" name="kode" type="text" class="form-control" required="required" value="<?php if(isset($row['kode'])){echo $row['kode'];} ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama_produk" class="col-4 col-form-label">Nama Produk</label> 
                        <div class="col-8">
                            <input id="nama_produk" name="nama_produk" type="text" class="form-control" required="required" value="<?php if(isset($row['nama'])){echo $row['nama'];} ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4 col-form-label" for="harga">Harga</label> 
                        <div class="col-8">
                            <input id="harga" name="harga" type="text" class="form-control" required="required" value="<?php if(isset($row['harga'])){echo $row['harga'];} ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="stok" class="col-4 col-form-label">Stok</label> 
                        <div class="col-8">
                            <input id="stok" name="stok" type="text" class="form-control" required="required" value="<?php if(isset($row['kode'])){echo $row['kode'];} ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="textarea" class="col-4 col-form-label">Deskripsi</label> 
                        <div class="col-8">
                            <textarea id="deskripsi" name="deskripsi" cols="40" rows="5" class="form-control" required="required"><?php if(isset($row['deskripsi'])){echo $row['deskripsi'];} ?></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kategori" class="col-4 col-form-label">Kategori</label> 
                        <div class="col-8">
                        <select id="select" name="kategori" class="custom-select">
                            <?php foreach($categories as $key => $value) : ?>
                            <option value="<?= $value['id'] ?>" <?php if(isset($row['kategori_produk_id']) && $row['kategori_produk_id'] == $value['id']){echo "selected";} ?>><?= $value['nama']?></option>
                            <?php endforeach; ?>
                        </select>
                        </div>
                    </div> 
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                        <?php if(isset($row['id'])) : ?>
                            <input type="hidden" name="id" value="<?= $row['id'] ?>">
                        <?php endif; ?>
                        <button name="proses" type="submit" value="<?php if(isset($row['id'])){echo "update";}else{echo "create";} ?>" class="btn btn-primary"><?php if(isset($row['id'])){echo "Update";}else{echo "Submit";} ?></button>
                        </div>
                    </div>
                </form>
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