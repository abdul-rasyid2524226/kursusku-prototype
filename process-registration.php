
<?php
require_once 'data.php';
require_once 'helpers.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: registration.php');
    exit;
}

$nama = trim($_POST['nama'] ?? '');
$email = trim($_POST['email'] ?? '');
$nim = trim($_POST['nim'] ?? '');
$kodeKursus = trim($_POST['kode_kursus'] ?? '');
$minat = trim($_POST['minat'] ?? '');
$catatan = trim($_POST['catatan'] ?? '');

$errors = [];
$kursusDipilih = null;

if ($nama === '' || strlen($nama) > 100) {
    $errors[] = 'Nama wajib diisi dan maksimal 100 karakter.';
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL) || strlen($email) > 150) {
    $errors[] = 'Alamat email tidak valid.';
}

if ($nim === '' || strlen($nim) > 30) {
    $errors[] = 'NIM wajib diisi dan maksimal 30 karakter.';
}

if (strlen($catatan) > 250) {
    $errors[] = 'Catatan maksimal 250 karakter.';
}

foreach ($daftarKursus as $kursus) {
    if ($kursus['kode'] === $kodeKursus && $kursus['tersedia']) {
        $kursusDipilih = $kursus;
        break;
    }
}

if ($kursusDipilih === null) {
    $errors[] = 'Kursus tidak valid atau sudah penuh.';
}

if (!in_array($minat, $daftarMinat, true)) {
    $errors[] = 'Silakan pilih bidang minat yang valid.';
}

function aman($nilai) {
    return htmlspecialchars($nilai, ENT_QUOTES, 'UTF-8');
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pendaftaran - KursusKu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            padding: 30px 15px;
        }
        .container {
            max-width: 650px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 12px;
        }
        .error {
            background: #ffe9e9;
            padding: 15px;
            border-radius: 8px;
        }
        .success {
            background: #e8f7ed;
            padding: 15px;
            border-radius: 8px;
        }
        li { margin-bottom: 8px; }
    </style>
</head>
<body>
<div class="container">
    <?php if (!empty($errors)): ?>
        <h1>Pendaftaran Belum Berhasil</h1>
        <div class="error">
            <p>Periksa kembali data berikut:</p>
            <ul>
                <?php foreach ($errors as $error): ?>
                    <li><?= aman($error) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <p><a href="registration.php">Kembali ke formulir</a></p>
    <?php else: ?>
        <h1>Pendaftaran Berhasil!</h1>
        <div class="success">
            <p>Data pendaftaran berhasil divalidasi.</p>
        </div>

        <h2>Ringkasan Pendaftaran</h2>
        <p><strong>Nama:</strong> <?= aman($nama) ?></p>
        <p><strong>Email:</strong> <?= aman($email) ?></p>
        <p><strong>NIM:</strong> <?= aman($nim) ?></p>
        <p><strong>Kursus:</strong> <?= aman($kursusDipilih['nama']) ?></p>
        <p><strong>Bidang minat:</strong> <?= aman($minat) ?></p>
        <p><strong>Biaya kursus:</strong>
            <?= formatRupiah($kursusDipilih['harga']) ?></p>
        <p><strong>Catatan:</strong>
            <?= $catatan !== '' ? aman($catatan) : 'Tidak ada' ?></p>

        <p><em>Ini merupakan simulasi. Data belum disimpan ke database.</em></p>
        <p><a href="registration.php">Daftar kursus lainnya</a></p>
    <?php endif; ?>

    <p><a href="index.php">Kembali ke halaman utama</a></p>
</div>
</body>
</html>
