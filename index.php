<?php

$nama = "Muhammad Haikal Fajari";
$kuliah = "Universitas Gunadarma";
$jurusan = 'Teknik Informatika';
$hobi = ['Olahraga (renang,lari,futsal,silat)', 'Musik (gitar)', 'Game (valorant)'];

$tahun = date("Y", time());
$alasan = 'Alasan saya mengikuti stupen, lebih tepatnya pada mitra gits dengan track fullsatck adalah karena saya ingin belajar framework dari PHP yaitu laravel. Karena sebelumnya saya hanya belajar Front-end yaitu ReactJS';

?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tugas 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>


    <nav class="navbar bg-primary">
        <div class="container-fluid justify-content-center">
            <h1 class="fw-3">TUGAS 1 || Gits.id</h1>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <h3>Nama : <?= $nama; ?></h3>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h3>Kampus : <?= $kuliah; ?></h3>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h3>Jurusan : <?= $jurusan; ?></h3>
            </div>
        </div>
        <div class="row">
            <div class="col d-flex">
                <h3>Hobi : </h3>
                <ul>
                    <?php foreach ($hobi as $value) : ?>
                        <li>
                            <h4> <?= $value; ?></h4>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <hr>
            <h3 class="text-center text-danger">Alasan Mengikuti Program Ini</h3>
            <p class="my-3"><?= $alasan; ?></p>
        </div>
    </div>

    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 mt-4 border-top bg-primary">
        <div class="col d-flex align-items-center justify-content-center">
            <span class="text-muted">© <?= $tahun; ?> Haikal, Inc</span>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>