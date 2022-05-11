<!DOCTYPE html>
<html>
<head>
    <title>PROGRAM KEPEGAWAIAN</title>
</head>
<body>
    <header>
        <h1>Sistem Informasi Kepegawaian</h1>
    </header>
    <form action="tambahpgw.php" method = "post">
        <fieldset>
            <table>
                <tr>
                <td><label for="idp">ID Pegawai  </label></td>
                <td><input type="text" name = "idp" placeholder = "ID Kepegawain"></td>
                </tr>
                <tr>
                <td><label for="iddpt">ID Departemen  </label></td>
                <td><select name="iddpt" >
                    <option>A1</option>
                    <option>A2</option>
                    <option>A3</option>
                    <option>A4</option>
                    <option>A5</option>
                </select></td>
                </tr>
                <tr>
                <td><label for="idkrj">ID Pekerjaan</label></td>
                <td><select name="idkrj" >
                    <option>AB1</option>
                    <option>AB2</option>
                    <option>AB3</option>
                    <option>AB4</option>
                    <option>AB5</option>
                </select></td>
                </tr>
                <tr>
                <td><label for="nama">Nama</label></td>
                <td><input type="text" name = "nama" placeholder = "Masukkan Nama Lengkap"></td>
                </tr>
                <tr>
                <td><label for="email">Email</label></td>
                <td><input type="text" name = "email" placeholder = "abc@email"></td>
                </tr>
                <tr>
                <td><label for="telp">No Telepon</label></td>
                <td><input type="text" name = "telp" placeholder = "08xxxxxxxxxx"></td>
                </tr>
                <tr>
                <td><label for="alamat">Alamat</label></td>
                <td><textarea name="alamat" cols="21" rows="10"></textarea></td>
                </tr>
            </table>
            <input type="submit" value = "Daftar" name = "daftar">
        </fieldset>
    </form>
</body>
</html>