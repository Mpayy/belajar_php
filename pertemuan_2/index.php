<?php
// Pertemuan 2 PHP dasar
// Syntaks PHP

// Standar Output
// 1. echo, print = digunakan untuk mengecek pesan, isi variable dll
// 2. print_r = digunakan untuk mencetak isi array
echo "Achmad Rifaih";
print "Achmad Rifaih";
print_r("Achmad Rifaih");


// 3. var_dump = digunakan untuk mencetak atau mengecek isi variable dan menampilkan informasi mengenai variable tersebut
var_dump("Achmad Rifaih");


// Penulisan Sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP

// Variable dan Tipe Data
// Variable, namanya tidak boleh di awali dengan angka, tetapi boleh mengandung angka
$nama = "AchmadRifaih";
$umur = 26;

// interpolasi
echo "Halo, umur saya $umur";


// Operator
// Aritmatika + - * / %
$x = 10;
$y = 5;

echo $x + $y;


// Penggabung string / concatenation / concat
// .
$nama_depan = "Achmad";
$nama_belakang = "Rifaih";
echo $nama_depan . " " . $nama_belakang;

// Assigment = += -= *= /= %= .=
$x = 1;
$x += 5;
echo $x;

$nama = "Achmad";
$nama .= " ";
$nama .= "Rifaih";
echo $nama;

// Perbandingan < > <= >= == !=
var_dump(1 < 5); // ini akan memberitahu hasil perbandingannya true atau false

// Identitas
var_dump(1 === "1"); // juga mengecek tipe datanya

// Logika && || !
$x = 10;
var_dump($x < 20 && $x % 2 == 0);
// && harus keduanya benar
// || boleh hanya 1 yang benar
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <!-- PHP di dalam HTML -->
    <h1>Halo, Selamat Datang <?= "Achmad Rifaih" ?></h1>
    <p><?= "Ini adalah paragraf" ?></p>
    
    <!-- HTML di dalam PHP -->
    <?= "<h1>Halo, Selamat Datang Achmad Rifaih</h1>" ?>
    
    <!-- Variable -->
    <h1>Halo, Selamat Datang <?= $nama ?></h1>

</body>
</html>