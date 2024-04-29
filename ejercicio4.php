<?php
function piramidon($lineas) {
    for ($i = 1; $i <= $lineas; $i++) {
        for ($j = 1; $j <= $lineas - $i; $j++) {
            echo " ";
        }
        for ($k = 1; $k <= 2 * $i - 1; $k++) {
            echo "*";
        }
        echo "\n";
    }
}

piramidon(7);
?>
