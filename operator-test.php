
<?php
$a = 10;
$b = 3;

echo "<h1>Latihan Operator PHP</h1>";

echo "<h2>Operator Aritmatika</h2>";
echo "<p>Penjumlahan: " . ($a + $b) . "</p>";
echo "<p>Pengurangan: " . ($a - $b) . "</p>";
echo "<p>Perkalian: " . ($a * $b) . "</p>";
echo "<p>Pembagian: " . ($a / $b) . "</p>";
echo "<p>Sisa bagi: " . ($a % $b) . "</p>";

echo "<h2>Operator Perbandingan</h2>";
echo "<p>10 lebih besar dari 3: ";
echo ($a > $b) ? "Benar" : "Salah";
echo "</p>";

echo "<h2>Operator Logika</h2>";
$x = true;
$y = false;

echo "<p>AND: " . (($x && $y) ? "Benar" : "Salah") . "</p>";
echo "<p>OR: " . (($x || $y) ? "Benar" : "Salah") . "</p>";
?>
