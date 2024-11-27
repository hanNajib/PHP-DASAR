<?php 
// koneksi ke database
require 'function.php';

if(!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

// ambil data dari table mahasiswa / query data mahasiswa
$mahasiswa = query("SELECT * FROM mahasiswa ORDER BY id ASC");

//tombol cari ditekan
if(isset($_POST["cari"])) {
    $mahasiswa = cari($_POST["keyword"]);
}

// ambil data (fetch) mahasiswa dari object result
// mysqli_fetch_row() = mengembalikan array numerik
// mysqli_fetch_assoc() = mengembalikan array assosiatif
// mysqli_fetch_object() = mengembalikan object
// mysqli_fetch_array()

// while($mhs = mysqli_fetch_array($result)) {
//     var_dump($mhs);
// }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <style>
        .loader{
            width: 60px;
            position: absolute;
            top: 100px;
            left: 340px;
            display: none;
        }

        @media print {
            .logout, .tambah, .form-cari, .aksi {
                display: none;
            }
        }
    </style>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <a href="tambah.php" class="tambah">Tambah Data</a><br><br>
    <a href="logout.php" class="logout">Logout</a> | <a href="print.php" target="_blank">Cetak</a>

    <form action="" method="post" class="form-cari">
        <input type="text" name="keyword" size="40" autofocus placeholder="Masukkan keyword pencarian" autocomplete="off" id="keyword">
        <button type="submit" name="cari" id="tombol-cari">Cari</button>
        <img src="./img/loader.gif" alt="" class="loader">
    </form>

    <div class="container" id="container">
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th class="aksi">Aksi</th>
            <th>Gambar</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>
    <?php $i = 1 ?>
    <?php foreach($mahasiswa as $row) : ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td class="aksi">
                <a href="update.php?id=<?php echo $row["id"]; ?>">ubah</a>
                <a href="hapus.php?id=<?php echo $row["id"]; ?>" onclick="return confirm('Yakin?');">hapus</a>
            </td>
            <td><img src="img/<?php echo $row["gambar"]; ?>" alt="" width="100px"></td>
            <td><?php echo $row["nrp"]; ?></td>
            <td><?php echo $row["nama"]; ?></td>
            <td><?php echo $row["email"]; ?></td>
            <td><?php echo $row["jurusan"]; ?></td>
            <?php $i++ ?>
        </tr>
    <?php endforeach; ?>
    </table>
    </div>

<script src="./js/jquery-3.7.1.min.js"></script>
<script src="./js/script.js"></script>
</body>
</html>