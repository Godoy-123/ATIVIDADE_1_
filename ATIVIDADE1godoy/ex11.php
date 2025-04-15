<?php
function encontrarMaiorNumero($numeros) {
    $maior = $numeros[0];
    foreach ($numeros as $numero) {
        if ($numero > $maior) {
            $maior = $numero;
        }
    }
    return $maior;
}

$numeros = [15, 3, 28, 7, 42];
$maiorNumero = encontrarMaiorNumero($numeros);
echo "O maior número do array é: " . $maiorNumero;
?>