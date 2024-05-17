<?php
// Saya Menggunakan Fungsi untuk mendapatkan jenis angka (genap atau ganjil)
function getJenisAngka($angka) {
    if ($angka % 2 == 0) {
        return "genap";
    } else {
        return "ganjil";
    }
}


$angka = 16; // Kalian bisa mengubah nilai ini sesuai keinginan


$jenis = getJenisAngka($angka);

// Menampilkan hasil
echo "Angka $angka merupakan sebuah angka $jenis";
?>
