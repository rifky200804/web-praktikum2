<?php 
require_once 'db.php';
?>

<?php 
    $id = $_GET['iddel'];
    $sql = "DELETE FROM pelanggan WHERE id=?";
    $st = $dbh->prepare($sql)->execute([$id]);
    header('location:list_pelanggan.php');
?>