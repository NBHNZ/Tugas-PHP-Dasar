<?php

$jam = "17:25";
if ($jam >= "00:00" && $jam < "04:00"){
    echo"$jam = Dini hari";
}else if ($jam >= "04:00" && $jam < "10;00"){
    echo"$jam = Pagi";
}else if ($jam >= "10:00" && $jam < "15:00"){
    echo"$jam = Siang";
}else if ($jam >= "15:00" && $jam < "17:30"){
    echo"$jam = Sore";
}else if ($jam >= "17:30" && $jam < "18:30"){
    echo "$jam = Petang";
}else if ($jam >= "18:30" && $jam < "24:00"){
    echo "$jam = Malam";
}else{
        echo "$jam = Dunia lain";
    }


?>