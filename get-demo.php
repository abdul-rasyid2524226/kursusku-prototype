
<?php
$kataKunci = trim($_GET['kata_kunci'] ?? '');
$kategori = trim($_GET['kategori'] ?? '');

$kategoriValid = [
    'Semua',
    'Web Development',
    'Database',
    'UI/UX Design',
    'Networking'
];

if (!in_array($kategori, $kategoriValid, true)) {
    $kategori = 'Semua';
}

$hasilKursus = [
    [
        'nama' => 'PHP Dasar',
        'kategori' => 'Web Development',
        'harga' => 350000
    ],
    [
        'nama' => 'MySQL Dasar',
        'kategori' => 'Database',
        'harga' => 300000
    ],
    [
        'nama' => 'HTML & CSS',
        'kategori' => 'Web Development',
        'harga' => 250000
    ],
    [
        'nama' => 'UI/UX Design',
        'kategori' => 'UI/UX Design',
        'harga' => 275000
    ],
    [
        'nama' => 'Jaringan Komputer',
        'kategori' => 'Networking',
        'harga' => 325000
    ]
];

$hasilFilter = [];

foreach ($hasilKursus as $kursus) {
    $cocokNama = $kataKunci === ''
        || stripos($kursus['nama'], $kataKunci) !== false;

    $cocokKategori = $kategori === 'Semua'
        || $kursus['kategori'] === $kategori;

    if ($cocokNama && $cocokKategori) {
        $hasilFilter[] = $kursus;
    }
}

function e($nilai) {
    return htmlspecialchars((string) $nilai, ENT_QUOTES, 'UTF-8');
}

function rupiah($angka) {
    return 'Rp' . number_format($angka, 0, ',', '.');
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo GET - KursusKu</title>
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
        label { display: block; margin-top: 15px; }
        input, select {
            width: 100%;
            padding: 10px;
            margin-top: 6px;
            box-sizing: border-box;
        }
        button {
            margin-top: 15px;
            padding: 10px 18px;
            cursor: pointer;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
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
    <h1>Demo Metode GET</h1>
    <p>
        Metode GET mengirimkan data melalui URL.
        Data pencarian dapat terlihat pada alamat browser.
    </p>

    <form method="GET" action="get-demo.php">
        <label for="kata_kunci">Cari nama kursus</label>
        <input
            type="text"
            id="kata_kunci"
            name="kata_kunci"
            value="<?= e($kataKunci) ?>"
            placeholder="Contoh: PHP"
        >

        <label for="kategori">Kategori</label>
        <select id="kategori" name="kategori">
            <?php foreach ($kategoriValid as $pilihan): ?>
                <option
                    value="<?= e($pilihan) ?>"
                    <?= $kategori === $pilihan ? 'selected' : '' ?>
                >
                    <?= e($pilihan) ?>
                </option>
            <?php endforeach; ?>
        </select>

        <button type="submit">Cari Kursus</button>
    </form>

    <p>
        Contoh parameter URL:
        <code>?kata_kunci=PHP&amp;kategori=Semua</code>
    </p>

    <h2>Hasil Pencarian</h2>

    <?php if (count($hasilFilter) > 0): ?>
        <table>
            <thead>
                <tr>
                    <th>Nama Kursus</th>
                    <th>Kategori</th>
                    <th>Harga</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($hasilFilter as $kursus): ?>
                    <tr>
                        <td><?= e($kursus['nama']) ?></td>
                        <td><?= e($kursus['kategori']) ?></td>
                        <td><?= rupiah($kursus['harga']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>Kursus tidak ditemukan. Coba kata kunci lain.</p>
    <?php endif; ?>

    <p><a href="index.php">Kembali ke halaman utama</a></p>
</div>
</body>
</html>
