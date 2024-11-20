<?php 
// cek apakah ada data di $_GET
if(!isset($_GET["nama"]) || !isset($_GET["nrp"]) || !isset($_GET["email"]) || !isset($_GET["jurusan"])) {
    header("Location: latihan1.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Selamat Datang, <?php echo $_GET["nama"]; ?></h1>
    <ul>
        <li><?php echo $_GET["nrp"]; ?></li>
        <li><?php echo $_GET["email"]; ?></li>
        <li><?php echo $_GET["jurusan"]; ?></li>

    </ul>
</body>
</html>