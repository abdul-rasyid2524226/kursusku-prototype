
<?php
require_once 'data.php';
require_once 'helpers.php';

$pilihan = [];
$diskon = 0;
$subtotal = 0;
$totalAkhir = 0;
$errors = [];
$dihitung = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $pilihan = $_POST['kursus'] ?? [];

    if (!is_array($pilihan)) {
        $pilihan = [];
    }

    $diskon = filter_var(
        $_POST['diskon'] ?? 0,
        FILTER_VALIDATE_INT
    );

    if ($diskon === false || $diskon < 0 || $diskon > 100) {
        $errors[] = 'Diskon harus berupa angka bulat antara 0 dan 100.';
        $diskon = 0;
    }

    $kursusTerpilih = [];

    foreach ($daftarKursus as $kursus) {
        if (
            in_array($kursus['kode'], $pilihan, true)
            && $kursus['tersedia']
        ) {
            $kursusTerpilih[] = $kursus;
            $subtotal += $kursus['harga'];
        }
    }

    if (count($kursusTerpilih) === 0) {
        $errors[] = 'Pilih minimal satu kursus yang tersedia.';
    }

    if (empty($errors)) {
        $totalAkhir = hitungDiskon($subtotal, $diskon);
        $dihitung = true;
    }
} else {
    $kursusTerpilih = [];
}

function eProcess($nilai) {
    return htmlspecialchars((string) $nilai, ENT_QUOTES, 'UTF-8');
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proses Biaya Kursus - KursusKu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            padding: 25px 15px;
        }
        .container {
            max-width: 700px;
            margin: auto;
            padding: 25px;
            background: white;
            border-radius: 12px;
        }
        label { display: block; margin-top: 12px; }
        .course {
            padding: 10px;
            margin-top: 8px;
            background: #f5f7fa;
            border-radius: 6px;
        }
        input[type="number"] {
            width: 100%;
            box-sizing: border-box;
            padding: 10px;
            margin-top: 6px;
        }
        button {
            padding: 12px 20px;
            margin-top: 18px;
            cursor: pointer;
        }
        .result, .error {
            padding: 15px;
            margin-top: 20px;
            border-radius: 8px;
        }
        .result { background: #e8f7ed; }
        .error { background: #ffe9e9; }
    </style>
</head>
<body>
<div class="container">
    <h1>Perhitungan Biaya Kursus</h1>
    <p>Pilih kursus, lalu tentukan diskon yang akan diterapkan.</p>

    <?php if (!empty($errors)): ?>
        <div class="error">
            <strong>Terjadi kesalahan:</strong>
            <ul>
                <?php foreach ($errors as $error): ?>
                    <li><?= eProcess($error) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <form method="POST" action="process.php">
        <h2>Daftar Kursus</h2>

        <?php foreach ($daftarKursus as $kursus): ?>
            <div class="course">
                <label>
                    <input
                        type="checkbox"
                        name="kursus[]"
                        value="<?= eProcess($kursus['kode']) ?>"
                        <?= in_array($kursus['kode'], $pilihan, true) ? 'checked' : '' ?>
                        <?= !$kursus['tersedia'] ? 'disabled' : '' ?>
                    >
                    <?= eProcess($kursus['nama']) ?>
                    — <?= formatRupiah($kursus['harga']) ?>
                    (<?= $kursus['tersedia'] ? 'Tersedia' : 'Penuh' ?>)
                </label>
            </div>
        <?php endforeach; ?>

        <label for="diskon">Diskon (%)</label>
        <input
            type="number"
            id="diskon"
            name="diskon"
            min="0"
            max="100"
            value="<?= eProcess($diskon) ?>"
            required
        >

        <button type="submit">Hitung Total</button>
    </form>

    <?php if ($dihitung): ?>
        <div class="result">
            <h2>Hasil Perhitungan</h2>
            <ul>
                <?php foreach ($kursusTerpilih as $kursus): ?>
                    <li>
                        <?= eProcess($kursus['nama']) ?>:
                        <?= formatRupiah($kursus['harga']) ?>
                    </li>
                <?php endforeach; ?>
            </ul>

            <p>Subtotal: <?= formatRupiah($subtotal) ?></p>
            <p>Diskon: <?= $diskon ?>%</p>
            <p>Potongan: <?= formatRupiah($subtotal - $totalAkhir) ?></p>
            <h2>Total Bayar: <?= formatRupiah($totalAkhir) ?></h2>
        </div>
    <?php endif; ?>

    <p><a href="index.php">Kembali ke halaman utama</a></p>
</div>
</body>
</html>
