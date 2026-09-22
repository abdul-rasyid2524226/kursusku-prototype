<?php

date_default_timezone_set('Asia/Jakarta');

$waktu = date('d-m-Y H:i:s');

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Server Time - Kursusku</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            text-align: center;
            padding-top: 100px;
        }

        .box {
            background: white;
            max-width: 500px;
            margin: auto;
            padding: 30px;
            border-radius: 10px;
        }

        .time {
            font-size: 30px;
            font-weight: bold;
        }
    </style>
</head>

<body>

<div class="box">

    <h1>Server Time</h1>

    <p>Waktu server saat ini:</p>

    <div class="time">
        <?php echo $waktu; ?>
    </div>

</div>

</body>
</html>