<?php
echo '<pre>';

function estatisticasNumericas($numeros) {
    $soma = array_sum($numeros);
    $media = $soma / count($numeros);

    $ordenado = $numeros;
    sort($ordenado);
    $qtd = count($ordenado);
    if ($qtd % 2 == 0) {
        $mediana = ($ordenado[$qtd / 2 - 1] + $ordenado[$qtd / 2]) / 2;
    } else {
        $mediana = $ordenado[floor($qtd / 2)];
    }

    $pares = 0;
    $impares = 0;
    foreach ($numeros as $num) {
        if ($num % 2 == 0) $pares++;
        else $impares++;
    }

    return [
        'soma'    => $soma,
        'media'   => $media,
        'maior'   => max($numeros),
        'menor'   => min($numeros),
        'mediana' => $mediana,
        'pares'   => $pares,
        'impares' => $impares,
    ];
}

print_r(estatisticasNumericas([5, 12, 8, 3, 20, 7]));
echo '</pre>';
