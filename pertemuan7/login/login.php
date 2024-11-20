<?php 
// cek apakah tombol submit sudah ditekan atau belum
if(isset($_POST["submit"])) {
    // cek username dan password
    if($_POST["username"] == "admin" && $_POST["password"] == "123") {
        // jikka username dan password benar, redirect ke halaman admin
        header("Location: admin.php");
        exit;
    }
} else {
    $error = true;
    // jika salah tampilkan pesan kesalahan
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login Atmin</h1>

    <ul>
        <?php if(!isset($error)) : ?>
            <p>username / password salah</p>
        <?php endif; ?>
        <form action="" method="post">
            <li>
                <label for="username">username</label>
                <input type="text" name="username">
            </li>
            <li>
                <label for="password">password</label>
                <input type="password" name="password">
            </li>
            <button type="submit" name="submit">Login</button>
        </form>
    </ul>
</body>
</html>