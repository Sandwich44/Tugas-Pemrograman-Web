<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-
scale=1.0">

<title>Program Buku Tamu</title>
</head>
<body>
<h1>Membuat Database Buku Tamu</h1>
<?php
$host = "localhost";
$username = "root";
$pw = "";
$dbname = "my_db";
//membuat koneksi db
$conn = mysqli_connect($host,$username,$pw,$dbname);
//cek koneksi db
if (!$conn) {
die("Connection Failed : ".mysqli_connect_error());
}

$squery = "CREATE TABLE `my_db`.`bukutamu` ( `ID_BT` INT(10)
NOT NULL , `NAMA` VARCHAR(200) NOT NULL , `EMAIL` VARCHAR(50) NOT
NULL , `ISI` TEXT NOT NULL ) ENGINE = InnoDB;";
if (mysqli_query($conn,$squery)) {
echo "New Table 'bukutamu' created successfully";
} else {
echo "Error : ".$squery."<br>".mysqli_error($conn);
}
mysqli_close($conn);
?>

</body>
</html>