<?php
$siswa = [
    ["Alice", 85],
    ["Bob", 92],
    ["Charlie", 78],
    ["David", 64],
    ["Eva", 90]
];

$totalNilai = 0;
$jumlahSiswa = count($siswa);

foreach ($siswa as $data) {
    $totalNilai += $data[1];
}

$rataRata = $totalNilai / $jumlahSiswa;

echo "Daftar siswa dengan nilai di atas rata-rata ($rataRata):<br>";

foreach ($siswa as $data) {
    if ($data[1] > $rataRata) {
        echo $data[0] . " - " . $data[1] . "<br>";
    }
}
?>
