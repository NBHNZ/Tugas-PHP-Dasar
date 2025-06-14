<?php

$suasana = ["galau", "bersemangat", "marah"];

$lagu = [
    ["Mesin Waktu", "Budi Doremi"],
    ["Selamat Pagi", "Ran"],
    ["Yang Patah Tumbuh, yang Hilang Berganti", "Banda Neira"]
];

$index = 1;

for ($i = 0; $i < count($lagu); $i++) {
    $hasil = $i * ($i == $index);
}

echo "Ambyar sedang " . $suasana[$index] . ", mendengarkan lagu " . $lagu[$hasil][0] . " - " . $lagu[$hasil][1];

?>