<?php
$nota1 = 8;
$nota2 = 6;
$nota3 = 4;

$media = ($nota1 + $nota2 + $nota3) / 3;

echo "Média: " . $media . "<br>";

if ($media >= 7) {
    echo "Aprovado";
} elseif ($media >= 5 && $media < 7) {
    echo "Recuperação";
} else {
    echo "Reprovado";
}
?>