<?php
$poinPemain = 550;

echo "Total skor pemain adalah: " . $poinPemain . "<br>";

$hadiahTambahan = ($poinPemain > 500) ? "YA" : "TIDAK";

echo "Apakah pemain mendapatkan hadiah tambahan? " . $hadiahTambahan;
?>
