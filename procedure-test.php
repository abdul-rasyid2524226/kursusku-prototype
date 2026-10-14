
<?php
require_once 'helpers.php';

// Prosedur: menjalankan tindakan tanpa mengembalikan nilai.
function tampilkanJudul($judul)
{
    echo '<h2>' . htmlspecialchars($judul) . '</h2>';
}

// Fungsi: mengembalikan nilai yang dapat digunakan kembali.
function hitungRataRata($nilai1, $nilai2, $nilai3)
{
    return ($nilai1 + $nilai2 + $nilai3) / 3;
}

function buatRingkasanKursus($nama, $harga, $jumlah)
{
    return [
        'nama' => $nama,
        'total' => hitungTotal($harga, $jumlah),
        'status' => statusKursus(true)
    ];
}

$ringkasan = buatRingkasanKursus('PHP Dasar', 150000, 2);
$rataRata = hitungRataRata(80, 90, 85);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengujian Prosedur PHP</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            margin: 0;
            padding: 30px 15px;
        }

        main {
            max-width: 700px;
            margin: auto;
            padding: 25px;
            background: white;
            border-radius: 10px;
        }

        .hasil {
            margin: 15px 0;
            padding: 15px;
            background: #eee;
            border-radius: 8px;
        }
    </style>
</head>

<body>
<main>
    <h1>Pengujian Prosedur dan Fungsi PHP</h1>

    <?php tampilkanJudul('1. Contoh Prosedur'); ?>

    <p>
        Prosedur digunakan untuk menjalankan tindakan.
        Contoh: menampilkan judul pada halaman.
    </p>

    <?php tampilkanJudul('2. Contoh Fungsi'); ?>

    <div class="hasil">
        <p>Nama kursus:
            <?= htmlspecialchars($ringkasan['nama']) ?>
        </p>

        <p>Total biaya:
            <?= htmlspecialchars(formatRupiah($ringkasan['total'])) ?>
        </p>

        <p>Status:
            <?= htmlspecialchars($ringkasan['status']) ?>
        </p>
    </div>

    <h2>3. Perhitungan Rata-Rata</h2>

    <div class="hasil">
        <p>Nilai: 80, 90, dan 85</p>
        <p>Rata-rata:
            <?= htmlspecialchars((string) $rataRata) ?>
        </p>
    </div>
</main>
</body>
</html>
