<?php 
// // Variabel scope / lingkup variabel
// $x = 10;
// function tampilX() {
//     $x = 20;
//     echo $x;
// }
// tampilX();
// echo $x;

//SUPERGLOBALS
// variabel global milik php
// Merupakan array asosiatif
// $_GET, $_POST, $_REQUEST, $_SESSION, $_COOKIE, $_SERVER, $_ENV
// var_dump($_GET);

$mahasiswa = [
    ['Royhan Najib', '00711401911', 'Teknik Informatika', 'Email'],
    ['Royhan Najib', '00711401911', 'Teknik Informatika', 'Email'],
    ['Royhan Najib', '00711401911', 'Teknik Informatika', 'Email'],
    ['Royhan Najib', '00711401911', 'Teknik Informatika', 'Email']
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
               <a href="latihan2.php?nama=<?= $mhs[0]; ?>&nrp=<?= $mhs[1]; ?>&email=<?= $mhs[2]; ?>&jurusan=<?= $mhs[3]; ?>"><?php echo $mhs[0]; ?></a>
            </li>
        </ul>
    <?php endforeach ?>
</body>
</html>