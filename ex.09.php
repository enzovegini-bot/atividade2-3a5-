<?php
echo '<pre>';

function ehPrimo($num) {
    if ($num < 2) return false;
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) return false;
    }
    return true;
}

function ehPerfeito($num) {
    if ($num < 1) return false;
    $soma = 0;
    for ($i = 1; $i < $num; $i++) {
        if ($num % $i == 0) $soma += $i;
    }
    return $soma == $num;
}

function analisarNumero($num) {
    return [
        'numero'   => $num,
        'paridade' => ($num % 2 == 0) ? 'Par' : 'Ímpar',
        'primo'    => ehPrimo($num) ? 'Primo' : 'Não primo',
        'perfeito' => ehPerfeito($num) ? 'Perfeito' : 'Não perfeito',
    ];
}


print_r(analisarNumero(28)); 
print_r(analisarNumero(17)); 
echo '</pre>';
