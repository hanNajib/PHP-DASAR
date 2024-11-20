<?php 
$mahasiswa1 = [
    ['Royhan Najib', '00711401911', 'Teknik Informatika', 'Email'],
    ['Royhan Najib', '00711401911', 'Teknik Informatika', 'Email'],
    ['Royhan Najib', '00711401911', 'Teknik Informatika', 'Email'],
];

// array assosiatif
// definisi nya sama seperti array numerik
// key nya adalah string yang kita buat sendiri

$mahasiswa = [
    [
        "nama" => "Royhan Najib",
        "nrp" => "00711401911",
        "email" => "Email",
        "jurusan" => ["Teknik Informatika"]
    ],
    [
        "nama" => "Royhan Najib",
        "nrp" => "00711401911",
        "email" => "Email",
        "jurusan" => ["Teknik Informatika", "Teknik Komputer"]
    ]
    ];

echo $mahasiswa[1]["jurusan"][1];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa1 as $mhs) : ?>
        <ul>
            <?php foreach ($mhs as $m) : ?>
                <li><?= $m; ?></li>
            <?php endforeach ?>
        </ul>
    <?php endforeach ?>

    <h1>Daftar Mahasiswa Asosiatif</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li><?= $mhs["nama"]; ?></li>
            <li><?= $mhs["nrp"]; ?></li>
            <li><?= $mhs["email"]; ?></li>
            <li><?= $mhs["jurusan"][0]; ?></li>
        </ul>
    <?php endforeach ?>
</body>
</html>