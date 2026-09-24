<?php
echo '<pre>';

function calcularDesconto($valor) {
    if ($valor > 1000) {
        $percentual = 0.30;
    } elseif ($valor > 500) {
        $percentual = 0.20;
    } elseif ($valor > 100) {
        $percentual = 0.10;
    } else {
        $percentual = 0;
    }

    $desconto = $valor * $percentual;

    return [
        'valor_original' => $valor,
        'desconto'       => $desconto,
        'valor_final'    => $valor - $desconto,
    ];
}

print_r(calcularDesconto(1200));
print_r(calcularDesconto(300));
print_r(calcularDesconto(50));
echo '</pre>';
