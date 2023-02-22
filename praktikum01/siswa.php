<?php
    $nilai1 = ["id" => 1, "nim" => "01101", "uts" => 80, "uas" => 84, "tugas" => 85];
    $nilai2 = ["id" => 2, "nim" => "01121", "uts" => 90, "uas" => 80, "tugas" => 95];
    $nilai3 = ["id" => 3, "nim" => "01130", "uts" => 78, "uas" => 85, "tugas" => 90];
    $nilai4 = ["id" => 4, "nim" => "01134", "uts" => 90, "uas" => 78, "tugas" => 93];
    
    $kumpulan_nilai = [$nilai1,$nilai2,$nilai3,$nilai4];
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Mahasiswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="text-center">Daftar Nilai Mahasiswa</h1>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>UTS</th>
                    <th>UAS</th>
                    <th>Tugas</th>
                    <th>Nilai Akhir</th>
                </tr>
            </thead>

            <tbody>
            <?php foreach($kumpulan_nilai as $key => $value) : ?>
                <tr>
                    <td><?= $value['id']; ?></td>
                    <td><?= $value['nim']; ?></td>
                    <td><?= $value['uts'] ?></td>
                    <td><?= $value['uas']; ?></td>
                    <td><?= $value['tugas']; ?></td>
                    <?php $nilai_akhir = ($value['uas']+$value['uts']+$value['tugas']) / 3;  ?>
                    <td><?= number_format($nilai_akhir, 2 , ",","."); ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>