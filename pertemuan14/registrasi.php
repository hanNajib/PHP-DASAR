<?php 
require 'function.php';
if(isset($_POST["register"])) {
    
    if(register($_POST) > 0) {
        echo "<script>
                alert('User Berhasil Ditambahkan');
             </script>";
    } else {
        echo mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h1>Halaman Registrasi</h1>

    <form action="" method="post" >
        <ul>
            <li>
                <label for="username">Username :</label><br>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password :</label><br>
                <input type="text" name="password" id="password">
            </li>
            <li>
                <label for="password2">Confirm Password :</label><br>
                <input type="text" name="password2" id="password2">
            </li>
            <li>
                <button type="submit" name="register">Register</button>
            </li>

        </ul>

    </form>
</body>
</html>