<?php

function tambah($nilai1, $niali2)
{
    echo $nilai1 + $niali2;
}

tambah(1, 2);
echo "<br>";

function hitungUmur($tahunLahir)
{
    $tahunSekarang = 2024;
    
    $hasil = $tahunSekarang - $tahunLahir;
    echo $hasil;
}

hitungUmur(1933);
echo "<br>";

function hitungUsia($usiaLahir, $usiaSekarang = 2024)
{
    echo $usiaSekarang - $usiaLahir;
}

hitungUsia(1920);