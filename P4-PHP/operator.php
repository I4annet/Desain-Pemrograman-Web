<?php
    $a = 10;
    $b = 5;

    $hasilTambah = $a + $b;
    $hasilKurang = $a - $b;
    $hasilKali = $a * $b;
    $hasilBagi = $a / $b;
    $sisaBagi = $a % $b;
    $pangkat = $a ** $b;

    echo("Jumlah hasil tambah: $hasilTambah <br>");
    echo("Jumlah hasil kurang: $hasilKurang <br>");
    echo("Jumlah hasil kali: $hasilKali <br>");
    echo("Jumlah hasil Bagi: $hasilBagi <br>");
    echo("  Sisa Bagi : $sisaBagi <br>");
    echo(" Hasil Pangkat: $pangkat <br>");

    $hasilSama = $a == $b;
    $hasilTidakSama = $a != $b;
    $hasilLebihKecil = $a < $b;
    $hasilLebihBesar = $a > $b;
    $hasilLebihKecilSama = $a <= $b;
    $hasilLebihBesarSama = $a >= $b;

    echo("Hasil sama: $hasilSama <br>");
    echo("Hasil tidak sama: $hasilTidakSama <br>");
    echo("Hasil lebih kecil: $hasilLebihKecil <br>");
    echo("Hasil lebih besar: $hasilLebihBesar <br>");
    echo("hasil lebih kecil sama: $hasilLebihKecilSama <br>");
    echo("hasil lebih besar sama: $hasilLebihBesarSama <br>");

    $hasilAnd = $a && $b;
    $hasilOr = $a || $b;
    $hasilNotA = !$a;
    $hasilNotB = !$b;

    echo("Hasil And: $hasilAnd <br>");
    echo("Hasil Or: $hasilOr <br>");
    echo("Hasil bukan A: $hasilNotA <br>");
    echo("Hasil bukan B: $hasilNotB <br>");

    $PenugasanPenjumlahan = $a += $b;
    $PenugasanPengurangan = $a -= $b;
    $PenugasanPerkalian = $a *= $b;
    $PenugasanPembagian = $a /= $b;
    $PenugasanSisaBagi = $a %= $b;
    
    echo("Hasil Penugasan Penjumlahan: $PenugasanPenjumlahan <br>");
    echo("Hasil Penugasan Pengurangan: $PenugasanPengurangan <br>");
    echo("Hasil Penugasan Perkalian: $PenugasanPerkalian <br>");
    echo("Hasil Penugasan Pembagian: $PenugasanPembagian <br>");
    echo("Hasil Sisa Bagi: $PenugasanSisaBagi <br>");

    $hasilIdentik = $a === $b;
    $hasilTidakIdentik = $a !== $b;

    echo("Hasil Identik: $hasilIdentik <br>");
    echo("Hasil Tidak Identik: $hasilTidakIdentik <br>");
?>

