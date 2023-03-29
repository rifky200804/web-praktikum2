<?php 
    require_once 'db.php';
    //membuat kondisi untuk mengedit data pelanggan 
    if (!empty($_GET['idedit'])) {
        $edit = $_GET['idedit'];
        //untuk menampilkan data dengan perintah select
        $sql = "SELECT * FROM pelanggan WHERE id=?";
        $st = $dbh->prepare($sql);
        //intruksi untuk menjalankan program 
        $st->execute([$edit]);
        //untuk menampilkan baris di setiap data 
        $row = $st->fetch();
    } else {
        //untuk membuat data baru 
        $row = [];
    };
?>
            
<form method="POST" action="proses_pelanggan.php">
  <div class="form-group row">
    <label for="kode" class="col-4 col-form-label">Kode</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-anchor"></i>
          </div>
        </div> 
        <input id="kode" name="kode" type="text" class="form-control"
        value="<?php if(count($row) > 0){echo $row['kode'];} ?>">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Pelanggan</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adjust"></i>
          </div>
        </div> 
        <input id="nama" name="nama" type="text" class="form-control" 
        value="<?php if(count($row) > 0){echo $row['nama'];} ?>">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Jenis Kelamin</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adjust"></i>
          </div>
        </div> 
        <input id="l" name="jk" type="radio" class="form-control" value="L" <?php if((count($row) > 0) && $row['jk'] == 'L'){echo "checked";} ?> ><label for="l">Laki-Laki</label>
        <input id="p" name="jk" type="radio" class="form-control" value="P" <?php if((count($row) > 0) && $row['jk'] == 'P'){echo "checked";} ?> ><label for="p">Perempuan</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-o-left"></i>
          </div>
        </div> 
        <input id="tmp_lahir" name="tmp_lahir" 
        value="<?php if(count($row) > 0){echo $row['tmp_lahir'];} ?>" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-up"></i>
          </div>
        </div> 
        <input id="tgl_lahir" name="tgl_lahir" value="<?php if(count($row) > 0){echo $row['tgl_lahir'];} ?>" type="date" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-right"></i>
          </div>
        </div> 
        <input id="email" name="email" value="<?php if(count($row) > 0){echo $row['email'];} ?>" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jenis" class="col-4 col-form-label">Jenis Kartu</label> 
    <div class="col-8">
        <?php 
            $sqljenis = "SELECT * FROM kartu";
            $rsjenis = $dbh->query($sqljenis);
        ?>
      <select id="kartu" name="kartu" class="custom-select">
          <?php 
            foreach($rsjenis as $rowjenis){
         ?>
            <option value="<?=$rowjenis['id']?>" <?php if((count($row) > 0) && $rowjenis['id'] == $row['kartu_id']){echo "selected";} ?> ><?=$rowjenis['nama']?></option>
         <?php
            }
        ?>

      </select>
    </div>
  </div> 
  <?php if(count($row) > 0) { ?>
    <input type="hidden" name="idedit" id="idedit" value="<?php echo $row['id'] ?>">
  <?php }  ?>
  <div class="form-group row">
    <div class="offset-4 col-8">
        <?php $button = (empty($edit)) ? "Simpan" : "Update";  ?>
      <input type="submit" name="proses" type="submit" 
      class="btn btn-primary" value="<?= $button  ?>"/>
    </div>
  </div>
  
  

</form>
