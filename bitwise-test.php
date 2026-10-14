
<?php
$a = 6;  // Biner: 0110
$b = 3;  // Biner: 0011

$hasil = [
    'AND (&)' => $a & $b,
    'OR (|)' => $a | $b,
    'XOR (^)' => $a ^ $b,
    'NOT (~)' => ~$a,
    'Left Shift (<<)' => $a << 1,
    'Right Shift (>>)' => $a >> 1
];

function eBitwise($nilai) {
    return htmlspecialchars((string) $nilai, ENT_QUOTES, 'UTF-8');
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Operator Bitwise - KursusKu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            padding: 25px 15px;
        }
        .container {
            max-width: 750px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 12px;
        }
        .info {
            padding: 15px;
            background: #eef5ff;
            border-radius: 8px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }
        th { background: #eef5ff; }
        code {
            background: #eee;
            padding: 3px 5px;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Latihan Operator Bitwise PHP</h1>

    <div class="info">
        <p>Nilai A: <strong><?= $a ?></strong> (biner 0110)</p>
        <p>Nilai B: <strong><?= $b ?></strong> (biner 0011)</p>
        <p>
            Operator bitwise bekerja pada representasi bit bilangan.
            Operator NOT membalik bit bilangan bulat.
        </p>
    </div>

    <h2>Hasil Operasi</h2>
    <table>
        <thead>
            <tr>
                <th>Operator</th>
                <th>Operasi</th>
                <th>Hasil</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($hasil as $operator => $nilai): ?>
                <tr>
                    <td><?= eBitwise($operator) ?></td>
                    <td>
                        <?php
                        switch ($operator) {
                            case 'AND (&)':
                                echo "$a & $b";
                                break;
                            case 'OR (|)':
                                echo "$a | $b";
                                break;
                            case 'XOR (^)':
                                echo "$a ^ $b";
                                break;
                            case 'NOT (~)':
                                echo "~$a";
                                break;
                            case 'Left Shift (<<)':
                                echo "$a << 1";
                                break;
                            case 'Right Shift (>>)':
                                echo "$a >> 1";
                                break;
                        }
                        ?>
                    </td>
                    <td><strong><?= eBitwise($nilai) ?></strong></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <h2>Kesimpulan</h2>
    <ul>
        <li>AND menghasilkan bit 1 jika kedua bit bernilai 1.</li>
        <li>OR menghasilkan bit 1 jika salah satu bit bernilai 1.</li>
        <li>XOR menghasilkan bit 1 jika kedua bit berbeda.</li>
        <li>NOT membalik bit; hasilnya bergantung pada representasi integer PHP.</li>
        <li>Left shift menggeser bit ke kiri, right shift ke kanan.</li>
    </ul>

    <p><a href="index.php">Kembali ke halaman utama</a></p>
</div>
</body>
</html>
