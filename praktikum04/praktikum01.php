<?php
    require_once 'header.php';
    require_once 'sidebar.php';
    $nilai1 = ["id" => 1, "nim" => "01101", "uts" => 80, "uas" => 84, "tugas" => 85];
    $nilai2 = ["id" => 2, "nim" => "01121", "uts" => 90, "uas" => 80, "tugas" => 95];
    $nilai3 = ["id" => 3, "nim" => "01130", "uts" => 78, "uas" => 85, "tugas" => 90];
    $nilai4 = ["id" => 4, "nim" => "01134", "uts" => 90, "uas" => 78, "tugas" => 93];
    
    $kumpulan_nilai = [$nilai1,$nilai2,$nilai3,$nilai4];
?>

<section class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tugas Praktikum</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Praktikum 01</h3>
                </div>
                <div class="card-body">
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
            </div>
            
        </div>
    </section>
</section>


<?php 
    require_once 'footer.php';
?>
    
