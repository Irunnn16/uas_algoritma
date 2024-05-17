<?php
// saya menggunakan metode Array supaya dalam satu variabel bisa berisi lebih dari satu
$belanjaan = array(
    "baju" => 350000,   // Harga baju
    "sepeda" => 2200000, // Harga sepeda
    "laptop" => 9800000, // Harga laptop
    "mouse" => 650000,    // Harga mouse
);

// Menghitung total pengeluaran dengan cara ditotal semuanya
$total_pengeluaran = array_sum($belanjaan);

// Menampilkan hasil
echo "Total pengeluaran saya hari ini sebesar = Rp. $total_pengeluaran";
?>
