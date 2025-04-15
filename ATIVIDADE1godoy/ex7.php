<?php
$numeroFixo = 7;
$contador = 1;

echo "Tabuada do " . $numeroFixo . ":<br>";

while ($contador <= 10) {
    $resultado = $numeroFixo * $contador;
    echo $numeroFixo . " x " . $contador . " = " . $resultado . "<br>";
    $contador++;
}
?>