<?php
$hari = array("Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu");
$tanggal = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15", "16", "17", "18", "19", "20", "21", "22", "23", "24", "25", "26", "27", "28", "29", "30", "31");
$bulan = array("Jan","Feb","Mar","Apr","Mei","Jun","Jul","Agu","Sep","Okt","Nov","Des");
$tahun = array("2024","2025","2026");

for ($i = 0; $i < count($hari); $i++) {
    if ($hari[$i] == "Senin") {
        echo $hari[$i] . "-";
        break;
    }
}

foreach ($tanggal as $t) {
    if ($t == "10") {
        echo $t . "-";
        break;
    }
}

$i = 0;
while ($i < count($bulan)) {
    if ($bulan[$i] == "Mar") {
        echo $bulan[$i] . "-";
        break;
    }
    $i++;
}

$tahun = array("2024", "2025", "2026");

$i = 0;
do {
    if ($tahun[$i] == "2025") {
        echo $tahun[$i];
        break;
    }
    $i++;
} while ($i < count($tahun));

?>
