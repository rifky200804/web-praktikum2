<?php
    echo "<h2>Array Numeric</h2>";
    $animals = ["Burung", "Kucing", "Nyamuk", "Singa"];
    echo $animals[1] . "<br>";
    echo $animals[3] . "<br>";
    

    foreach ($animals as $animal ) {
        echo $animal . "<br>";
    }

    echo "<hr>";

    // array Associative
    echo "<h2>Array Associative</h2>";
    $mahasiswa = ["nama" => "Muhammad Rifky Syiahbudin","jurusan"=>"Teknik Informatika","semester" => 2,"Alamat" => "Depok"];
    echo $mahasiswa['jurusan']."<br>";
    foreach ($mahasiswa as $key => $value) {
        echo $key . " : " . $value . "<br>";
    }

    echo "<hr>";
    echo "<h2>Array Multi Dimensi</h2>";
    // array multidimensi
    $dosen = [
        ["Pak Rojul","Web"],
        ["Pak Reza","DDP"],
        ["Pak Lukman","OS"]
    ];
    echo $dosen[2][0];
    foreach($dosen as $dosen){
    }
?>