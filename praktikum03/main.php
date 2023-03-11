<?php 
    if(isset($_POST['submit'])){
        $nim = $_POST['nim'];
        $nama = $_POST['nama_lengkap'];
        $jenkel = $_POST['jenkel'];
        $programStudi = $_POST['program_studi'];
        $ipk = (float) $_POST['ipk'];
        $hobis = $_POST['hobi'];
        // var_dump($hobi);
        $hobi = "";
        $countHobi= count($hobis);
        $no = 1;
        foreach($hobis as $valHobi){
            $hobi .= $valHobi;
            if($countHobi > $no){
                $hobi.=", ";
            }
            $no++;
        }

        function cekStatus($ipk){
            if ($ipk >= 3 && $ipk <= 4) {
                return "Lolos";
            }else{
                return "Tidak Lolos";
            }
        }

        $status = cekStatus($ipk);

    }
    require_once "header.php";
?>

<div class="container">
    <h1>Form Pendaftaran</h1>
    <form method="POST" action="">
        <div class="form-group row">
            <label for="nim" class="col-4 col-form-label">NIM</label> 
            <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fa fa-user-circle-o"></i>
                </div>
                </div> 
                <input id="nim" name="nim" type="text" class="form-control">
            </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="nama_lengkap" class="col-4 col-form-label">Nama Lengkap</label> 
            <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fa fa-address-book"></i>
                </div>
                </div> 
                <input id="nama_lengkap" name="nama_lengkap" type="text" class="form-control">
            </div>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-4">Jenis Kelamin</label> 
            <div class="col-8">
            <div class="custom-control custom-radio custom-control-inline">
                <input name="jenkel" id="jenkel_0" type="radio" class="custom-control-input" value="Laki-Laki"> 
                <label for="jenkel_0" class="custom-control-label">Laki-Laki</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input name="jenkel" id="jenkel_1" type="radio" class="custom-control-input" value="Perempuan"> 
                <label for="jenkel_1" class="custom-control-label">Perempuan</label>
            </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="program_studi" class="col-4 col-form-label">Program Studi</label> 
            <div class="col-8">
            <select id="program_studi" name="program_studi" class="custom-select">
                <option value="Sistem Informasi">Sistem Informasi</option>
                <option value="Teknik Informatika">Teknik Informatika</option>
                <option value="Bisnis DIgital">Bisnis Digital</option>
            </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-4">Hobi</label> 
            <div class="col-8">
            <div class="custom-control custom-checkbox custom-control-inline">
                <input name="hobi[]" id="hobi[]_0" type="checkbox" class="custom-control-input" value="Membaca"> 
                <label for="hobi[]_0" class="custom-control-label">Membaca</label>
            </div>
            <div class="custom-control custom-checkbox custom-control-inline">
                <input name="hobi[]" id="hobi[]_1" type="checkbox" class="custom-control-input" value="Bermain Game"> 
                <label for="hobi[]_1" class="custom-control-label">Bermain Game</label>
            </div>
            <div class="custom-control custom-checkbox custom-control-inline">
                <input name="hobi[]" id="hobi[]_2" type="checkbox" class="custom-control-input" value="Menulis"> 
                <label for="hobi[]_2" class="custom-control-label">Menulis</label>
            </div>
            <div class="custom-control custom-checkbox custom-control-inline">
                <input name="hobi[]" id="hobi[]_3" type="checkbox" class="custom-control-input" value="Belajar"> 
                <label for="hobi[]_3" class="custom-control-label">Belajar</label>
            </div>
            <div class="custom-control custom-checkbox custom-control-inline">
                <input name="hobi[]" id="hobi[]_4" type="checkbox" class="custom-control-input" value="Memasak"> 
                <label for="hobi[]_4" class="custom-control-label">Memasak</label>
            </div>
            <div class="custom-control custom-checkbox custom-control-inline">
                <input name="hobi[]" id="hobi[]_5" type="checkbox" class="custom-control-input" value="Berenang"> 
                <label for="hobi[]_5" class="custom-control-label">Berenang</label>
            </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="ipk" class="col-4 col-form-label">IPK</label> 
            <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fa fa-calculator"></i>
                </div>
                </div> 
                <input id="ipk" name="ipk" type="text" class="form-control">
            </div>
            </div>
        </div> 
        <div class="form-group row">
            <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
    <hr>
    <h3>Informasi Yang Anda Kirim</h3>
    <?php 
        echo "NIM : ".$nim."<br>";
        echo "Nama Lengkap : ".$nama."<br>";
        echo "Jenis Kelamin : ".$jenkel."<br>";
        echo "Program Studi : ".$programStudi."<br>";
        echo "Hobi : ".$hobi."<br>";
        echo "IPK : ".$ipk."<br>";
        echo "Status : ".$status."<br>"; 
    ?>
</div>


<?php 
    require_once "footer.php"
?>