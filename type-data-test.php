
<?php
$nama = "Abdul Rasyid";
$umur = 20;
$nilai = 85.5;
$aktif = true;

echo "<h1>Latihan Tipe Data PHP</h1>";

echo "<p>Nama: " . $nama . "</p>";
echo "<p>Umur: " . $umur . "</p>";
echo "<p>Nilai: " . $nilai . "</p>";
echo "<p>Status aktif: " . ($aktif ? "Ya" : "Tidak") . "</p>";

echo "<h2>Jenis Data</h2>";
echo "<p>Nama: " . gettype($nama) . "</p>";
echo "<p>Umur: " . gettype($umur) . "</p>";
echo "<p>Nilai: " . gettype($nilai) . "</p>";
echo "<p>Aktif: " . gettype($aktif) . "</p>";
?>
