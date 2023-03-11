<?php 
    $nilaiSkill = [
        'HTML'=>10,
        "CSS"=>10,
        "Javascript"=>20,
        "RWD Bootstrap"=>20,
        "PHP"=>30,
        "Python"=>30,
        "Java"=>50
    ];
     
    function checkScore($score){
        if($score > 100){
            return "Sangat Baik";
        }else if($score > 60){
            return "Baik";
        }else if($score > 40){
            return "Cukup";
        }else if($score > 0){
            return "Kurang";
        }else{
            return "Tidak Memadai";
        }
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Form Registrasi</title>
  </head>
  <body>

    <div class="container">
        <h1>Form Registrasi</h1>
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
                    <input name="jenkel" id="jenkel_0" type="radio" class="custom-control-input" value="Laki-Laki" <?php if(isset($_POST['jenkel']) && $_POST['jenkel'] == "Laki-Laki"){echo "checked";} ?>> 
                    <label for="jenkel_0" class="custom-control-label">Laki-Laki</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="jenkel" id="jenkel_1" type="radio" class="custom-control-input" value="Perempuan" <?php if(isset($_POST['jenkel']) && $_POST['jenkel'] == "Perempuan"){echo "checked";} ?>> 
                    <label for="jenkel_1" class="custom-control-label">Perempuan</label>
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="program_studi" class="col-4 col-form-label">Program Studi</label> 
                <div class="col-8">
                <select id="program_studi" name="program_studi" class="custom-select">
                    <option value="Sistem Informasi" <?php if(isset($_POST['program_studi']) && $_POST['program_studi'] == "Sistem Informasi"){echo "selected";} ?>>Sistem Informasi</option>
                    <option value="Teknik Informatika" <?php if(isset($_POST['program_studi']) && $_POST['program_studi'] == "Teknik Informatika"){echo "selected";} ?>>Teknik Informatika</option>
                    <option value="Bisnis Digital" <?php if(isset($_POST['program_studi']) && $_POST['program_studi'] == "Bisnis Digital"){echo "selected";} ?>>Bisnis Digital</option>

                </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Skill Web & Programming</label> 
                <div class="col-8">
                    <?php 
                        $no = 0;
                        foreach($nilaiSkill as $skill => $nilai) : 
                    ?>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skill[]" id="skill[]_<?= $no; ?>" type="checkbox" class="custom-control-input" value="<?= $skill ?>" <?php if(in_array($skill,$_POST['skill'])){echo "checked";} ?>> 
                        <label for="skill[]_<?= $no; ?>" class="custom-control-label"><?= $skill ?></label>
                    </div>
                    <?php 
                        $no++;
                        endforeach; 
                    ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-4 col-form-label">Email</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-audio-description"></i>
                    </div>
                    </div> 
                    <input id="email" name="email" type="text" class="form-control">
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
        <?php if(isset($_POST['submit'])) : ?>
        <?php 
            
            $nama = isset($_POST['nama_lengkap']) && $_POST['nama_lengkap']!= NULL ? $_POST['nama_lengkap'] : "-";
            $nim = isset($_POST['nim']) != NULL ? $_POST['nim'] : "-";
            $jenkel = isset($_POST['jenkel']) && $_POST['jenkel'] != NULL ? $_POST['jenkel'] : "-";
            $program_studi = isset($_POST['program_studi']) && $_POST['program_studi'] != NULL ? $_POST['program_studi'] : "-";
            $skills = isset($_POST['skill']) && $_POST['skill'] != NULL ? $_POST['skill'] : [];
            $email = isset($_POST['email']) && $_POST['email'] != NULL ? $_POST['email'] : "-";
            $score = 0;
            $skill = "";
            $countSkill= count($skills);
            $no = 1;
            foreach($skills as $valskill){
                $skill .= $valskill;
                if($countSkill > $no){
                    $skill.=", ";
                }
                $score += $nilaiSkill[$valskill];
                $no++;
            }

            
            $predikat = checkScore($score);
        ?>
        <div class="hasil" style="border:1px solid black; padding:5px;">
            <table>
                <tr>
                    <td>NIM</td>
                    <td> : <?= $nim ?></td>
                </tr>
                <tr>
                    <td>Nama Lengkap</td>
                    <td> : <?= $nama ?></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td> : <?= $jenkel ?></td>
                </tr>
                <tr>
                    <td>Program Studi</td>
                    <td> : <?= $program_studi ?></td>
                </tr>
                <tr>
                    <td>Skill</td>
                    <td> : <?= $skill ?></td>
                </tr>
                <tr>
                    <td>Skor Skill</td>
                    <td> : <?= $score ?></td>
                </tr>
                <tr>
                    <td>Kategori Skill</td>
                    <td> : <?= $predikat ?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td> : <?= $email ?></td>
                </tr>
            </table>
        </div>
        <?php endif; ?>
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