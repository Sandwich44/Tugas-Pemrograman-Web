<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=,, initial-scale=1.0">
    <title>Form Login</title>
</head>
<body>
    <form action="data.php" method="post">
        <table>
            <tr>
                    <td width = "100">Nama</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td width = "100">Email</td>
                    <td><input type="text" name="email"></td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="btnLogin" value="Login">
                        <input type="reset" name="btnReset" value="Reset">
                    </td>
                </tr>
        </table>
    </form>
</body>