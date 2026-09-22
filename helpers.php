<?php

function formatRupiah($angka)
{
    return "Rp" . number_format($angka, 0, ',', '.');
}

function hitungTotal($harga, $jumlah)
{
    return $harga * $jumlah;
}

function hitungDiskon($total, $persen)
{
    return $total - ($total * $persen / 100);
}

function statusKursus($tersedia)
{
    if ($tersedia) {
        return "Tersedia";
    }

    return "Penuh";
}

?>