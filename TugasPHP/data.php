<?php
$nama = $_POST['nama'];
$email = $_POST['email'];
include "savedata.php";
if (empty($nama) || empty($email)){
    header('Location: display.php');
} else {
    echo "Nama : $nama"."<br>";
    echo "Email : $email"."<br>";
    echo"----------------------------------
    "."<br>";
    echo "Terakhir Login : $waktu $tanggal";
}
?>