<?php
    require_once 'header.php';
    require_once 'sidebar.php';
    
    $nilaiSkill = [
        'HTML'=>10,
        "CSS"=>10,
        "Javascript"=>20,
        "RWD Bootstrap"=>20,
        "PHP"=>30,
        "Python"=>30,
        "Java"=>50
    ];
    $domisilis = ['Jakarta','Bogor','Depok','Tanggerang','Bekasi','Lainnya'];
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
                    <h3 class="card-title">Praktikum 03</h3>
                </div>
                <div class="card-body">
                    <h1>Form Registrasi IT Club Data Science</h1>
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
                                <input id="nim" name="nim" type="text" class="form-control" value="<?php if(isset($_POST['nim'])){echo $_POST['nim'];} ?>">
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
                                <input id="nama_lengkap" name="nama_lengkap" type="text" class="form-control" value="<?php if(isset($_POST['nama_lengkap'])){echo $_POST['nama_lengkap'];} ?>">
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
                                    <input name="skill[]" id="skill[]_<?php echo $no; ?>" type="checkbox" class="custom-control-input" value="<?php echo $skill ?>" <?php if(isset($_POST['skill'])){if(in_array($skill,$_POST['skill'])){echo "checked";}}?>> 
                                    <label for="skill[]_<?php echo $no; ?>" class="custom-control-label"><?php echo $skill ?></label>
                                </div>
                                <?php 
                                    $no++;
                                    endforeach; 
                                ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="domisili" class="col-4 col-form-label">Domisili</label> 
                            <div class="col-8">
                            <select id="domisili" name="domisili" class="custom-select">
                                <?php foreach($domisilis as $domisili) : ?>
                                <option value="<?php echo $domisili ?>" <?php if(isset($_POST['domisili']) && $_POST['domisili'] == $domisili){echo "selected";} ?>><?php echo $domisili ?></option>
                                <?php endforeach; ?>
                            </select>
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
                                <input id="email" name="email" type="text" class="form-control" value="<?php if(isset($_POST['email'])){echo $_POST['email'];} ?>">
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
                        $domisili = isset($_POST['domisili']) && $_POST['domisili'] != NULL ? $_POST['domisili'] : "-";
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
                                <td>Domisili</td>
                                <td> : <?= $domisili ?></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td> : <?= $email ?></td>
                            </tr>
                        </table>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
</section>


<?php 
    require_once 'footer.php';
?>
    
