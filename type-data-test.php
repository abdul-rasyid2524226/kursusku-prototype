
<?php
$nama = "Abdul Rasyid";
$nim = 2524226;
$hargaKursus = 150000.0;
$kursusTersedia = true;
$daftarKursus = ["PHP Dasar", "MySQL Dasar", "HTML & CSS"];

$data = [
    'Nama' => $nama,
    'NIM' => $nim,
    'Harga Kursus' => $hargaKursus,
    'Kursus Tersedia' => $kursusTersedia,
    'Daftar Kursus' => $daftarKursus
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengujian Tipe Data PHP</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            padding: 30px 15px;
        }

        main {
            max-width: 750px;
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
            padding: 12px;
            border: 1px solid #ccc;
            text-align: left;
        }

        th {
            background: #eee;
        }
    </style>
</head>

<body>
<main>
    <h1>Pengujian Tipe Data PHP</h1>

    <table>
        <thead>
            <tr>
                <th>Variabel</th>
                <th>Nilai</th>
                <th>Tipe Data</th>
            </tr>
        </thead>

        <tbody>
        <?php foreach ($data as $label => $nilai): ?>
            <tr>
                <td><?= htmlspecialchars($label) ?></td>

                <td>
                    <?php
                    if (is_bool($nilai)) {
                        echo $nilai ? 'true' : 'false';
                    } elseif (is_array($nilai)) {
                        echo htmlspecialchars(implode(', ', $nilai));
                    } elseif (is_float($nilai)) {
                        echo htmlspecialchars((string) $nilai);
                    } else {
                        echo htmlspecialchars((string) $nilai);
                    }
                    ?>
                </td>

                <td>
                    <?= htmlspecialchars(gettype($nilai)) ?>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</main>
</body>
</html>
