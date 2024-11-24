<?php 

$conn = mysqli_connect("localhost", "root", "", "phpdasar");
require 'function.php';

if( isset($_POST["submit"]) ) {
    if(tambah($_POST) > 0) {
        echo "<script>
                alert('Data Berhasil Ditambahkan');
                document.location.href = 'index.php';
            </script>";
    } else {
        echo "<script>
                alert('Data Gagal Ditambahkan');
                document.location.href = 'index.php';
            </script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <h1>Tambah Data</h1>

    <form action="" method="POST">

    <ul>
        <li>
            <label for="nama">Nama :</label>
            <input type="text" name="nama">
        </li>
        <li>
            <label for="nrp">NRP :</label>
            <input type="text" name="nrp">
        </li>
        <li>
            <label for="email">Email :</label>
            <input type="email" name="email">
        </li>
        <li>
            <label for="jurusan">Jurusan :</label>
            <input type="text" name="jurusan">
        </li>
        <li>
            <label for="gambar">Gambar</label>
            <input type="text" name="gambar"> <br> <br>
        </li>
        <li>
            <button type="submit" name="submit">Kirim</button> 
        </li>
    </ul>

    </form>
</body>
</html>