<?php
    require_once '../config/db.php';
    ob_start();
    if(isset($_GET['action']) && $_GET['action'] == 'delete'){
        $id = $_GET['id'];
        $sql = "DELETE FROM kategori_produk WHERE id=?";
        $st = $dbh->prepare($sql)->execute([$id]);
        header('location:kategori.php');
    }else{
        if(isset($_POST['proses'])){
            $arr_data[] = $_POST['nama'];
            if($_POST['proses'] == 'create'){
                $sql = "INSERT INTO kategori_produk (nama) 
                            VALUES (?)";
            }else if($_POST['proses'] == 'update'){
                $arr_data[] = (int) $_POST['id'];
                $sql = "UPDATE kategori_produk SET nama=? WHERE id=?";
            }
            $st = $dbh->prepare($sql);
            $st->execute($arr_data);
            header('location:kategori.php');
        }else{
            header('location:kategori.php');
        }
    }
?>