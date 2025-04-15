<?php
function calcularMedia($n1, $n2, $n3) {
    return ($n1 + $n2 + $n3) / 3;
}

$mediaFinal = calcularMedia(9, 7.5, 6);
echo "A média é: " . $mediaFinal;
?>