<?php

$nilai = 90;
 
if ($nilai > 100) {
    echo "Nilai anda $nilai = Nilai wajib di antara 0 - 100";
}elseif ($nilai >= 90) {
    echo "Nilai anda $nilai = A";
} else if ($nilai >= 80){
    echo "Nilai anda $nilai = B ";
} else if ($nilai >= 70){
    echo "Nilai anda $nilai = C";
} else if ($nilai >= 0 ){
    echo "Nilai anda $nilai = D";
} else {
    echo "Nilai anda $nilai = Nilai wajib di antara 0 - 100";
}
?>
