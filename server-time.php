
<?php
date_default_timezone_set('Asia/Jakarta');

$tanggal = date('d-m-Y');
$waktu = date('H:i:s');
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Waktu Server - KursusKu</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            margin: 0;
            padding: 40px 20px;
            text-align: center;
        }

        .container {
            max-width: 500px;
            margin: auto;
            padding: 30px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #222;
        }

        .waktu {
            font-size: 28px;
            font-weight: bold;
            color: #1769aa;
        }

        .tanggal {
            color: #555;
        }
    </style>
</head>

<body>
    <main class="container">
        <h1>Waktu Server KursusKu</h1>

        <p class="tanggal">
            Tanggal: <?= htmlspecialchars($tanggal) ?>
        </p>

        <p>Waktu saat halaman dibuka:</p>

        <p class="waktu">
            <?= htmlspecialchars($waktu) ?> WIB
        </p>

        <p>Zona waktu: Asia/Jakarta</p>
    </main>
</body>
</html>
