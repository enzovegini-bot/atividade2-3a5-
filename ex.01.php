<?php
echo '<pre>';

function calcularFormula($x, $y) {
    $soma = $x + $y;
    if ($soma == 0) {
        return "Não é possível realizar a divisão (soma igual a zero).";
    }
    return ($x ** 2 + $y ** 2) / $soma;
}

echo "calcularFormula(4, 6) = " . calcularFormula(4, 6) . "\n";
echo "calcularFormula(5, -5) = " . calcularFormula(5, -5) . "\n";
echo "calcularFormula(10, 2) = " . calcularFormula(10, 2) . "\n";
echo '</pre>';
