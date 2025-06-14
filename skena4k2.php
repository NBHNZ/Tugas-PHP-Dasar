<?php
for ($i = 30; $i > 0; $i--) {
    if ($i > 1) {
        echo "Anak ayam turun $i, mati satu tinggal " . ($i - 1) . "<br>";
    } else {
        echo "Anak ayam turun 1, mati satu tinggal induknya";
    }
}
?>