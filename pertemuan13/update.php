<?php 

$conn = mysqli_connect("localhost", "root", "", "phpdasar");
require 'function.php';

$id = $_GET["id"];

$mahasiswa = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

if( isset($_POST["submit"]) ) {
    if(update($_POST, $id) > 0) {
        echo "<script>
                alert('Data Berhasil Diubah');
                document.location.href = 'index.php';
            </script>";
    } else {
        echo "<script>
                alert('Data Gagal Diubah');
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
    <h1>Ubah Data</h1>

    <form action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $mahasiswa["id"]; ?>">
        <input type="hidden" name="gambarLama" value="<?= $mahasiswa["gambar"]; ?>">">
    <ul>
        <li>
            <label for="nama">Nama :</label>
            <input type="text" name="nama" value="<?= $mahasiswa["nama"]; ?>">
        </li>
        <li>
            <label for="nrp">NRP :</label>
            <input type="text" name="nrp" value="<?= $mahasiswa["nrp"]; ?>">
        </li>
        <li>
            <label for="email">Email :</label>
            <input type="email" name="email" value="<?= $mahasiswa["email"]; ?>">
        </li>
        <li>
            <label for="jurusan">Jurusan :</label>
            <input type="text" name="jurusan" value="<?= $mahasiswa["jurusan"]; ?>">
        </li>
        <li>
            <label for="gambar">Gambar</label><br>
            <img src="img/<?= $mahasiswa["gambar"]; ?>" alt="" width="100px"><br>
            <input type="file" name="gambar" value="<?= $mahasiswa["gambar"]; ?>"> <br> <br>
        </li>
        <li>
            <button type="submit" name="submit">Ubah Data</button> 
        </li>
    </ul>

    </form>
</body>
</html>