<?php
$host   = "localhost";
$user   = "root";
$pass   = "";
$dbname = "pemweb_pegawai";

$conn = mysqli_connect($host,$user,$pass,$dbname);

if (!$conn) {
    die("Gagal Terhubung dengan database ".$dbname.mysqli_connect_error());
}else {
    echo "Database : ".$dbname." : Berhasil Terhubung";
}
?>