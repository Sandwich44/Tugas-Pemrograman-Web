<?php

include("koneksi.php");
if (isset($_POST["btn-daftar"])) {
    $nama   = $_POST["nama"];
    $kelas  = $_POST["kelas"];
    $alamat = $_POST["alamat"];

    $sql = mysqli_query($conn,"INSERT INTO tbl_siswa(id,nama,kelas,alamat) VALUES('','$nama','$kelas','$alamat')");
    
    if ($sql) {
        header("location: index.php");
    }
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        .container{
            width: 35%;
        }
    </style>
</head>
<body>
    <div class="container">
        <h4 class="alert alert-primary fst text-center mt-5" role="alert">PENDAFTARAN SISWA BARU</h4>
        <form action="" method="post">
            <div class="form-group">
                <div class="row">
                        <label for="nama" class="fst col-sm-2">Nama</label>
                    <div class="col">
                        <input type="text" name="nama" id="nama" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group mt-3">
                <div class="row">
                        <label for="kelas" class="fst col-sm-2">Kelas</label>
                    <div class="col">
                        <input type="text" name="kelas" id="kelas" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group mt-3">
                <div class="row">
                        <label for="alamat" class="fst col-sm-2">Alamat</label>
                    <div class="col">
                        <textarea name="alamat" id="alamat" cols="10" rows="3" class="form-control"></textarea>
                    </div>
                </div>
            </div>
            <div class="form-group mt-3 gap-2 d-md-flex justify-content-md-end">
                <button type="submit" name="btn-daftar" class="btn btn-success fst" >DAFTAR</button>
                <button type="reset" class="btn btn-danger fst" >RESET</button>
            </div>
        </form>
    </div>
</body>
</html>