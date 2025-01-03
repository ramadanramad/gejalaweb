<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Gejala</title>
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
            padding: 40px 20px;
        }

        main section {
            margin-bottom: 40px;
            padding: 30px;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        main section h1 {
            color: #4caf50;
            margin-bottom: 25px;
            font-size: 2em;
        }

        /* Modern List Styles */
        ul.gejala-list {
            list-style-type: none;
            padding-left: 0;
            font-size: 1.1em;
            font-weight: 400;
            color: #333;
        }

        ul.gejala-list li {
            padding: 12px 20px;
            margin-bottom: 15px;
            background: #ffffff;
            border-left: 5px solid #4caf50;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: flex-start;
        }

        ul.gejala-list li:hover {
            background-color: #f4f7f7;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
            transform: translateX(5px);
        }

        /* Icon styles */
        .gejala-list li span {
            font-size: 1.2em;
            margin-right: 15px;
        }

        .gejala-list li:last-child {
            margin-bottom: 0;
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
            <h1>Data Gejala</h1>
            <ul class="gejala-list">
                <li><span>Gatal pada liang telinga</span></li>
                <li><span>Sakit saat telinga disentuh atau ditarik</span></li>
                <li><span>Keluar cairan bening pada telinga</span></li>
                <li><span>Keluar cairan berwarna kuning atau bening dan berbau</span></li>
                <li><span>Gangguan pendengaran</span></li>
                <li><span>Telinga terasa penuh atau tersumbat</span></li>
                <li><span>Demam</span></li>
                <li><span>Benjolan di leher atau sekitar telinga</span></li>
                <li><span>Vertigo dan pusing</span></li>
                <li><span>Telinga berdenging</span></li>
                <li><span>Nyeri Telinga</span></li>
                <li><span>Demam disertai pilek</span></li>
            </ul>
        </section>
    </main>
</body>

</html>
