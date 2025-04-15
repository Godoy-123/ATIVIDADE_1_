<?php
function isPrimo($numero) {
    if ($numero <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }
    return true;
}

echo "2 é primo? " . (isPrimo(2) ? "Sim" : "Não") . "<br>";
echo "10 é primo? " . (isPrimo(10) ? "Sim" : "Não") . "<br>";
echo "17 é primo? " . (isPrimo(17) ? "Sim" : "Não") . "<br>";
echo "1 é primo? " . (isPrimo(1) ? "Sim" : "Não") . "<br>";
?>