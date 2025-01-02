<?php
include 'koneksi.php';

$query = "SELECT * FROM gejala";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda - Auracle</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="container">
            <a href="#" class="logo">Auracle</a>
            <ul class="nav-links">
                <li><a href="beranda.php">Beranda</a></li>
                <li><a href="penyakit.php">Data Penyakit</a></li>
                <li><a href="gejala.php">Data Gejala</a></li>
                <li><a href="konsultasi.php">Konsultasi</a></li>
                <li><a href="tentang.php">Tentang Aplikasi</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1>Selamat Datang di Website Auracle</h1>
            <p>Solusi kesehatan terbaik untuk Anda. Temukan layanan kami yang profesional dan terpercaya.</p>
            <a href="konsultasi.php" class="btn">Mulai Konsultasi</a>
        </div>
    </section>

</body>
</html>
