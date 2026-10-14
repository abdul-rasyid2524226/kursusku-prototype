
<?php
$daftarKursus = [
    [
        'nama' => 'PHP Dasar',
        'tersedia' => true,
        'peserta' => 15,
        'kapasitas' => 30
    ],
    [
        'nama' => 'MySQL Dasar',
        'tersedia' => true,
        'peserta' => 30,
        'kapasitas' => 30
    ],
    [
        'nama' => 'HTML & CSS',
        'tersedia' => false,
        'peserta' => 0,
        'kapasitas' => 25
    ],
    [
        'nama' => 'JavaScript',
        'tersedia' => true,
        'peserta' => 5,
        'kapasitas' => 20
    ]
];

function tentukanStatus($kursus)
{
    if (!$kursus['tersedia']) {
        return 'Tidak dibuka';
    } elseif ($kursus['peserta'] >= $kursus['kapasitas']) {
        return 'Penuh';
    } else {
        return 'Tersedia';
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengujian Logika PHP</title>

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
            padding: 12px;
            text-align: left;
        }

        th {
            background: #eee;
        }
    </style>
</head>

<body>
<main>
    <h1>Pengujian Logika dan Percabangan PHP</h1>

    <p>
        Status kursus ditentukan berdasarkan kondisi ketersediaan
        dan jumlah peserta.
    </p>

    <table>
        <thead>
            <tr>
                <th>Nama Kursus</th>
                <th>Peserta</th>
                <th>Kapasitas</th>
                <th>Status</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($daftarKursus as $kursus): ?>
                <tr>
                    <td><?= htmlspecialchars($kursus['nama']) ?></td>
                    <td><?= $kursus['peserta'] ?></td>
                    <td><?= $kursus['kapasitas'] ?></td>
                    <td><?= htmlspecialchars(tentukanStatus($kursus)) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</main>
</body>
</html>
