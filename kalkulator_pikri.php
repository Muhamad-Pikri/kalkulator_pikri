<?php
function tambah($x, $y)
{
    return $x + $y;
}

function kurang($x, $y)
{
    return $x - $y;
}

function kali($x, $y)
{
    return $x * $y;
}

function bagi($x, $y)
{
    if ($y == 0) {
        return "Tidak bisa dibagi dengan nol";
    } else {
        return $x / $y;
    }
}

// Array 
$angka = [
    [10, 2],
    [500, 5],
    [250, 0],  // Contoh pembagian dengan nol
    [90, 3]
];

// Loop pasangan angka
foreach ($angka as $pasangan) {
    $x = $pasangan[0];
    $y = $pasangan[1];

    echo "Angka: $x dan $y<br>";
    echo "Penjumlahan: $x + $y = " . tambah($x, $y) . "<br>";
    echo "Pengurangan: $x - $y = " . kurang($x, $y) . "<br>";
    echo "Perkalian: $x * $y = " . kali($x, $y) . "<br>";
    echo "Pembagian: $x / $y = " . bagi($x, $y) . "<br><br>";
}
?>