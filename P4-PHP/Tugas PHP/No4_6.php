<?php

$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
sort($nilaiSiswa);

$nilaiYangDigunakan = array_slice($nilaiSiswa, 2, 6); 

$totalNilai = array_sum($nilaiYangDigunakan);

$rataRata = $totalNilai / count($nilaiYangDigunakan);

// Menampilkan hasil
echo "Total nilai setelah mengabaikan dua nilai tertinggi dan dua nilai terendah: $totalNilai<br>";
echo "Rata-rata nilai setelah penghapusan: $rataRata";
?>
