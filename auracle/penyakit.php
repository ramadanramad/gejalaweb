<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Penyakit</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f8f9fa;
            color: #333;
        }

        /* Navbar */
        .navbar {
            background-color: white;
            padding: 10px 20px;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .navbar .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar .logo {
            font-size: 1.5em;
            color: black;
            text-decoration: none;
        }

        .navbar .nav-links {
            list-style: none;
            display: flex;
            gap: 20px;
        }

        .navbar .nav-links li a {
            color: black;
            text-decoration: none;
            padding: 5px 10px;
            transition: background 0.3s ease;
        }

        .navbar .nav-links li a:hover {
            background-color: rgba(255, 255, 255, 0.3);
            border-radius: 5px;
        }

        /* Main Content Styles */
        main {
            padding: 20px;
        }

        main section {
            margin-bottom: 30px;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
             text-align: center; 
        }

        main section h1 {
            color: #4caf50;
            margin-bottom: 15px;
        }

        .disease-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .disease {
            background: #ffffff;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .disease:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .disease h2 {
            color: #4caf50;
            margin-bottom: 10px;
        }

        .disease p {
            color: #555;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="container">
            <a href="#" class="logo">Auracle</a>
            <ul class="nav-links">
                <li><a href="index.php">Beranda</a></li>
                <li><a href="penyakit.php">Data Penyakit</a></li>
                <li><a href="gejala.php">Data Gejala</a></li>
                <li><a href="konsultasi.php">Konsultasi</a></li>
                <li><a href="tentang.php">Tentang Aplikasi</a></li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        <section>
            <h1>Data Penyakit</h1>
            <p>Berikut adalah daftar penyakit yang dapat didiagnosis oleh sistem pakar kami:</p>

            <div class="disease-list">
                <div class="disease">
                    <h2>Otitis Eksterna</h2>
                    <p>Peradangan atau infeksi pada saluran telinga luar yang sering disebabkan oleh bakteri atau jamur.
                    </p>
                </div>
                <div class="disease">
                    <h2>Otitis Media</h2>
                    <p>Infeksi pada telinga tengah yang sering terjadi pada anak-anak dan dapat menyebabkan rasa sakit
                        serta gangguan pendengaran sementara.</p>
                </div>
                <div class="disease">
                    <h2>Otitis Interna</h2>
                    <p>Gangguan pada telinga dalam yang dapat memengaruhi keseimbangan dan pendengaran.</p>
                </div>
                <div class="disease">
                    <h2>Gendang Telinga Pecah</h2>
                    <p>Kerusakan atau robekan pada membran timpani yang dapat disebabkan oleh infeksi, trauma, atau
                        suara keras.</p>
                </div>
                <div class="disease">
                    <h2>Kolesteatoma</h2>
                    <p>Pertumbuhan jaringan abnormal di telinga tengah yang dapat merusak struktur telinga dan
                        menyebabkan komplikasi serius.</p>
                </div>
                <div class="disease">
                    <h2>Presbikusis</h2>
                    <p>Gangguan pendengaran yang terjadi akibat proses penuaan, biasanya memengaruhi frekuensi tinggi.
                    </p>
                </div>
            </div>
        </section>
    </main>
</html>