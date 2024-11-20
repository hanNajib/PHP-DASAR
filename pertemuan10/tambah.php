<?php 

$conn = mysqli_connect("localhost", "root", "", "phpdasar");

if(isset($_POST["submit"])) {
    $nama = $_POST["nama"];
    $nrp = $_POST["nrp"];
    $email = $_POST["email"];
    $jurusan = $_POST["jurusan"];
    $gambar = $_POST["gambar"];

    //query insert data
    $query = "INSERT INTO mahasiswa VALUES (null,'$nama','$nrp','$email','$jurusan','$gambar')";
    mysqli_query($conn, $query);
    // cek apakah data berhasil di tambahkan atau tidak
    var_dump(mysqli_affected_rows($conn));
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

    <form action="tambah.php" method="POST">

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
            <button type="submit">Kirim</button> 
        </li>
    </ul>

    </form>
</body>
</html>