<?php
function sumPares($arraycito) {
    $suma = 0;
    foreach ($arraycito as $numero) {
        if ($numero % 2 == 0) {
            $suma += $numero;
        }
    }
    return $suma;
}

$arraycito = [2,4,9,8,5,6,3,1,7,12];
$sumaPares = sumPares($arraycito);
print_r($arraycito);
echo "la suma de los pares es: " . $sumaPares;
?>
