<?php 

function salam($nama = 'Admin', $waktu = 'Datang') {
    return "Selamat $waktu, $nama";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>
<body>
    <h1><?php echo salam('hanNajib', 'Siang'); ?></h1>
</body>
</html>