
<?php
$harga = 150000;
$jumlah = 2;
$diskon = 10;

$subtotal = $harga * $jumlah;
$totalDiskon = $subtotal * $diskon / 100;
$totalBayar = $subtotal - $totalDiskon;

$hasil = [
    ['Operasi', 'Ekspresi', 'Hasil'],
    ['Penjumlahan', '150000 + 50000', 150000 + 50000],
    ['Pengurangan', '150000 - 50000', 150000 - 50000],
    ['Perkalian', '$harga * $jumlah', $subtotal],
    ['Pembagian', '150000 / 2', 150000 / 2],
    ['Modulus', '10 % 3', 10 % 3],
    ['Perbandingan', '150000 > 100000', 150000 > 100000 ? 'true' : 'false'],
    ['Kesamaan', '150000 === 150000', 150000 === 150000 ? 'true' : 'false'],
    ['Logika AND', 'true && false', true && false ? 'true' : 'false'],
    ['Logika OR', 'true || false', true || false ? 'true' : 'false'],
    ['Subtotal kursus', '$harga * $jumlah', $subtotal],
    ['Potongan diskon', '$subtotal * $diskon / 100', $totalDiskon],
    ['Total pembayaran', '$subtotal - $totalDiskon', $totalBayar]
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengujian Operator PHP</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            margin: 0;
            padding: 30px 15px;
        }

        main {
            max-width: 850px;
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
            padding: 10px;
            text-align: left;
        }

        th {
            background: #eee;
        }
    </style>
</head>

<body>
<main>
    <h1>Pengujian Operator PHP</h1>

    <table>
        <thead>
            <tr>
                <?php foreach ($hasil[0] as $judul): ?>
                    <th><?= htmlspecialchars($judul) ?></th>
                <?php endforeach; ?>
            </tr>
        </thead>

        <tbody>
            <?php foreach (array_slice($hasil, 1) as $baris): ?>
                <tr>
                    <?php foreach ($baris as $nilai): ?>
                        <td><?= htmlspecialchars((string) $nilai) ?></td>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</main>
</body>
</html>
