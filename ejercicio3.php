<?php
function caracteresRepetidos($cadena) {
    $repetido = array();
    $largo = strlen($cadena);
    for ($i = 0; $i < $largo; $i++) {
        $caracter = $cadena[$i];
        if (array_key_exists($caracter, $repetido)) {
            $repetido[$caracter]++;
        } else {
            $repetido[$caracter] = 1;
        }
    }
    return $repetido;
}

$cadena = "ola pero no hola de saludo sino de mar";
$resultado = caracteresRepetidos($cadena);
print_r($resultado);
?>
