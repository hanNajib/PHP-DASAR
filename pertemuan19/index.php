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
        /* General Styles */
body {
    font-family: Arial, sans-serif;
    background-color: #f8f9fa;
    color: #343a40;
    margin: 0;
    padding: 20px;
}

h1 {
    text-align: center;
    color: #007bff;
}

/* Links and Buttons */
a {
    text-decoration: none;
    color: #fff;
    background-color: #007bff;
    padding: 8px 12px;
    border-radius: 5px;
    transition: background-color 0.3s;
}

a:hover {
    background-color: #0056b3;
}

/* Table Styling */
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    background-color: #ffffff;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
}

th, td {
    text-align: left;
    padding: 12px;
    border: 1px solid #dee2e6;
}

th {
    background-color: #007bff;
    color: #ffffff;
    text-transform: uppercase;
}

tr:nth-child(even) {
    background-color: #f8f9fa;
}

tr:hover {
    background-color: #e9ecef;
}

/* Form Styling */
form {
    display: flex;
    justify-content: center;
    margin-bottom: 20px;
    gap: 10px;
}

input[type="text"] {
    width: 300px;
    padding: 8px 10px;
    border: 1px solid #ced4da;
    border-radius: 4px;
}

button {
    padding: 8px 16px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
}

button:hover {
    background-color: #0056b3;
}

/* Loader */
.loader {
    width: 40px;
    display: none;
}

/* Media Queries */
@media (max-width: 768px) {
    table {
        font-size: 14px;
    }

    th, td {
        padding: 8px;
    }

    form {
        flex-direction: column;
        align-items: center;
    }

    input[type="text"] {
        width: 90%;
    }
}

    </style>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <a href="tambah.php">Tambah Data</a><br><br>
    <a href="logout.php">Logout</a>

    <form action="" method="post">
        <input type="text" name="keyword" size="40" placeholder="Masukkan keyword pencarian" autocomplete="off" id="keyword">
        <button type="submit" name="cari" id="tombol-cari">Cari</button>
    </form>

    <div class="container" id="container">
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
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
            <td>
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

<script src="./js/script.js"></script>
</body>
</html>