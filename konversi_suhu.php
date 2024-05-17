<?php
// ini adalah Fungsi untuk mengkonversi suhu dari Celsius ke Kelvin
function konversiKeKelvin($suhuCelsius) {
    $suhuKelvin = $suhuCelsius + 273.15;
    return $suhuKelvin;
}

// Contoh pemanggilan fungsi
$suhuCelsius = 50; 
$suhuKelvin = konversiKeKelvin($suhuCelsius);

// Menampilkan hasil
echo "Konversi suhu dari: $suhuCelsius derajat Celsius ke Kelvin adalah = $suhuKelvin Kelvin";
?>
