<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Persegi Panjang</title>
  </head>
  <body>

    <div class="container">
        <h1 class="text-center">Persegi Panjang</h1>
        <form method="POST">
          <div class="form-group row">
            <label for="panjang" class="col-4 col-form-label">panjang</label> 
            <div class="col-8">
              <input id="panjang" name="panjang" type="text" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label for="lebar" class="col-4 col-form-label">lebar</label> 
            <div class="col-8">
              <input id="lebar" name="lebar" type="text" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <div class="offset-4 col-8">
              <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
        </form>
        <?php if(isset($_POST['submit'])) { 
            require_once "class_persegipanjang.php"; 
            $panjang = isset($_POST["panjang"]) && !empty($_POST["panjang"]) ?  $_POST["panjang"] : 0;
            $lebar = isset($_POST["lebar"]) && !empty($_POST["lebar"]) ?  $_POST["lebar"] : 0;
            $persegiPanjang = new persegiPanjang($panjang,$lebar);
        ?>
          <h1>Hasil</h1>
          <div class="row">
            <div class="col-md-4">
              <label>Panjang</label>
            </div>
            <div class="col-md-8">
              <label>: <?= $persegiPanjang->panjang; ?></label>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <label>Lebar</label>
            </div>
            <div class="col-md-8">
              <label>: <?= $persegiPanjang->lebar; ?></label>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <label>Luas Persegi Panjang</label>
            </div>
            <div class="col-md-8">
              <label>: <?= $persegiPanjang->luasPersegiPanjang(); ?></label>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <label>Keliling Persegi Panjang</label>
            </div>
            <div class="col-md-8">
              <label>: <?= $persegiPanjang->kelilingPersegiPanjang(); ?></label>
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