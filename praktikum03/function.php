<?php 

    function hitung_umur($tahun_lahir){
        $tahun_Sekarang = 2023;
        $umur = $tahun_Sekarang-$tahun_lahir;
        return $umur;
    }
    echo hitung_umur(2004);
    echo "<br>";
    function tentukan_nilai($nilai){
        if ($nilai > 90) {
            return "Nilai Anda adalah $nilai, Mendapat Predikat Sangat Baik"."<br>";
        }elseif ($nilai > 75) {
            return "Nilai Anda adalah $nilai, Mendapat Predikat Baik"."<br>";
        }elseif ($nilai > 65) {
            return "Nilai Anda adalah $nilai, Mendapat Predikat Cukup"."<br>";
        }else{
            return "Nilai Anda adalah $nilai, Mendapat Predikat Kurang"."<br>";
        }
    }
    echo tentukan_nilai(98); //Sangat Baik
    echo tentukan_nilai(76); //Baik
    echo tentukan_nilai(67); //Cukup
    echo tentukan_nilai(43); //Kurang
?>