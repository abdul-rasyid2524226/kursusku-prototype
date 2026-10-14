
<?php
require_once 'helpers.php';

$riwayatPendaftaran = [
    [
        'nama' => 'Andi Saputra',
        'kursus' => 'PHP Dasar',
        'tanggal' => '2026-10-10',
        'status' => 'Terkonfirmasi',
        'biaya' => 350000
    ],
    [
        'nama' => 'Siti Rahma',
        'kursus' => 'MySQL Dasar',
        'tanggal' => '2026-10-11',
        'status' => 'Menunggu',
        'biaya' => 300000
    ],
    [
        'nama' => 'Budi Pratama',
        'kursus' => 'HTML & CSS',
        'tanggal' => '2026-10-12',
        'status' => 'Terkonfirmasi',
        'biaya' => 250000
    ],
    [
        'nama' => 'Dina Amelia',
        'kursus' => 'JavaScript',
        'tanggal' => '2026-10-13',
        'status' => 'Menunggu',
        'biaya' => 400000
    ]
];

function eHistory($nilai) {
    return htmlspecialchars((string) $nilai, ENT_QUOTES, 'UTF-8');
}

$totalPendaftaran = count($riwayatPendaftaran);
$totalBiaya = 0;

foreach ($riwayatPendaftaran as $riwayat) {
    $totalBiaya += $riwayat['biaya'];
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Pendaftaran - KursusKu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            padding: 25px 15px;
        }
        .container {
            max-width: 950px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 12px;
        }
        .summary {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            margin: 20px 0;
        }
        .card {
            flex: 1;
            min-width: 180px;
            padding: 18px;
            background: #eef5ff;
            border-radius: 8px;
        }
        .table-wrap {
            overflow-x: auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th { background: #eef5ff; }
        .status { font-weight: bold; }
        .note {
            padding: 12px;
            background: #fff5db;
            border-radius: 8px;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Riwayat Pendaftaran Kursus</h1>
    <p class="note">
        Halaman ini menggunakan data simulasi untuk latihan PHP.
        Data belum terhubung ke database.
    </p>

    <div class="summary">
        <div class="card">
            <p>Total Pendaftaran</p>
            <h2><?= $totalPendaftaran ?></h2>
        </div>
        <div class="card">
            <p>Total Nilai Biaya</p>
            <h2><?= formatRupiah($totalBiaya) ?></h2>
        </div>
    </div>

    <h2>Daftar Riwayat</h2>

    <div class="table-wrap">
        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Kursus</th>
                    <th>Tanggal</th>
                    <th>Biaya</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($riwayatPendaftaran as $index => $riwayat): ?>
                    <tr>
                        <td><?= $index + 1 ?></td>
                        <td><?= eHistory($riwayat['nama']) ?></td>
                        <td><?= eHistory($riwayat['kursus']) ?></td>
                        <td><?= eHistory($riwayat['tanggal']) ?></td>
                        <td><?= formatRupiah($riwayat['biaya']) ?></td>
                        <td class="status">
                            <?= eHistory($riwayat['status']) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <p><a href="index.php">Kembali ke halaman utama</a></p>
</div>
</body>
</html>
