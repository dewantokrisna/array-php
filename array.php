<?php
// Array
// variabel yang dapat memiliki banyak nilai
// elemen pada array boleh memiliki tipe data yang berbeda

// Membuat array
// cara lama
$hari = array("Senin", "Selasa", "Rabu");
// cara baru
$bulan = ["Januari", "Februari", "Maret"];
$arr1 = [123, "tuliasan", false];

// Menampilkan Array
// var_dump() / print_r()
// var_dump($hari);
// echo "<br>";
// print_r($bulan);

// Menampilkan elemen pada array
// echo $arr1[0];
// echo "<br>";
// echo $bulan[2];

// Menambahkan elemen baru pada array
// var_dump($hari);
// $hari[] = "Kamis";
// $hari[] = "Jum'at";
// echo "<br>";
// var_dump($hari);

// Pengulangan pada array
// for atau foreach
$angka = [3, 2, 4, 5, 6, 7, 8, 9, 10];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }

        .clear {
            clear: both;
        }
    </style>
</head>

<body>
    <?php for ($i = 0; $i < count($angka); $i++) { ?>
        <div class="kotak"><?= $angka[$i]; ?></div>
    <?php } ?>

    <div class="clear"></div>

    <?php foreach ($angka as $a) { ?>
        <div class="kotak"><?= $a ?></div>
    <?php } ?>

    <div class="clear"></div>
    <?php foreach ($angka as $a) : ?>
        <div class="kotak"><?= $a ?></div>
    <?php endforeach; ?>




</body>

</html>