
<?php
$nama = "Abdul Rasyid";
$mataKuliah = "Bahasa Pemrograman III";
$kalimat = "Selamat datang di KursusKu";
$teks = "  belajar pemrograman php  ";

$hasil = [
    ['Operasi', 'Hasil'],
    ['Nama mahasiswa', $nama],
    ['Jumlah karakter nama', strlen($nama)],
    ['Huruf besar', strtoupper($nama)],
    ['Huruf kecil', strtolower($nama)],
    ['Jumlah kata', str_word_count($kalimat)],
    ['Mengganti teks', str_replace('KursusKu', 'Katalog Kursus', $kalimat)],
    ['Menghapus spasi tepi', trim($teks)],
    ['Mata kuliah', $mataKuliah],
    ['Gabungan teks', $nama . ' - ' . $mataKuliah]
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengujian String PHP</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            margin: 0;
            padding: 30px 15px;
        }

        main {
            max-width: 800px;
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
            overflow-wrap: anywhere;
        }

        th {
            background: #eee;
        }
    </style>
</head>

<body>
<main>
    <h1>Pengujian String PHP</h1>

    <p>
        Halaman ini menunjukkan contoh pengolahan teks menggunakan
        fungsi-fungsi bawaan PHP.
    </p>

    <table>
        <thead>
            <tr>
                <th>Operasi</th>
                <th>Hasil</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach (array_slice($hasil, 1) as $baris): ?>
                <tr>
                    <td><?= htmlspecialchars((string) $baris[0]) ?></td>
                    <td><?= htmlspecialchars((string) $baris[1]) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</main>
</body>
</html>
