<?php 

    if(
        (!isset($_POST['nama_lengkap']) || $_POST['nama_lengkap'] == NULL) || 
        (!isset($_POST['matkul']) || $_POST['matkul'] == NULL) ||
        (!isset($_POST['nilai_uts']) || $_POST['nilai_uts'] == NULL) ||
        (!isset($_POST['nilai_uas']) || $_POST['nilai_uas'] == NULL) ||
        (!isset($_POST['nilai_tugas']) || $_POST['nilai_tugas'] == NULL)
        ){
            header("location: form.php");
    }

    

    $nama = $_POST['nama_lengkap'];
    $matkul = $_POST['matkul'];
    $nilai_uts = $_POST['nilai_uts'];
    $nilai_uas = $_POST['nilai_uas'];
    $nilai_tugas = $_POST['nilai_tugas'];

    $total_nilai = ($nilai_uas + $nilai_uts + $nilai_tugas) / 3 ;
    $status;
    if($total_nilai > 60){
        $status =  "Lulus";
    }else{
        $status =  "Tidak Lulus";
    }

    $grade;
    if ($total_nilai >= 85) {
        $grade =  "A";
    } else if($total_nilai >= 70)  {
        $grade =  "B";
    }else if($total_nilai >= 50 ) {
        $grade =  "C";
    }else if($total_nilai >= 30 ) {
        $grade =  "D";
    } else {
        $grade =  "E";
    }

    $predikat;
    switch ($status) {
        case 'A':
            $predikat = "Sangat Memuaskan";
            break;
        case 'B';
            $predikat = "Memuaskan";
            break;
        case 'C';
            $predikat = "Cukup Memuaskan";
            break;
        case 'D';
            $predikat = "Kurang Memuaskan";
            break;
        case 'E';
            $predikat = "Sangat Kurang Memuaskan";
            break;
        default:
            $predikat = "Tidak Ada";
            break;
    }
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Form</title>
  </head>
  <body>

    
    <div class="container">
        <h1 class="text-center">Daftar Nilai Siswa</h1>
        <a href="form.php" class="btn btn-primary mb-2">Kembali</a>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Mata Kuliah</th>
                    <th scope="col">Nilai UTS</th>
                    <th scope="col">Nilai UAS</th>
                    <th scope="col">Nilai Tugas</th>
                    <th scope="col">Grade</th>
                    <th scope="col">Predikat</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td><?= $nama ?></td>
                    <td><?= $matkul ?></td>
                    <td><?= $nilai_uts ?></td>
                    <td><?= $nilai_uas ?></td>
                    <td><?= $nilai_tugas ?></td>
                    <td><?= $grade ?></td>
                    <td><?= $predikat ?></td>
                    <td><?= $status ?></td>
                </tr>
            </tbody>
        </table>
    </div>






    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script> -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
   
  </body>
</html>