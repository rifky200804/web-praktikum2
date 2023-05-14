<?php
    require_once '../config/db.php';
    if(isset($_GET['action']) && $_GET['action'] == 'delete'){
        $id = $_GET['id'];
        $sql = "DELETE FROM produk WHERE id=?";
        $st = $dbh->prepare($sql)->execute([$id]);
        header('location:produk.php');
    }else{
        if(isset($_POST['proses'])){
            $arr_data[] = $_POST['kode'];
            $arr_data[] = $_POST['nama_produk'];
            $arr_data[] = $_POST['harga'];
            $arr_data[] = $_POST['stok'];
            $arr_data[] = $_POST['deskripsi'];
            $arr_data[] = $_POST['kategori'];
            if($_POST['proses'] == 'create'){
                $sql = "INSERT INTO produk (kode,nama,harga,stok,deskripsi,kategori_produk_id) 
                            VALUES (?,?,?,?,?,?)";
            }else if($_POST['proses'] == 'update'){
                $arr_data[] = (int) $_POST['id'];
                $sql = "UPDATE produk SET kode=?,nama=?,harga=?,stok=?,deskripsi=?,
                            kategori_produk_id=? WHERE id=?";
            }
            $st = $dbh->prepare($sql);
            $st->execute($arr_data);
            
            header('location:produk.php');
        }else{
            header('location:produk.php');
        }
    }
?>