
<?php
require_once 'data.php';
require_once 'helpers.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Kursus - KursusKu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            margin: 0;
            padding: 30px 15px;
        }
        .container {
            max-width: 650px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 12px;
        }
        label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
        }
        input, select {
            width: 100%;
            box-sizing: border-box;
            padding: 11px;
            margin-top: 6px;
        }
        button {
            margin-top: 20px;
            padding: 12px 20px;
            background: #1769aa;
            color: white;
            border: 0;
            border-radius: 6px;
            cursor: pointer;
        }
        .info {
            background: #eef5ff;
            padding: 12px;
            border-radius: 6px;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Formulir Pendaftaran Kursus</h1>
    <p class="info">Silakan isi data diri dan pilih kursus yang tersedia.</p>

    <form action="process-registration.php" method="POST">
        <label for="nama">Nama lengkap</label>
        <input type="text" id="nama" name="nama"
               maxlength="100" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email"
               maxlength="150" required>

        <label for="nim">NIM</label>
        <input type="text" id="nim" name="nim"
               maxlength="30" required>

        <label for="kursus">Pilih kursus</label>
        <select id="kursus" name="kode_kursus" required>
            <option value="">-- Pilih kursus --</option>
            <?php foreach ($daftarKursus as $kursus): ?>
                <?php if ($kursus['tersedia']): ?>
                    <option value="<?= htmlspecialchars($kursus['kode']) ?>">
                        <?= htmlspecialchars($kursus['nama']) ?>
                        - <?= formatRupiah($kursus['harga']) ?>
                    </option>
                <?php endif; ?>
            <?php endforeach; ?>
        </select>

        <label for="minat">Bidang minat</label>
        <select id="minat" name="minat" required>
            <option value="">-- Pilih bidang minat --</option>
            <?php foreach ($daftarMinat as $minat): ?>
                <option value="<?= htmlspecialchars($minat) ?>">
                    <?= htmlspecialchars($minat) ?>
                </option>
            <?php endforeach; ?>
        </select>

        <label for="catatan">Catatan (opsional)</label>
        <input type="text" id="catatan" name="catatan"
               maxlength="250">

        <button type="submit">Daftar Kursus</button>
    </form>

    <p><a href="index.php">Kembali ke halaman utama</a></p>
</div>
</body>
</html>
