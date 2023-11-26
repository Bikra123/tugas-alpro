<?php
    session_start();

    require_once('function.php');

    UserFunction::rejectUser();
    UserFunction::logoutUser();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Sistem Pegawai</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="navbar">
        <h1>Dashboard</h1>
        <ul class="ul-navbar">
            <li>
                <form method="post">
                    <button type="submit" name="logout">Log Out</button>
                </form>
            </li>
            <li>
                <a href="pegawai.php">Data Pegawai</a>
            </li>
            <li>
                <a href="buatDatabase.php">Buat Database</a>
            </li>
            <li>
                <form method="post">
                    <button type="submit" name="balikDashboard">Dashboard</button>
                </form>
            </li>
        </ul>
    </div>

    <div class="container">
        <form action="buatDatabase.php" method="post">
            <button type="submit" name="buatDatabase">Buat Database</button>
        </form>
        <form action="pegawai.php" method="post">
            <button type="submit" name="pegawai">Data Pegawai</button>
        </form>
        
    </div>
</body>
</html>