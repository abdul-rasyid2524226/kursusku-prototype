
<?php
date_default_timezone_set('Asia/Jakarta');

$sekarang = new DateTime();

$tanggal = $sekarang->format('d-m-Y');
$waktu = $sekarang->format('H:i:s');
$hari = $sekarang->format('l');
$bulan = $sekarang->format('F');

$namaHari = [
    'Monday' => 'Senin',
    'Tuesday' => 'Selasa',
    'Wednesday' => 'Rabu',
    'Thursday' => 'Kamis',
    'Friday' => 'Jumat',
    'Saturday' => 'Sabtu',
    'Sunday' => 'Minggu'
];

$namaBulan = [
    'January' => 'Januari',
    'February' => 'Februari',
    'March' => 'Maret',
    'April' => 'April',
    'May' => 'Mei',
    'June' => 'Juni',
    'July' => 'Juli',
    'August' => 'Agustus',
    'September' => 'September',
    'October' => 'Oktober',
    'November' => 'November',
    'December' => 'Desember'
];

$tanggalIndonesia = ($namaHari[$hari] ?? $hari)
    . ', '
    . $sekarang->format('d')
    . ' '
    . ($namaBulan[$bulan] ?? $bulan)
    . ' '
    . $sekarang->format('Y');
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengujian Tanggal PHP</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            margin: 0;
            padding: 30px 15px;
        }

        main {
            max-width: 650px;
            margin: auto;
            padding: 30px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
        }

        .hasil {
            padding: 15px;
            margin: 15px 0;
            background: #eee;
            border-radius: 8px;
        }

        .nilai {
            font-weight: bold;
            color: #1769aa;
        }
    </style>
</head>

<body>
<main>
    <h1>Pengujian Tanggal dan Waktu PHP</h1>

    <div class="hasil">
        <p>Tanggal Indonesia</p>
        <div class="nilai">
            <?= htmlspecialchars($tanggalIndonesia) ?>
        </div>
    </div>

    <div class="hasil">
        <p>Format tanggal</p>
        <div class="nilai">
            <?= htmlspecialchars($tanggal) ?>
        </div>
    </div>

    <div class="hasil">
        <p>Waktu server</p>
        <div class="nilai">
            <?= htmlspecialchars($waktu) ?> WIB
        </div>
    </div>

    <div class="hasil">
        <p>Zona waktu</p>
        <div class="nilai">Asia/Jakarta</div>
    </div>
</main>
</body>
</html>
