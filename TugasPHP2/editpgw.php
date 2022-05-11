<?php
include("connect.php");

//proses untuk update data
if (isset($_POST['update'])) {
    $id     = $_POST['idp'];
    $nama   = $_POST['nama'];
    $email  = $_POST['email'];
    $telp   = $_POST['telp'];
    $alamat = $_POST['alamat'];
    $idp    = $_POST['iddpt'];
    $idk    = $_POST['idkrj'];

    //query insert
    $sql = "UPDATE pegawai SET nama_pgw='$nama',email_pgw='$email',telp_pgw='$telp',alamat_pgw='$alamat' WHERE id_pgw=$id";

    $query = mysqli_query($conn,$sql);

    //cek query
    if( $query ) {
        header('Location: datapegawai.php');
    } else {
       die("Gagal Menyimpan Data");
    }
} else {
    die("Tombol Simpan tidak di klik");
}

?>