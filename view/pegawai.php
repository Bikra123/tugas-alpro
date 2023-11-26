<?php
session_start();

require_once('function.php');

$listDBPegawai = '../database/db_pegawai/';

UserFunction::rejectUser();
Fiture::balikDashboard();
Pegawai::validasiTambahDataPegawai($listDBPegawai);
Pegawai::hapusDataPegawai($listDBPegawai);
UserFunction::rejectUser();
UserFunction::logoutUser();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Pegawai</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="navbar">
        <h1>Data Pegawai</h1>
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
    <div class="container-data-pegawai">
        <div class="cari-data-nik">
            <form method="post">
                <label for="cariData">Cari Data Pegawai Berdasarkan NIK</label>
                <input type="number" name="cariData" placeholder="Masukkan NIK Pegawai">
                <button type="submit" name="submitCariDataPegawai">Cari Data!</button>
            </form>
            <div class="tampil-data">
                <?php
                DatabaseFunction::tampilDBPegawai($listDBPegawai);
                ?>
                <?php
                Pegawai::ubahDataPegawai($listDBPegawai);
                Pegawai::detailDataPegawai($listDBPegawai);
                Pegawai::cariDataPegawai($listDBPegawai);
                ?>
            </div>
        </div>
        <div class="container-bawah">
            <div class="pilih-data">
                <form method="post">
                    <select name="pilihDatabase">
                        <option value="default" disabled <?= empty($_SESSION['selectedDatabase']) ? 'selected' : null; ?>>List Database Pegawai</option>
                        <?php DatabaseFunction::tampilDBSelect($listDBPegawai); ?>
                    </select>
                    <button type="submit" name="submitPilihanDB">Pilih Database!</button>
                </form>
                <form method="post">
                    <button type="submit" name="tambahDataPegawai">Tambah Data Pegawai</button>
                </form>
            </div>
            <?php
            $tampilForm = isset($_POST['tambahDataPegawai']);
            if ($tampilForm) :
            ?>
                <div class="tambah-data-pegawai">
                    <h3>Tambah Data Pegawai</h3>
                    <form method="post">
                        <input type="number" name="nik" placeholder="NIK" required>
                        <input type="text" name="nama" placeholder="Nama" required>
                        <textarea name="alamat" placeholder="Alamat" required></textarea>
                        <input type="text" name="unit" placeholder="Unit" required>
                        <h3>Golongan</h3>
                        <div class="golongan">
                        <input type="radio" name="golongan" value="IV-A">
                        <label for="IV-A">IV-A</label>
                        </div>
                        <div class="golongan">
                        <input type="radio" name="golongan" value="IV-B">
                        <label for="IV-B">IV-B</label>
                        </div>
                        <div class="golongan">
                        <input type="radio" name="golongan" value="IV-C">
                        <label for="IV-C">IV-C</label>
                        </div>
                        <div class="golongan">
                        <input type="radio" name="golongan" value="III-A">
                        <label for="III-A">III-A</label>
                        </div>
                        <div class="golongan">
                        <input type="radio" name="golongan" value="III-B">
                        <label for="III-B">III-B</label>
                        </div>
                        <div class="golongan">
                        <input type="radio" name="golongan" value="III-C">
                        <label for="III-C">III-C</label>
                        </div>
                        <input type="number" name="jumlahAnak" placeholder="Jumlah Anak" required>
                        <input type="number" name="masuk" placeholder="Jumlah Hari Masuk (Selain Sabtu dan Minggu)" required>
                        <input type="number" name="jamKerja" placeholder="Jam Kerja" required>
                        <button type="submit" name="submitDataPegawai">Kirim Data Pegawai!</button>
                    </form>
                </div>

        </div>
                
            <?php endif; ?>
    </div>




</body>

</html>