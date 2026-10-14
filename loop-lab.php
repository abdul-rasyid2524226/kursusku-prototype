
<?php
$daftarAngka = [1, 2, 3, 4, 5];
$daftarKursus = [
    'PHP Dasar',
    'MySQL Dasar',
    'HTML & CSS',
    'JavaScript',
    'Git & GitHub'
];

$jumlahKursus = count($daftarKursus);
$totalAngka = 0;

for ($i = 1; $i <= 5; $i++) {
    $totalAngka += $i;
}

function eLoop($nilai) {
    return htmlspecialchars((string) $nilai, ENT_QUOTES, 'UTF-8');
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorium Looping - KursusKu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            padding: 25px 15px;
        }
        .container {
            max-width: 750px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 12px;
        }
        .section {
            padding: 15px;
            margin: 15px 0;
            background: #f5f7fa;
            border-radius: 8px;
        }
        code {
            background: #e8edf5;
            padding: 3px 5px;
        }
        li { margin: 8px 0; }
    </style>
</head>
<body>
<div class="container">
    <h1>Laboratorium Perulangan PHP</h1>
    <p>
        Halaman ini menunjukkan tiga jenis perulangan:
        <code>for</code>, <code>while</code>, dan <code>do-while</code>.
    </p>

    <div class="section">
        <h2>1. Perulangan for</h2>
        <p>Digunakan ketika jumlah pengulangan sudah diketahui.</p>
        <ul>
            <?php for ($i = 1; $i <= 5; $i++): ?>
                <li>Pengulangan ke-<?= $i ?></li>
            <?php endfor; ?>
        </ul>
        <p>Total penjumlahan angka 1 sampai 5: <strong><?= $totalAngka ?></strong></p>
    </div>

    <div class="section">
        <h2>2. Perulangan while</h2>
        <p>Pengulangan berjalan selama kondisi bernilai benar.</p>
        <ul>
            <?php
            $i = 0;
            while ($i < count($daftarAngka)):
                $i++;
            ?>
                <li>Nilai angka: <?= $daftarAngka[$i - 1] ?></li>
            <?php endwhile; ?>
        </ul>
    </div>

    <div class="section">
        <h2>3. Perulangan do-while</h2>
        <p>Blok kode dijalankan minimal satu kali sebelum kondisi diperiksa.</p>
        <ul>
            <?php
            $i = 0;
            do {
                echo '<li>Kursus ke-' . ($i + 1) . ': '
                    . eLoop($daftarKursus[$i]) . '</li>';
                $i++;
            } while ($i < $jumlahKursus);
            ?>
        </ul>
    </div>

    <div class="section">
        <h2>4. Perulangan foreach</h2>
        <p>Cocok untuk membaca setiap elemen array.</p>
        <ul>
            <?php foreach ($daftarKursus as $kursus): ?>
                <li><?= eLoop($kursus) ?></li>
            <?php endforeach; ?>
        </ul>
    </div>

    <p><a href="index.php">Kembali ke halaman utama</a></p>
</div>
</body>
</html>
