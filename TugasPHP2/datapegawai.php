<?php
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>PROGRAM KEPEGAWAIAN</title>
</head>
<body>
    <header>
        <h1>Sistem Informasi Kepegawaian</h1>
        <h4>Daftar Data Pegawai</h4>
    </header>
    <nav>
        <a href="formtambahpgw.php">Tambah Baru</a>
    </nav>
    <br>

    <table border = "1px">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Telpon</th>
                <th>Alamat</th>
                <th>ID Departemen</th>
                <th>ID Kerja</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM pegawai";
            $query = mysqli_query($conn,$sql);

            while ($pegawai = mysqli_fetch_array($query)) {
                echo "<tr>";
                echo "<td>".$pegawai['id_pgw']."</td>";
                echo "<td>".$pegawai['nama_pgw']."</td>";
                echo "<td>".$pegawai['email_pgw']."</td>";
                echo "<td>".$pegawai['telp_pgw']."</td>";
                echo "<td>".$pegawai['alamat_pgw']."</td>";
                echo "<td>".$pegawai['id_departemen']."</td>";
                echo "<td>".$pegawai['id_kerja']."</td>";
                echo "<td align = 'center'><a href='formeditpgw.php?id=".$pegawai['id_pgw']."'>Edit</a> | <a href='hapuspgw.php?id=".$pegawai['id_pgw']."'>Hapus</a></td>"; 
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <p>Total : <?php echo mysqli_num_rows($query)?></p>
</body>
</html>