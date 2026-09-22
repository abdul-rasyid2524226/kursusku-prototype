<?php

require_once 'helpers.php';

$tests = [];

function test($nama, $hasil)
{
    return [
        'nama' => $nama,
        'hasil' => $hasil
    ];
}

/* TEST 1 */

$tests[] = test(
    'formatRupiah()',
    formatRupiah(150000) === 'Rp150.000'
);

/* TEST 2 */

$tests[] = test(
    'hitungTotal()',
    hitungTotal(150000, 2) === 300000
);

/* TEST 3 */

$tests[] = test(
    'hitungDiskon()',
    hitungDiskon(100000, 10) === 90000
);

/* TEST 4 */

$tests[] = test(
    'statusKursus() - Tersedia',
    statusKursus(true) === 'Tersedia'
);

/* TEST 5 */

$tests[] = test(
    'statusKursus() - Penuh',
    statusKursus(false) === 'Penuh'
);

/* TEST 6 */

$tests[] = test(
    'hitungTotal() dengan jumlah 3',
    hitungTotal(50000, 3) === 150000
);

$jumlahPass = 0;

?>

<!DOCTYPE html>

<html lang="id">

<head>

    <meta charset="UTF-8">

    <title>Test Functions - Kursusku</title>

    <style>

        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            padding: 40px;
        }

        .container {
            max-width: 700px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
        }

        .test {
            padding: 12px;
            margin: 8px 0;
            border-radius: 5px;
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

<div class="container">

    <h1>Test Functions</h1>

    <?php foreach ($tests as $item): ?>

        <div class="test">

            <?php echo $item['nama']; ?> :

            <?php if ($item['hasil']): ?>

                <span class="pass">PASS</span>

                <?php $jumlahPass++; ?>

            <?php else: ?>

                <span class="fail">FAIL</span>

            <?php endif; ?>

        </div>

    <?php endforeach; ?>

    <hr>

    <h2>
        Hasil:
        <?php echo $jumlahPass; ?> / <?php echo count($tests); ?> TEST PASS
    </h2>

</div>

</body>

</html>