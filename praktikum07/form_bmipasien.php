<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>BMI Pasien</title>
  </head>
  <body>

    <div class="container">
        <h1 class="text-center">BMI Pasien</h1>
        <form method="POST" action="form_bmipasien.php">
          <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Nama</label> 
            <div class="col-8">
              <input id="nama" name="nama" type="text" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label for="berat_badan" class="col-4 col-form-label">Berat Badan</label> 
            <div class="col-8">
              <input id="berat_badan" name="berat_badan" type="text" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label for="tinggi_badan" class="col-4 col-form-label">Tinggi Badan</label> 
            <div class="col-8">
              <input id="tinggi_badan" name="tinggi_badan" type="text" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label for="text" class="col-4 col-form-label">Umur</label> 
            <div class="col-8">
              <input id="text" name="umur" type="umur" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-4">Jenis Kelamin</label> 
            <div class="col-8">
              <div class="custom-control custom-radio custom-control-inline">
                <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="L"> 
                <label for="jk_0" class="custom-control-label">Laki-Laki</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="P"> 
                <label for="jk_1" class="custom-control-label">Perempuan</label>
              </div>
            </div>
          </div> 
          <div class="form-group row">
            <div class="offset-4 col-8">
              <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
        </form>
        <?php if(isset($_POST['submit'])) { 
            require_once "class_bmipasien.php"; 
            $nama = isset($_POST["nama"]) && !empty($_POST["nama"]) ?  $_POST["nama"] : '-';
            $berat = isset($_POST["berat_badan"]) && !empty($_POST["berat_badan"]) ?  $_POST["berat_badan"] : 0;
            $tinggi = isset($_POST["tinggi_badan"]) && !empty($_POST["tinggi_badan"]) ?  $_POST["tinggi_badan"] : 0;
            $umur = isset($_POST["umur"]) && !empty($_POST["umur"]) ?  $_POST["umur"] : 0;
            $jk = isset($_POST["jk"]) && !empty($_POST["jk"]) ?  $_POST["jk"] : '-';
            $pasien = new bmiPasien($nama,$berat,$tinggi,$umur,$jk);
        ?>
          <h1>Hasil BMI Pasien</h1>
          <div class="row">
            <div class="col-md-4">
              <label>Nama</label>
            </div>
            <div class="col-md-8">
              <label>: <?= $pasien->nama; ?></label>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <label>Berat Badan</label>
            </div>
            <div class="col-md-8">
              <label>: <?= $pasien->berat; ?></label>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <label>Tinggi Badan</label>
            </div>
            <div class="col-md-8">
              <label>: <?= $pasien->tinggi; ?></label>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <label>Umur</label>
            </div>
            <div class="col-md-8">
              <label>: <?= $pasien->umur; ?></label>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <label>Jenis Kelamin</label>
            </div>
            <div class="col-md-8">
              <label>: <?= $pasien->jk; ?></label>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <label>Hasil BMI</label>
            </div>
            <div class="col-md-8">
              <label>: <?= $pasien->hasilBMI(); ?></label>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <label>Status BMI</label>
            </div>
            <div class="col-md-8">
              <label>: <?= $pasien->statusBMI(); ?></label>
            </div>
          </div>
        <?php }  ?>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>