<?php 
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
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li><?php echo $mhs[0]; ?></li>
            <li><?php echo $mhs[1]; ?></li>
            <li><?php echo $mhs[2]; ?></li>
            <li><?php echo $mhs[3]; ?></li>
        </ul>
    <?php endforeach ?>
</body>
</html>