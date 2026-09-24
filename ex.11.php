<?php
echo '<pre>';

function formatarTexto($texto) {
    return [
        'maiusculas'   => strtoupper($texto),
        'minusculas'   => strtolower($texto),
        'capitalizado' => ucwords(strtolower($texto)),
        'caracteres'   => strlen($texto),
    ];
}

print_r(formatarTexto("relatorio MENSAL de Vendas"));
echo '</pre>';
