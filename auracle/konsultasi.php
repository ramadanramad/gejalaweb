<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konsultasi</title>
    <link rel="stylesheet" href="konsul.css">
    <script>
        function showPenyakit() {
            const gejala = document.querySelectorAll('input[name="gejala[]"]:checked');
            const gejalaArray = Array.from(gejala).map(input => input.value);

            const penyakitGejala = {
                'P01': { nama: "Otitis Eksterna", gejala: ['G01', 'G02', 'G03', 'G05', 'G06', 'G11'] },
                'P02': { nama: "Otitis Media", gejala: ['G04', 'G05', 'G07', 'G08', 'G10'] },
                'P03': { nama: "Otitis Interna", gejala: ['G05', 'G09', 'G10'] },
                'P04': { nama: "Gendang Telinga Pecah", gejala: ['G05', 'G09', 'G10', 'G11'] },
                'P05': { nama: "Kolesteatoma", gejala: ['G04', 'G06', 'G11'] },
                'P06': { nama: "Presbikusis", gejala: ['G05', 'G04'] }
            };

            let hasilPenyakit = [];

            if (gejalaArray.includes("G05") && gejalaArray.includes("G09") && gejalaArray.includes("G10") && gejalaArray.includes("G11")) {
                hasilPenyakit.push("Gendang Telinga Pecah");
            } else {
                for (let kodePenyakit in penyakitGejala) {
                    let penyakit = penyakitGejala[kodePenyakit];
                    let matchingGejala = gejalaArray.filter(g => penyakit.gejala.includes(g)).length;
                    if (matchingGejala === penyakit.gejala.length) {
                        hasilPenyakit.push(penyakit.nama);
                    }
                }
            }

            document.getElementById('penyakitResult').innerHTML = hasilPenyakit.length > 0 
                ? 'Penyakit yang mungkin: ' + hasilPenyakit.join(', ') 
                : 'Tidak ada penyakit yang cocok berdasarkan gejala yang dipilih.';
        }
    </script>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="container">
            <a href="index.php" class="logo">Auracle</a>
            <ul class="nav-links">
                <li><a href="index.php">Beranda</a></li>
                <li><a href="penyakit.php">Data Penyakit</a></li>
                <li><a href="gejala.php">Data Gejala</a></li>
                <li><a href="konsultasi.php" class="active">Konsultasi</a></li>
                <li><a href="tentang.php">Tentang Aplikasi</a></li>
            </ul>
        </div>
    </nav>

    <!-- Konten Halaman Konsultasi -->
    <section class="consultation">
        <h1>Konsultasi</h1>
        <form action="proses_konsultasi.php" method="POST">
            <h3>Pilih Gejala yang Anda Rasakan:</h3>
            <label><input type="checkbox" name="gejala[]" value="G01" onchange="showPenyakit()"> Gatal pada liang telinga</label><br>
            <label><input type="checkbox" name="gejala[]" value="G02" onchange="showPenyakit()"> Sakit, terutama saat telinga disentuh atau ditarik</label><br>
            <label><input type="checkbox" name="gejala[]" value="G03" onchange="showPenyakit()"> Keluar cairan bening pada telinga</label><br>
            <label><input type="checkbox" name="gejala[]" value="G04" onchange="showPenyakit()"> Keluar cairan berwarna kuning atau bening dan berbau</label><br>
            <label><input type="checkbox" name="gejala[]" value="G05" onchange="showPenyakit()"> Gangguan pendengaran (Pendengaran menurun)</label><br>
            <label><input type="checkbox" name="gejala[]" value="G06" onchange="showPenyakit()"> Telinga terasa penuh atau tersumbat</label><br>
            <label><input type="checkbox" name="gejala[]" value="G07" onchange="showPenyakit()"> Demam</label><br>
            <label><input type="checkbox" name="gejala[]" value="G08" onchange="showPenyakit()"> Muncul benjolan di leher atau sekitar telinga</label><br>
            <label><input type="checkbox" name="gejala[]" value="G09" onchange="showPenyakit()"> Vertigo dan pusing</label><br>
            <label><input type="checkbox" name="gejala[]" value="G10" onchange="showPenyakit()"> Telinga berdenging</label><br>
            <label><input type="checkbox" name="gejala[]" value="G11" onchange="showPenyakit()"> Nyeri Telinga</label><br>
            <label><input type="checkbox" name="gejala[]" value="G12" onchange="showPenyakit()"> Demam disertai pilek</label><br>
            <br>

            <div id="penyakitResult"></div> <!-- Menampilkan hasil penyakit -->

            <button type="submit" name="submit">Kirim Konsultasi</button>
        </form>
    </section>
</body>
</html>
