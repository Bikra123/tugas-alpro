<?php
    session_start();

    require_once('function.php');

    UserFunction::loginUser();

    if(isset($_SESSION['user'])) {
        header('Location: ./dashboard.php');
        die();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Sistem Pegawai</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header-login">
        <h1 style="text-align: center;">Selamat Datang di <span>Abonsura</span> Factory!!</h1>
    </div>

    <div class="login-page">
        <form method="post">
            <h1>Abonsura</h1>
            <input type="text" name="username" placeholder="Masukkan Username" required>
            <input type="password" name="password" placeholder="Masukkan Password" required>
            <button type="submit" name="submitLogin">Login!</button>
        </form>
    </div>
    
</body>
</html>