<?php
// Jumlah total kursi di restoran
$totalKursi = 45;

// Jumlah kursi yang telah ditempati
$kursiTerisi = 28;

// Menghitung jumlah kursi yang masih kosong
$kursiKosong = $totalKursi - $kursiTerisi;

// Menghitung persentase kursi kosong
$persenKosong = ($kursiKosong / $totalKursi) * 100;

// Menampilkan hasil
echo "Persentase kursi yang masih kosong: " . number_format($persenKosong, 2) . "%";
?>
