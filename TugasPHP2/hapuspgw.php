<?php
include("connect.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    //query hapus
    $sql = "DELETE FROM pegawai WHERE id_pgw = $id";
    $query = mysqli_query($conn,$sql);

    //cek query
    if( $query ){
        header('Location: dataPegawai.php');
    } else {
        die("gagal menghapus...");
    }
}

?>