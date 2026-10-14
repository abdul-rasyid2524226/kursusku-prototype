
<?php
require_once 'helpers.php';

$tests = [
    [
        'nama' => 'Total satu kursus',
        'aktual' => hitungTotal(150000, 1),
        'harapan' => 150000
    ],
    [
        'nama' => 'Total dua kursus',
        'aktual' => hitungTotal(150000, 2),
        'harapan' => 300000
    ],
    [
        'nama' => 'Total tiga kursus',
        'aktual' => hitungTotal(250000, 3),
        'harapan' => 750000
    ],
    [
        'nama' => 'Diskon 10 persen',
        'aktual' => hitungDiskon(150000, 10),
        'harapan' => 135000
    ],
    [
        'nama' => 'Diskon 20 persen',
        'aktual' => hitungDiskon(200000, 20),
        'harapan' => 160000
    ],
    [
        'nama' => 'Format Rupiah',
        'aktual' => formatRupiah(150000),
        'harapan' => 'Rp150.000'
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
    ],
    [
        'nama' => 'Total kursus gratis',
        'aktual' => hitungTotal(0, 1),
        'harapan' => 0
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
    <title>Pengujian Biaya KursusKu</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            margin: 0;
            padding: 30px 15px;
        }

        .container {
            max-width: 850px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 10px;
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
    <h1>Pengujian Biaya KursusKu</h1>

    <table>
        <thead>
            <tr>
                <th>Pengujian</th>
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
