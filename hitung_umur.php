<?php
// Tahun Lahir
$tahunLahir = 2004;

// Tahun sekarang
$tahunSekarang = date("Y");

// Menghitung umur dalam abad
$umur = ($tahunSekarang - $tahunLahir) / 100;

// Menampilkan hasil dari atas
echo "Umur saya tahun ini adalah: $umur abad.";
?>
