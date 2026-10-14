
<?php
function tampilkanJudul($judul)
{
    echo "<h1>" . htmlspecialchars($judul) . "</h1>";
}

function tampilkanPesan($pesan)
{
    echo "<p>" . htmlspecialchars($pesan) . "</p>";
}

function hitungTotalKursus($harga, $jumlah)
{
    return $harga * $jumlah;
}

tampilkanJudul("KursusKu");
tampilkanPesan("Latihan prosedur dan fungsi PHP.");

$harga = 150000;
$jumlah = 3;
$total = hitungTotalKursus($harga, $jumlah);

echo "<p>Harga satu kursus: Rp " . number_format($harga, 0, ',', '.') . "</p>";
echo "<p>Jumlah kursus: " . $jumlah . "</p>";
echo "<p>Total biaya: Rp " . number_format($total, 0, ',', '.') . "</p>";
?>
