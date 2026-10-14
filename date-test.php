
<?php
date_default_timezone_set("Asia/Jakarta");

echo "<h1>Latihan Tanggal dan Waktu PHP</h1>";

echo "<p>Tanggal: " . date("d-m-Y") . "</p>";
echo "<p>Waktu: " . date("H:i:s") . "</p>";
echo "<p>Hari: " . date("l") . "</p>";
echo "<p>Tahun: " . date("Y") . "</p>";

$tanggal = date("d-m-Y");
$waktu = date("H:i");

echo "<h2>Informasi Saat Ini</h2>";
echo "<p>Tanggal dan waktu: " . $tanggal . " " . $waktu . "</p>";
?>
