
<?php
require_once 'helpers.php';

$harga = 0;
$jumlah = 1;
$diskon = 0;
$subtotal = 0;
$totalAkhir = 0;
$dihitung = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $harga = max(0, (int) ($_POST['harga'] ?? 0));
    $jumlah = max(1, (int) ($_POST['jumlah'] ?? 1));
    $diskon = max(0, min(100, (int) ($_POST['diskon'] ?? 0)));

    $subtotal = hitungTotal($harga, $jumlah);
    $totalAkhir = hitungDiskon($subtotal, $diskon);
    $dihitung = true;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Biaya - KursusKu</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            padding: 40px 20px;
        }

        .container {
            max-width: 500px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 8px 0 15px;
            box-sizing: border-box;
        }

        button {
            padding: 10px 20px;
            cursor: pointer;
        }

        .result {
            margin-top: 20px;
            padding: 15px;
            background: #eee;
            border-radius: 8px;
        }
    </style>
</head>

<body>
<div class="container">
    <h1>Kalkulator Biaya Kursus</h1>

    <form method="POST">
        <label>Harga Kursus (Rp)</label>
        <input
            type="number"
            name="harga"
            min="0"
            value="<?= htmlspecialchars((string) $harga) ?>"
            required
        >

        <label>Jumlah Kursus</label>
        <input
            type="number"
            name="jumlah"
            min="1"
            value="<?= htmlspecialchars((string) $jumlah) ?>"
            required
        >

        <label>Diskon (%)</label>
        <input
            type="number"
            name="diskon"
            min="0"
            max="100"
            value="<?= htmlspecialchars((string) $diskon) ?>"
            required
        >

        <button type="submit">Hitung Biaya</button>
    </form>

    <?php if ($dihitung): ?>
        <div class="result">
            <h2>Hasil Perhitungan</h2>

            <p>Harga per kursus: <?= formatRupiah($harga) ?></p>
            <p>Jumlah kursus: <?= $jumlah ?></p>
            <p>Subtotal: <?= formatRupiah($subtotal) ?></p>
            <p>Diskon: <?= $diskon ?>%</p>
            <p>Potongan: <?= formatRupiah($subtotal - $totalAkhir) ?></p>

            <hr>

            <h2>Total Bayar: <?= formatRupiah($totalAkhir) ?></h2>
        </div>
    <?php endif; ?>
</div>
</body>
</html>
