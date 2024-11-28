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