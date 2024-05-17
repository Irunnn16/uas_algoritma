<?php
// Disini saya juga menggunakan Array :)
$nilai = array(
    "bahasa_indonesia" => 75,
    "matematika" => 70,
    "biologi" => 90,
    "kimia" => 80
);

// Menghitung rata-rata nilai menggunakan fungsi bawaan PHP
$jumlah_nilai = count($nilai);
$total_nilai = array_sum($nilai);
$ratarata = $total_nilai / $jumlah_nilai;

// Menampilkan hasilnya
echo "Rata-rata nilai ujian saya adalah: $ratarata <br>";
echo "<br>Dari pembelajaran Bahasa Indonesia, Matematika, Biologi, dan Kimia";
?>
