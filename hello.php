
<?php
$nama = "Abdul Rasyid";
$nim = "2524226";
$mataKuliah = "Bahasa Pemrograman III";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello KursusKu</title>
</head>
<body>
    <h1>Selamat Datang di KursusKu!</h1>

    <p>
        Nama mahasiswa:
        <?= htmlspecialchars($nama) ?>
    </p>

    <p>
        NIM:
        <?= htmlspecialchars($nim) ?>
    </p>

    <p>
        Mata kuliah:
        <?= htmlspecialchars($mataKuliah) ?>
    </p>
</body>
</html>
