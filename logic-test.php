
<?php
$nilai = 85;
$kehadiran = 90;

echo "<h1>Latihan Logika PHP</h1>";

echo "<p>Nilai: $nilai</p>";
echo "<p>Kehadiran: $kehadiran%</p>";

if ($nilai >= 75 && $kehadiran >= 80) {
    echo "<p>Status: Lulus</p>";
} else {
    echo "<p>Status: Belum lulus</p>";
}

echo "<h2>Contoh Operator Logika</h2>";

$a = true;
$b = false;

echo "<p>AND: " . (($a && $b) ? "Benar" : "Salah") . "</p>";
echo "<p>OR: " . (($a || $b) ? "Benar" : "Salah") . "</p>";
echo "<p>NOT A: " . ((!$a) ? "Benar" : "Salah") . "</p>";
?>
