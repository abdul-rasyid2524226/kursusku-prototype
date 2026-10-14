
<?php
$nama = "Abdul Rasyid";
$mataKuliah = "Pemrograman Web III";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hello KursusKu</title>
</head>
<body>
    <h1>Selamat Datang di KursusKu!</h1>

    <p>Nama mahasiswa:
        <?php echo htmlspecialchars($nama); ?>
    </p>

    <p>Mata kuliah:
        <?php echo htmlspecialchars($mataKuliah); ?>
    </p>
</body>
</html>
