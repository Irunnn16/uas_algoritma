<?php
// Nilai yang ingin dicek
$nilai = 95; 

if ($nilai >= 0 && $nilai <= 40) {
    $grade = "E";
} elseif ($nilai >= 41 && $nilai <= 50) {
    $grade = "D";
} elseif ($nilai >= 51 && $nilai <= 70) {
    $grade = "C";
} elseif ($nilai >= 71 && $nilai <= 85) {
    $grade = "B";
} elseif ($nilai >= 86 && $nilai <= 100) {
    $grade = "A";
} else {
    $grade = "Tidak valid"; 
}

// Menampilkan hasil
echo "Grade nilai dari $nilai adalah $grade";
?>
