<?php
$hargaProduk = 120000;

$diskon = 20;

if ($hargaProduk > 100000) {
    $jumlahDiskon = ($diskon / 100) * $hargaProduk;

    $hargaSetelahDiskon = $hargaProduk - $jumlahDiskon;
    
    echo "Harga produk sebelum diskon: Rp " . number_format($hargaProduk, 0, ',', '.') . "<br>";
    echo "Diskon: Rp " . number_format($jumlahDiskon, 0, ',', '.') . " (" . $diskon . "%)<br>";
    echo "Harga yang harus dibayar setelah diskon: Rp " . number_format($hargaSetelahDiskon, 0, ',', '.');
} else { 
    echo "Tidak ada diskon. Harga yang harus dibayar: Rp " . number_format($hargaProduk, 0, ',', '.');
}
?>
