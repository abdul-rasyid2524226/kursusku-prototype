
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
        hitungDiskon(350000, 10),
        315000
    ],
    [
        'Diskon 25 persen',
        hitungDiskon(400000, 25),
        300000
    ],
];

$passed = 0;
$totalTests = count($tests);

echo "<h1>Pengujian Kalkulator KursusKu</h1>";
echo "<table border='1' cellpadding='10'>";
echo "<tr><th>Pengujian</th><th>Expected</th><th>Actual</th><th>Status</th></tr>";

foreach ($tests as $test) {
    [$name, $actual, $expected] = $test;
    $success = ($actual == $expected);

    if ($success) {
        $passed++;
    }

    echo "<tr>";
    echo "<td>" . htmlspecialchars($name) . "</td>";
    echo "<td>" . htmlspecialchars((string) $expected) . "</td>";
    echo "<td>" . htmlspecialchars((string) $actual) . "</td>";
    echo "<td>" . ($success ? "PASS" : "FAIL") . "</td>";
    echo "</tr>";
}

echo "</table>";
echo "<h2>Hasil: $passed/$totalTests PASS</h2>";
?>
