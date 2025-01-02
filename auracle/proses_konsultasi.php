<?php
include 'koneksi.php';  // Pastikan koneksi ke database sudah benar

// Menerima data dari formulir
$gejala = isset($_POST['gejala']) ? $_POST['gejala'] : [];

// Deskripsi gejala
$deskripsi_gejala = [
    "G01" => "Gatal pada liang telinga",
    "G02" => "Sakit, terutama saat telinga disentuh atau ditarik",
    "G03" => "Keluar cairan bening pada telinga",
    "G04" => "Keluar cairan berwarna kuning atau bening dan berbau",
    "G05" => "Gangguan pendengaran (Pendengaran menurun)",
    "G06" => "Telinga terasa penuh atau tersumbat",
    "G07" => "Demam",
    "G08" => "Muncul benjolan di leher atau sekitar telinga",
    "G09" => "Vertigo dan pusing",
    "G10" => "Telinga berdenging",
    "G11" => "Nyeri Telinga",
    "G12" => "Demam disertai pilek"
];

// Kode penyakit dan gejala terkait
$penyakit_gejala = [
    "P01" => ["Otitis Eksterna", ["G01", "G02", "G03", "G05", "G06", "G11"]],
    "P02" => ["Otitis Media", ["G04", "G05", "G07", "G08", "G10"]],
    "P03" => ["Otitis Interna", ["G05", "G09", "G10"]],
    "P04" => ["Gendang Telinga Pecah", ["G05", "G09", "G10", "G11"]],
    "P05" => ["Kolesteatoma", ["G04", "G06", "G11"]],
    "P06" => ["Presbikusis", ["G05", "G04"]]
];

// Fungsi untuk memeriksa kecocokan gejala
$penyakit_terkait = [];

// Menentukan penyakit yang cocok berdasarkan gejala yang dipilih
foreach ($penyakit_gejala as $kodePenyakit => $dataPenyakit) {
    $penyakit_nama = $dataPenyakit[0];
    $gejala_terkait = $dataPenyakit[1];

    // Cek apakah gejala yang dipilih cocok dengan gejala penyakit
    $matching_gejala = array_intersect($gejala, $gejala_terkait);
    
    // Jika jumlah gejala yang cocok sama dengan jumlah gejala penyakit, berarti cocok
    if (count($matching_gejala) == count($gejala_terkait)) {
        $penyakit_terkait[] = $penyakit_nama;
    }
}

// Jika lebih dari satu penyakit cocok, pilih yang paling spesifik atau dengan gejala yang paling banyak
if (count($penyakit_terkait) > 1) {
    if (in_array("G05", $gejala) && in_array("G09", $gejala) && in_array("G10", $gejala) && in_array("G11", $gejala)) {
        $penyakit_terkait = ["Gendang Telinga Pecah"];
    } else {
        $max_count = 0;
        $penyakit_terpilih = "";
        foreach ($penyakit_terkait as $penyakit) {
            $penyakit_gejala_count = count(array_intersect($gejala, $penyakit_gejala[$penyakit][1]));
            if ($penyakit_gejala_count > $max_count) {
                $max_count = $penyakit_gejala_count;
                $penyakit_terpilih = $penyakit;
            }
        }
        $penyakit_terkait = [$penyakit_terpilih];
    }
}

// Simpan hasil konsultasi ke database
$gejala_list = implode(", ", $gejala);
$penyakit_list = implode(", ", $penyakit_terkait);

// Query untuk menyimpan hasil ke database
$query = "INSERT INTO hasil_konsultasi (gejala, penyakit) VALUES ('$gejala_list', '$penyakit_list')";
mysqli_query($conn, $query);

// Menampilkan hasil
echo "<h1>Hasil Konsultasi</h1>";
echo "<h3>Gejala yang Anda Rasakan:</h3>";
if (!empty($gejala)) {
    echo "<ul>";
    foreach ($gejala as $kode) {
        echo "<li>$kode - " . $deskripsi_gejala[$kode] . "</li>";
    }
    echo "</ul>";
} else {
    echo "<p>Anda tidak memilih gejala apa pun.</p>";
}

echo "<h3>Penyakit yang Mungkin:</h3>";
if (!empty($penyakit_terkait)) {
    echo "<ul>";
    foreach ($penyakit_terkait as $penyakit) {
        echo "<li>$penyakit</li>";
    }
    echo "</ul>";
} else {
    echo "<p>Tidak ada penyakit yang cocok berdasarkan gejala yang dipilih.</p>";
}

echo '<a href="konsultasi.php">Kembali ke Formulir</a>';
?>
