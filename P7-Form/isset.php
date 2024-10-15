<?php
// $umur;
// if (isset($umur) && $umur >= 18) {
//     echo "Anda sudah dewasa.";
// } else {
//     echo "Anda belum dewasa atau variabel 'umur' tidak ditemukan";
// }

$data = array("nama" => "Jane", "usia" => 25);
if (isset($data["nama"])) {
    echo "Nama: " . $data["nama"] . "<br>";
    echo "Usia: " . $data["usia"] . "<br>";
} else {
    echo "Variabel 'nama' tidak ditemukan dalam array" ;
}
 
?>