
<?php
require_once 'data.php';
require_once 'helpers.php';

$nama = trim($_POST['nama'] ?? '');
$email = trim($_POST['email'] ?? '');
$pilihanKursus = $_POST['kursus'] ?? [];
$pesan = '';
$errors = [];
$kursusTerpilih = [];

if (!is_array($pilihanKursus)) {
    $pilihanKursus = [];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($nama === '' || strlen($nama) > 100) {
        $errors[] = 'Nama wajib diisi dan maksimal 100 karakter.';
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Masukkan alamat email yang valid.';
    }

    foreach ($daftarKursus as $kursus) {
        if (
            in_array($kursus['kode'], $pilihanKursus, true)
            && $kursus['tersedia']
        ) {
            $kursusTerpilih[] = $kursus;
        }
    }

    if (count($kursusTerpilih) === 0) {
        $errors[] = 'Pilih minimal satu kursus yang tersedia.';
    }

    if (empty($errors)) {
        $pesan = 'Data berhasil divalidasi. Ini hanya simulasi pendaftaran.';
    }
}

function eRegister($nilai) {
    return htmlspecialchars((string) $nilai, ENT_QUOTES, 'UTF-8');
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Pendaftaran - KursusKu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            padding: 25px 15px;
        }
        .container {
            max-width: 700px;
            margin: auto;
            padding: 25px;
            background: white;
            border-radius: 12px;
        }
        label {
            display: block;
            margin-top: 15px;
        }
        input[type="text"],
        input[type="email"] {
            width: 100%;
            box-sizing: border-box;
            padding: 10px;
            margin-top: 6px;
        }
        .course {
            padding: 10px;
            margin-top: 8px;
            background: #f5f7fa;
            border-radius: 6px;
        }
        .error {
            padding: 12px;
            background: #ffe9e9;
            border-radius: 8px;
        }
        .success {
            padding: 12px;
            background: #e8f7ed;
            border-radius: 8px;
        }
        button {
            margin-top: 20px;
            padding: 12px 20px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Latihan Form Pendaftaran</h1>
    <p>
        Praktik PHP: form POST, percabangan if/else,
        perulangan foreach, dan validasi data.
    </p>

    <?php if (!empty($errors)): ?>
        <div class="error">
            <strong>Periksa kembali:</strong>
            <ul>
                <?php foreach ($errors as $error): ?>
                    <li><?= eRegister($error) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <?php if ($pesan !== ''): ?>
        <div class="success">
            <strong><?= eRegister($pesan) ?></strong>
            <p>Nama: <?= eRegister($nama) ?></p>
            <p>Email: <?= eRegister($email) ?></p>
            <p>Kursus yang dipilih:</p>
            <ul>
                <?php foreach ($kursusTerpilih as $kursus): ?>
                    <li>
                        <?= eRegister($kursus['nama']) ?>
                        — <?= formatRupiah($kursus['harga']) ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <form method="POST" action="register.php">
        <label for="nama">Nama lengkap</label>
        <input
            type="text"
            id="nama"
            name="nama"
            maxlength="100"
            value="<?= eRegister($nama) ?>"
            required
        >

        <label for="email">Email</label>
        <input
            type="email"
            id="email"
            name="email"
            value="<?= eRegister($email) ?>"
            required
        >

        <h2>Pilih Kursus</h2>

        <?php foreach ($daftarKursus as $kursus): ?>
            <div class="course">
                <label>
                    <input
                        type="checkbox"
                        name="kursus[]"
                        value="<?= eRegister($kursus['kode']) ?>"
                        <?= in_array($kursus['kode'], $pilihanKursus, true) ? 'checked' : '' ?>
                        <?= !$kursus['tersedia'] ? 'disabled' : '' ?>
                    >
                    <?= eRegister($kursus['nama']) ?>
                    — <?= formatRupiah($kursus['harga']) ?>
                    (<?= $kursus['tersedia'] ? 'Tersedia' : 'Penuh' ?>)
                </label>
            </div>
        <?php endforeach; ?>

        <button type="submit">Proses Pendaftaran</button>
    </form>

    <p><a href="index.php">Kembali ke halaman utama</a></p>
</div>
</body>
</html>
