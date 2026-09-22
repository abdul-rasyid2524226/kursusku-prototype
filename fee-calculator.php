<?php

require_once 'helpers.php';

$harga = 0;
$jumlah = 1;
$total = 0;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $harga = (int) $_POST['harga'];
    $jumlah = (int) $_POST['jumlah'];

    $total = hitungTotal($harga, $jumlah);
}

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Kalkulator Biaya - Kursusku</title>

    <style>

        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            padding: 40px;
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
        }

    </style>

</head>

<body>

<div class="container">

    <h1>Kalkulator Biaya Kursus</h1>

    <form method="POST">

        <label>Harga Kursus</label>

        <input
            type="number"
            name="harga"
            placeholder="Contoh: 150000"
            required
        >

        <label>Jumlah Kursus</label>

        <input
            type="number"
            name="jumlah"
            min="1"
            value="1"
            required
        >

        <button type="submit">
            Hitung
        </button>

    </form>

    <?php if ($total > 0): ?>

        <div class="result">

            <h3>Hasil Perhitungan</h3>

            <p>
                Harga:
                <?php echo formatRupiah($harga); ?>
            </p>

            <p>
                Jumlah:
                <?php echo $jumlah; ?>
            </p>

            <hr>

            <h2>
                Total:
                <?php echo formatRupiah($total); ?>
            </h2>

        </div>

    <?php endif; ?>

</div>

</body>

</html>