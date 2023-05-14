<?php
    require_once 'config/db.php';
    ob_start();
    if(isset($_GET['action']) && $_GET['action'] == 'delete'){
        $id = $_GET['id'];
        $sql = "DELETE FROM pesanan WHERE id=?";
        $st = $dbh->prepare($sql)->execute([$id]);
        echo "<script>alert('data success delete')</script>";
        header('location:admin/pesanan.php');
    }else{
        if(isset($_POST['proses'])){
            
            
            $arr_data[] = $_POST['nama'];
            $arr_data[] = $_POST['alamat'];
            $arr_data[] = $_POST['no_hp'];
            $arr_data[] = $_POST['email'];
            $arr_data[] = $_POST['jumlah_pesanan'];
            $arr_data[] = $_POST['deskripsi'];
            $arr_data[] = $_POST['produk_id'];

            $arr_data[] = date("Y-m-d");
            $sql = "INSERT INTO pesanan (nama_pemesan,alamat_pemesan,no_hp,email,jumlah_pesanan,deskripsi,produk_id,tanggal) 
                            VALUES (?,?,?,?,?,?,?,?)";
            
            $st = $dbh->prepare($sql);
            $st->execute($arr_data);

            $id = $_POST['produk_id'];
            $sql = "SELECT a.*,b.nama as kategori FROM produk as a 
            LEFT JOIN kategori_produk as b ON a.kategori_produk_id = b.id 
            WHERE a.id=?";
            $pr = $dbh->prepare($sql);
            $pr->execute([$id]);
            $row = $pr->fetch();

            $produk[] = (int) $row['stok'] - (int) $_POST['jumlah_pesanan'];
            $produk[] = $_POST['produk_id'];
            $sql = "UPDATE produk SET stok=? WHERE id=?";
            $st = $dbh->prepare($sql);
            $st->execute($produk);

            echo "<script type='text/javascript'>alert('data berhasil dibuat')</script>";
            header('location:success_pesan.php');
        }else{
            header('location:pesanan.php');
        }
    }
?>