
<?php
require_once 'helpers.php';

$tests = [
    [
        'nama' => 'Format Rupiah',
        'aktual' => formatRupiah(150000),
        'harapan' => 'Rp150.000'
    ],
    [
        'nama' => 'Hitung total satu kursus',
        'aktual' => hitungTotal(150000, 1),
        'harapan' => 150000
    ],
    [
        'nama' => 'Hitung total dua kursus',
        'aktual' => hitungTotal(150000, 2),
        'harapan' => 300000
    ],
    [
        'nama' => 'Diskon 10 persen',
        'aktual' => hitungDiskon(150000, 10),
        'harapan' => 135000
    ],
    [
        'nama' => 'Status kursus tersedia',
        'aktual' => statusKursus(true),
        'harapan' => 'Tersedia'
    ],
    [
        'nama' => 'Status kursus penuh',
        'aktual' => statusKursus(false),
        'harapan' => 'Penuh'
    ]
];

$lulus = 0;
$total = count($tests);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengujian Fungsi KursusKu</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
            background: #f5f5f5;
        }

        .container {
            max-width: 800px;
            margin: auto;
            padding: 25px;
            background: white;
            border-radius: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 12px;
            text-align: left;
        }

        th {
            background: #eee;
        }

        .pass {
            color: green;
            font-weight: bold;
        }

        .fail {
            color: red;
            font-weight: bold;
        }
    </style>
</head>

<body>
<main class="container">
    <h1>Pengujian Fungsi KursusKu</h1>

    <table>
        <thead>
            <tr>
                <th>Nama Pengujian</th>
                <th>Hasil Aktual</th>
                <th>Hasil Harapan</th>
                <th>Status</th>
            </tr>
        </thead>

        <tbody>
        <?php foreach ($tests as $test): ?>
            <?php
            $berhasil = $test['aktual'] === $test['harapan'];

            if ($berhasil) {
                $lulus++;
            }
            ?>

            <tr>
                <td><?= htmlspecialchars($test['nama']) ?></td>
                <td><?= htmlspecialchars((string) $test['aktual']) ?></td>
                <td><?= htmlspecialchars((string) $test['harapan']) ?></td>
                <td class="<?= $berhasil ? 'pass' : 'fail' ?>">
                    <?= $berhasil ? 'PASS' : 'FAIL' ?>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

    <h2>Hasil: <?= $lulus ?>/<?= $total ?> pengujian lulus</h2>
</main>
</body>
</html>
