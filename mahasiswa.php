<?php
$mahasiswa = [["Dewanto", "A11.2014.08648", "Teknik Informatika", "dewanto.krisna@gmail.com"], ["Krisna", "A11.2014.08688", "Teknik Industri", "krisna@gmail.com"], ["Developer", "A11.2014.12345", "Teknik Kimia", "developer@gmail.com"]];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama : <?= $mhs[0]; ?></li>
            <li>NIM : <?= $mhs[1]; ?></li>
            <li>Jurusan : <?= $mhs[2]; ?></li>
            <li>Email : <?= $mhs[3]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>