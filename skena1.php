<?php
$nilai = 100;
if ($nilai > 100) {
   echo "Nilai $nilai = Nilai wajib di antara 0 - 100";
} else if ($nilai >= 90) {
    echo "Nilai $nilai = A";
} else if ($nilai >= 80) {
    echo "Niali $nilai = B";
} else if ($nilai >= 70) {
    echo "Nilai $nilai = C";
} else if ($nilai >= 0) {
    echo "Nilai $nilai = D";
} else {
    echo "Nilai $nilai = Nilai wajib di antara 0 - 100";
}
?>