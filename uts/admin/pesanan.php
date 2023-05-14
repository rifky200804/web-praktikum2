<?php
    $fileName = pathinfo(__FILE__)['filename'].".".pathinfo(__FILE__)['extension'];
    require_once 'template/header.php';
    require_once 'template/sidebar.php';
    require_once '../config/db.php';
    $sql = "SELECT a.*,b.nama as produk,b.harga as harga FROM pesanan as a LEFT JOIN produk as b ON a.produk_id = b.id";
    $orders = $dbh->query($sql);

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
              <h2>Data Pesanan</h2>
            </div>
            <div class="card-body">
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
                    <th>Aksi</th>
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
                    <td><a href="../proses_pesanan.php?id=<?= $value['id'] ?>&action=delete" class="btn btn-danger" onclick="if(!confirm('Anda Yakin Hapus Data Produk <?=$value['nama']?>?')) {return false}">Delete</a></td>
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