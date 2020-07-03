<?php
$arraySigla = ['ES', 'MG', 'RJ', 'SP'];
$arrayEstado = ['São Paulo', 'Rio de Janeiro', 'Minas Gerais', 'Espírito Santo'];
$arraySiglaEstado = [];
sort($arraySigla);
sort($arrayEstado);
// preenche
foreach ($arraySigla as $key => $value) {
    $arraySiglaEstado[$value] = $arrayEstado[$key];
}
// imprime
$texto = "";
foreach ($arraySiglaEstado as $sigla => $estado) {
    $texto .= nl2br($sigla . "-" . $estado . PHP_EOL);
}
echo $texto;
?>
