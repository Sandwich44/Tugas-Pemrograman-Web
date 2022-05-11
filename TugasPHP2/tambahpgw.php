<?php
include("connect.php");

//proses untuk tambah data
if (isset($_POST['daftar'])) {
    $id     = $_POST['idp'];
    $nama   = $_POST['nama'];
    $email  = $_POST['email'];
    $telp   = $_POST['telp'];
    $alamat = $_POST['alamat'];
    $idp    = $_POST['iddpt'];
    $idk    = $_POST['idkrj'];

    //query insert
    $sql = "INSERT INTO pegawai(id_pgw,nama_pgw,email_pgw,telp_pgw,alamat_pgw,id_kerja,id_departemen) VALUE ('$id','$nama','$email','$telp','$alamat','$idk','$idp')";

    $query = mysqli_query($conn,$sql);

    //cek query
    if( $query ) {
        header('Location: index.php?status=sukses');
    } else {
        header('Location: index.php?status=gagal');
    }
} else {
    die("Tombol Submit tidak di klik");
}

?>