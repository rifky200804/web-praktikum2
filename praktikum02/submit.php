<?php 
    $nama = $_POST['nama_lengkap'];
    $matkul = $_POST['matkul'];
    $nilai_uts = $_POST['nilai_uts'];
    $nilai_uas = $_POST['nilai_uas'];
    $nilai_tugas = $_POST['nilai_tugas'];

    echo "Nama : ".$nama."<br>";
    echo "Mata Kuliah : ".$matkul."<br>";
    echo "Nilai UTS : ".$nilai_uts."<br>";
    echo "Nilai UAS : ".$nilai_uas."<br>";
    echo "Nilai Tugas : ".$nilai_tugas."<br>";

?>