<?php
include("connect.php");

//cek id dari form data pegawai
if (!isset($_GET['id'])) {
    header('Location: dataPegawai.php');
}

$id = $_GET['id'];

//ambil data berdasarkan id
$sql = "SELECT * FROM pegawai WHERE id_pgw = $id";
$query = mysqli_query($conn,$sql);
$pegawai = mysqli_fetch_assoc($query);

//cek datanya
if (mysqli_num_rows($query) < 1) {
    die("Data Tidak Ditemukan");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>PROGRAM KEPEGAWAIAN</title>
</head>
<body>
    <header>
        <h1>Sistem Informasi Kepegawaian</h1>
    </header>
    <form action="editpgw.php" method = "post">
        <fieldset>
        <table>
                <tr>
                <td><label for="idp">ID Pegawai</label></td>
                <td><input type="text" name = "idp" placeholder = "ID Kepegawain" value="<?php echo $pegawai['id_pgw'] ?> " ></td>
                </tr>
                <tr>
                <td><label for="iddpt">ID Departemen</label></td>
                <td><input type="text" name = "iddpt" placeholder = "ID Departemen" value="<?php echo $pegawai['id_departemen'] ?> " ></td>
                </tr>
                <tr>
                <td><label for="idkrj">ID Pekerjaan</label></td>
                <td><input type="text" name = "idkrj" placeholder = "ID Kerja" value="<?php echo $pegawai['id_kerja'] ?> " ></td>
                </tr>
                <tr>
                <td><label for="nama">Nama</label></td>
                <td><input type="text" name = "nama" placeholder = "Nama Lengkap" value="<?php echo $pegawai['nama_pgw'] ?>"></td>
                </tr>
                <tr>
                <td><label for="email">Email</label></td>
                <td><input type="text" name = "email" placeholder = "Email" value="<?php echo $pegawai['email_pgw'] ?>"></td>
                </tr>
                <tr>
                <td><label for="telp">No Telepon</label></td>
                <td><input type="text" name = "telp" placeholder = "No Telepon" value="<?php echo $pegawai['telp_pgw'] ?>"></td>
                <tr>
                <td><label for="alamat">Alamat</label></td>
                <td><textarea name="alamat" cols="21" rows="10"><?php echo $pegawai['alamat_pgw']?></textarea></td>
                <tr>
                </tr>
            </table>
            <input type="submit" value="Simpan" name="update">
        </fieldset>
    </form>
</body>
</html>