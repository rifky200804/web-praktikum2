<?php
    require_once 'header.php';
    require_once 'sidebar.php';
    
    $harga = [
        "TV" => 4200000,
        "Kulkas" => 3100000,
        "Mesin Cuci" => 3800000
    ];

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
                    <h3 class="card-title">Praktikum 02</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <h1>Belanja Online</h1>
                            <hr>
                            <div class="container">
                                <form method="POST" action="">
                                    <div class="form-group row">
                                        <label for="customer" class="col-4 col-form-label">Customer</label> 
                                        <div class="col-8">
                                        <input id="customer" name="customer" placeholder="Nama Customer" value="<?php if(isset($_POST['customer'])){echo $_POST['customer'];} ?>" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-4">Pilih Produk</label> 
                                        <div class="col-8">
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV" <?php if(isset($_POST['produk']) && $_POST['produk'] == 'TV'){echo "checked";} ?>> 
                                            <label for="produk_0" class="custom-control-label">TV</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="Kulkas" <?php if(isset($_POST['produk']) && $_POST['produk'] == 'Kulkas'){echo "checked";} ?>> 
                                            <label for="produk_1" class="custom-control-label">Kulkas</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="Mesin Cuci" <?php if(isset($_POST['produk']) && $_POST['produk'] == 'Mesin Cuci'){echo "checked";} ?>> 
                                            <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
                                        <div class="col-8">
                                        <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" value="<?php if(isset($_POST['jumlah'])){echo $_POST['jumlah'];} ?>" class="form-control">
                                        </div>
                                    </div> 
                                    <div class="form-group row">
                                        <div class="offset-4 col-8">
                                            <button name="kirim" type="submit" class="btn btn-success">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <table class="table rounded table-bordered">
                                <thead>
                                    <tr class="bg-info">
                                        <td class="text-light">Daftar Harga</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>TV : 4.200.000</td>
                                    </tr>
                                    <tr>
                                        <td>Kulkas : 3.100.000</td>
                                    </tr>
                                    <tr>
                                        <td>Mesin Cuci : 3.800.000</td>
                                    </tr>
                                </tbody>
                                <tfooter>
                                    <tr class="bg-info">
                                        <td class="text-light">Harga Dapat Berubah Setiap Saat</td>
                                    </tr>
                                </tfooter>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <hr>
                            <?php if(isset($_POST['kirim'])) : ?>
                                Nama Customer : 
                                <?php if(!empty($_POST['customer'])){echo $_POST['customer'];}else{echo "-";} ?>
                                <br>
                                Produk Pilihan : 
                                <?php if(!empty($_POST['produk'])){echo $_POST['produk'];}else{echo "-";} ?>
                                <br>
                                Jumlah Beli :
                                <?php if(!empty($_POST['jumlah'])){echo $_POST['jumlah'];}else{echo 0;} ?>
                                <br>
                                Total Belanja : Rp. 
                                <?php 
                                    if(!empty($_POST['jumlah']) && !empty($_POST['produk'])){
                                        $harga = $harga[$_POST['produk']];
                                        $total = (int) $_POST['jumlah'] * $harga;
                                        echo number_format($total,2,",",".");
                                    }else{
                                        echo 0;
                                    } 
                                ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
</section>


<?php 
    require_once 'footer.php';
?>
    
