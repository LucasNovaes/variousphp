<?php
// Soma múltiplos de 3 e 5 no intervalo entre 0 e 1000
for ($i = 0; $i < 1000; $i++) {
    if ($i % 3 == 0) {
        $multiplos[] = $i;
    }
    if ($i % 5 == 0) {
        $multiplos[] = $i;
    }
}
echo 'A soma dos números múltiplos de 3 ou 5 no intervalo entre 0 e 1000 é: ' . array_sum($multiplos);
?>