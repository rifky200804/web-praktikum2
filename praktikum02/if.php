<?php 

    $total_nilai = 90;
    $status;

    if($total_nilai > 60){
        $status =  "Lulus";
    }else{
        $status =  "Tidak Lulus";
    }


    echo $status."<br>";

    $grade;
    // else if
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

    echo $grade."<br>";
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
    echo $predikat."<br>";
?>