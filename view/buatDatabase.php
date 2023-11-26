<?php
session_start();

require_once('function.php');

UserFunction::rejectUser();
Fiture::balikDashboard();
UserFunction::rejectUser();
UserFunction::logoutUser();

$listDBPegawai = '../database/db_pegawai/';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Pegawai</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="navbar">
        <h1>Buat Database</h1>
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
    <div class="submit-database">
        <div class="submit-database1">
            <form method="post">
                <input type="text" name="namaDatabasePegawai" placeholder="Masukkan Nama Database" required>
                <button type="submit" name="submitNamaDatabasePegawai">Buat Database!</button>
            </form>
        </div>
        <div class="submit-database2">
            <?php
            DatabaseFunction::buatDB();
            DatabaseFunction::hapusDB($listDBPegawai);
            DatabaseFunction::tampiltDB($listDBPegawai);
            ?>
        </div>


    </div>
</body>

</html>