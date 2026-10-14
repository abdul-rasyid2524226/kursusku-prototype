
<?php
$nama = "Abdul Rasyid";
$kursus = "Pemrograman Web III";

echo "<h1>Latihan String PHP</h1>";

echo "<p>Nama: " . $nama . "</p>";
echo "<p>Huruf besar: " . strtoupper($nama) . "</p>";
echo "<p>Huruf kecil: " . strtolower($nama) . "</p>";
echo "<p>Jumlah karakter nama: " . strlen($nama) . "</p>";
echo "<p>Jumlah kata nama: " . str_word_count($nama) . "</p>";

echo "<p>Mata kuliah: " . $kursus . "</p>";
echo "<p>Gabungan teks: " . $nama . " - " . $kursus . "</p>";
echo "<p>Penggantian teks: " .
    str_replace("Web III", "PHP", $kursus) . "</p>";
?>
