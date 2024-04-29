<?php
function arraycitoInvertido($arraycito) {
    return array_reverse($arraycito);
}

$arraycito = [5,2,7,8,9,6,3,1];
$invertedArray = arraycitoInvertido($arraycito);
print_r($invertedArray);
?>
