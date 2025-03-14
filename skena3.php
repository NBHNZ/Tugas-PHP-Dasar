<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Andi</title>
</head>
<body>
    <h1 style="text-align: center;">Jadwal Andi</h1>
        <li>15:30-15:45 = Pulang Sekolah</li>
        <li>15:45-15:55 = Mandi</li>
        <li>15:55-16:25 = Mengaji
        <li>16:25-16:30 = Membeli bumbu masak</li>
        <li>16:30-17:00 = Menghafalkan dialog</li>
        <li>17:00-17:30 = Mengechat Raya</li>
        <li>17:30-18:00 = Waktu luang</li>
        <li>18:00-18:15 = Sholat Maghrib</li>
        <li>18:15-18:30 = Makan Malam</li>
        <li>18:30-19:15 = Waktu Luang</li>
        <li>19:15-19:30 = Sholat Isya</li>
        <li>19:30-21.30 = Mengerjakan Tugas</li>
        <li>21:30-22:00 = Mengobrol bersama keluarga</li>
<br>

<?php
    $jam = "15:45";

    if ($jam < "15:30"){
        echo"Jam $jam = Tidak ada jadwal";
    }elseif ($jam <= "15:45"){
        echo"Jam $jam, tidak ada tugas sekolah, Andi pulang sekolah";
    }elseif ($jam <= "15:55"){
        echo"Jam $jam, tidak ada tugas sekolah, Andi mandi";
    }elseif ($jam <= "16:25"){
        echo"Jam $jam, tidak ada tugas sekolah, Andi mengaji";
    }elseif ($jam <= "16:30"){
        echo"Jam $jam, tidak ada tugas sekolah, Andi membeli bumbu masak";
    }elseif ($jam <= "17:00"){
        echo"Jam $jam, tidak ada tugas sekolah, Andi menghafalkan dialog";
    }elseif ($jam <= "17:30"){            
        echo"Jam $jam, tidak ada tugas sekolah, Andi mengechat Raya";
    }elseif ($jam <= "18:00"){
        echo"Jam $jam, tidak ada tugas sekolah, Andi waktu luang";
    }elseif ($jam <= "18:15"){
        echo"Jam $jam, tidak ada tugas sekolah, Andi sholat Maghrib";
    }elseif ($jam <= "18:30"){
        echo"Jam $jam, tidak ada tugas sekolah, Andi makan malam";
    }elseif ($jam <= "19:15"){
        echo"Jam $jam, tidak ada tugas sekolah, Andi waktu luang";
    }elseif ($jam <= "19:30"){
        echo"Jam $jam, tidak ada tugas sekolah, Andi sholat Isya";
    }elseif ($jam <= "21:30"){
        echo"Jam $jam, Ada tugas sekolah, Andi mengerjakan tugas";
    }elseif ($jam <= "22:00"){          
        echo "Jam $jam, tidak ada tugas sekolah, Andi mengobrol bersama keluarga";
    }elseif ($jam <= "04:00"){
        echo"Jam $jam, tidak ada tugas sekolah, Andi tidur";
    }else{
        echo"Jam $jam = Tidak ada jadwal";
    }
    ?>
<h2 style="text-align: center;">Pasangan :</h2>
<li style="text-align: center;">Muhammad Nabhan Zaki/22</li>
<li style="text-align: center;">Rafiendra Ezar Anargya/27</li>

</body>
</html>