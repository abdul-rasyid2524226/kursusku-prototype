
<?php
require_once 'helpers.php';

$tests = [
    [
        'Total satu kursus',
        hitungTotal(150000, 1),
        150000
    ],
    [
        'Total dua kursus',
        hitungTotal(150000, 2),
        300000
    ],
    [
        'Total tiga kursus',
        hitungTotal(250000, 3),
        750000
    ],
    [
        'Diskon 10 persen',
        hitungDiskon(150000, 10),
        135000
    ],
    [
        'Diskon 20 persen',
        hitungDiskon(200000, 20),
        160000
    ],
    [
        'Format Rupiah',
        formatRupiah(150000),
        'Rp150.000'
    ],
    [
        'Status kursus tersedia',
        statusKursus(true),
        'Tersedia'
    ],
    [
        'Status kursus penuh',
        statusKursus(false),
        'Penuh'
    ],
    [
        'Total kursus gratis',
        hitungTotal(0, 1),
        0
    ],
];

$passed = 0;
$total = count($tests);

echo "<h1>Pengujian Fungsi KursusKu</h1>";
echo "<table border='1' cellpadding='10'>";
echo "<tr><th>Pengujian</th><th>Hasil</th><th>Status</th></tr>";

foreach ($tests as $test) {
    $name = $test[0];
    $actual = $test[1];
    $expected = $test[2];
    $success = ($actual === $expected);

    if ($success) {
        $passed++;
    }

    echo "<tr>";
    echo "<td>" . htmlspecialchars($name) . "</td>";
    echo "<td>" . htmlspecialchars((string) $actual) . "</td>";
    echo "<td>" . ($success ? "PASS" : "FAIL") . "</td>";
    echo "</tr>";
}

echo "</table>";
echo "<h2>Hasil: $passed/$total PASS</h2>";
?>
