<!DOCTYPE html>

<html lang="en">
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Form Belanja</title>
        
        <style>
            body{
                margin-top: 50px;
                margin-right: 50px;
                margin-left: 50px;
                color: #004d4d;
            }
            form{
                margin-right: 50px;
                margin-left: 50px;
            }
            th{
                text-align: center;
                background-color: #0065b1;
            }
            h3{
                text-align: center;
                color: #004d4d;
            }
        </style>
    </head> 

    <body>
        <h3>BELANJA ONLINE</h3>
        <hr/><br/>
        <form action="form_belanja.php" method="POST">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group row">
                            <label for="customer" class="col-4 col-form-label"><b>Customer</b></label> 
                            <div class="col-8">
                            <div class="input-group">
                                <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control">
                            </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-4"><b>Pilih Poduk</b></label> 
                            <div class="col-8">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV"> 
                                <label for="produk_0" class="custom-control-label">TV</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="Kulkas"> 
                                <label for="produk_1" class="custom-control-label">Kulkas</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="Mesin Cuci"> 
                                <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
                            </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jumlah" class="col-4 col-form-label"><b>Jumlah</b></label> 
                            <div class="col-8">
                            <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
                            </div>
                        </div> 
                        <div class="form-group row">
                            <div class="offset-4 col-8">
                            <button name="submit" type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                    </div>
                    <div class="col-md-4">
                    <table class="table table-bordered">
                        <thead class="btn-primary">
                            <tr>
                                <th scope="col">Daftar Harga</th>
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
                        <tfoot class="btn-primary">
                            <tr>
                                <th scope="col">Harga Dapat Berubah Setiap Saat</th>
                            </tr>
                        </tfoot>
                    </table>
                    </div>
                </div>
            </div>
        </form>
        <br/><hr/>
        <hr/><br/>

        <?php
            $_nama = $_POST['customer'];
            $_produk = $_POST['produk'];
            $_jumlah = $_POST['jumlah'];

            if($_produk == "TV"){
                $produk = 4200000;
            }elseif($_produk == "Kulkas"){
                $produk = 3100000;
            }elseif($_produk == "Mesin Cuci"){
                $produk = 3800000;
            }

            echo 'Nama Customer : '. $_nama;
            echo '<br/>Produk Pilihan : '. $_produk;
            echo '<br/>Jumlah Beli : '. $_jumlah;
            echo '<br/>Total Belanja : Rp. '. $_jumlah*$produk. ',-';
        ?>
        <br/><br/><hr/>
    </body>
</html>



