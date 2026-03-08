<?php
date_default_timezone_set("Asia/Jakarta");

function salam($nama = "Endmin")
{
    $jam = date("H");
    if ($jam > 7 && $jam < 11) {
        $waktu = "Pagi";
    } elseif ($jam >= 11 && $jam < 15) {
        $waktu = "Siang";
    } elseif ($jam >= 15 && $jam < 18) {
        $waktu = "Sore";
    } else {
        $waktu = "Malam";
    }
    return "Selamat $waktu, $nama!!";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Function</title>
</head>

<body>
    <h1><?= salam(); ?></h1>
    <h1><?= salam("Achmad Rifaih"); ?></h1>
</body>

</html>