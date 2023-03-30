<?php 
require_once 'db.php';
?>
<?php
    $_id = $_GET['id'];
    // select * from produk where id = $_id;
    //$sql = "SELECT a.*,b.nama as jenis FROM produk a
    //INNER JOIN jenis_produk b ON a.jenis_produk_id=b.id WHERE a.id=?";
    $sql = "SELECT *,b.nama as kartu  FROM pelanggan as a JOIN kartu as b ON a.kartu_id = b.id WHERE a.id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();
    //echo 'NAMA PRODUK ' . $row['nama'];
?>

<table class="table table-striped">
    <tbody>
        <tr><td>ID</td><td>: <?=$row['id']?></td></tr>
        <tr>  <td>Kode</td><td>: <?=$row['kode']?></td></tr>
        <tr>   <td>Nama</td><td>: <?=$row['nama']?></td></tr>
        <tr>   <td>Jenis Kelamin</td><td>: <?=$row['jk']?></td></tr>
        <tr>   <td>Tempat Lahir</td><td>: <?=$row['tmp_lahir']?></td></tr>
        <tr>   <td>Tanggal Lahir</td><td>: <?=$row['tgl_lahir']?></td></tr>
        <tr>   <td>Email</td><td>: <?=$row['email']?></td></tr>
        <tr>   <td>Kartu</td><td>: <?=$row['kartu']?></td></tr>
    </tbody>
</table>
