<?php
// l = hari
// d = tanggal
// M = bulan dengan mana
// m = bulan dengan angka
// Y = tahun 4 angka
// y = tahun 2 angka
// lebih banyaknya ada di php.net function date()

// date() untuk menampilkan tanggal dengan format tertentu
echo date("l, d-M-Y h:i:s");

// time() menampilkan detik yang berlalu sejank 1 january 1970
echo time();

// kalo mau menampilkan 100 hari ke depan itu hari apa tanggal bulan tahun berapa
echo date("l, d-M-Y", time() + 60 * 60 * 24 * 100);

// mktime() membuat sendiri detik
// mktime(0,0,0,0,0,0);
// jam, menit, detik, bulan, tanggal, tahun
// kalau mau cek dari tanggal lahir, saya lahir hari apa
echo date("l", mktime(0, 0, 0, 5, 21, 1999));

// strtotime
echo date("l", strtotime("21 may 1999"));
