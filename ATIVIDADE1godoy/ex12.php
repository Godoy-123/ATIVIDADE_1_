<?php
function contarPares($numeros) {
    $contador = 0;
    foreach ($numeros as $numero) {
        if ($numero % 2 == 0) {
            $contador++;
        }
    }
    return $contador;
}

$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$quantidadePares = contarPares($numeros);
echo "A quantidade de números pares no array é: " . $quantidadePares;
?>