<?php
// function untuk memeriksa apakah sebuah angka adalah bilangan prima dengan memnggunakan funtion "isprime"
function isprime($angka) {
    //  jika angka kurang dari atau sama dengan 1, maka bukan bilangan prima
    if ($angka <= 1) {
        return "Tidak, $angka bukan bilangan prima";
    }
    // memeriksa apakah angka akan habis di bagi oleh angka 1 dan dirinya sendiri
    for ($i = 2; $i <= sqrt($angka); $i++){
        if ($angka % $i == 0){
            return "Tidak, $angka bukan bilangan prima";
        }
    }
    // jika tidak sesuai dari kondisi di atas, maka merupakan bilangan prima
    return "benar, $angka merupakan bilangan prima";
}

//pemanggilan function
$angka = 19; // nilai yang ditanyakan
$result = isprime($angka);

echo $result
?>