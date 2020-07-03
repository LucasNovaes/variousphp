<?php
// menor número inteiro divisível por 2, 3 e 10
function mdc($x, $y, $z) {
    $a = max($x, $y, $z);
    $b = min($x, $y, $z);
    if ($a % $b == 0) {
        return $b;
    } else {
        return mdc($b, ($a % $b));
    }
}

function mmc($x, $y, $z) {
    return (($x * $y * $z) / (mdc($x, $y, $z)));
}

echo 'O menor número inteiro divisível por 2, 3 e 10 é igual a ' .  mmc(2, 3, 10); // resposta: 30
?>
