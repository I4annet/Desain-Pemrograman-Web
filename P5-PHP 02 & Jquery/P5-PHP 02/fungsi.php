<?php
function hitungUmur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}

echo "Umur saya adalah ". hitungUmur(2004, 2024) ."tahun";
// function perkenalan($nama, $salam="Assalamualaikum"){
//     echo $salam. ", ";
//     echo "Perkenalkan, nama saya ".$nama."<br/>";
//     echo "Senang berkenalan dengan anda<br/>";
// }

// // memanggil fungsi yang sudah dibuat
// perkenalan("Hamdana", "Hallo");

// echo "<hr>";

// $saya = "Ivan";
// $ucapanSalam = "Selamat pagi";

// // memanggil lagi
// perkenalan($saya);

