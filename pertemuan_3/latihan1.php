<?php
// Pengulangan
// 1. for
// 2. while
// 3. do.. while
// 4. foreach : penglangan khusus array

for ($i = 0; $i < 5; $i++) {
    echo "Hello World for!!<br>";
}

// while = cek dulu baru jalankan
$i = 0;
while ($i < 5) {
    echo "Hello World while!!<br>";
    $i++;
}

// do.. while = jalankan dulu 1 baru cek
$i = 0;
do {
    echo "Hello World do.. while!!<br>";
    $i++;
} while ($i < 5);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
    <style>
        .black {
            background-color: black;
        }

        .white {
            background-color: white;
        }
    </style>
</head>

<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php
        for ($a = 1; $a <= 5; $a++) {
            echo "<tr>";
            for ($b = 1; $b <= 5; $b++) {
                echo "<td>$a, $b</td>";
            };
            echo "</tr>";
        };
        ?>
        <?php for ($c = 1; $c <= 5; $c++) : ?>
            <tr>
                <?php for ($d = 1; $d <= 5; $d++) : ?>
                    <?php if (($c + $d) % 2 == 0) : ?>
                        <td class="black">
                        <?php else : ?>
                        <td class="white">
                            <?= "$c, $d"; ?>
                        <?php endif; ?>
                        </td>
                    <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>

</html>