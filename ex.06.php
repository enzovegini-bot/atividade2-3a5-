<?php
echo '<pre>';

function converterTemperatura($valor, $origem, $destino) {
    $origem = strtoupper($origem);
    $destino = strtoupper($destino);

    switch ($origem) {
        case 'C':
            $celsius = $valor;
            break;
        case 'F':
            $celsius = ($valor - 32) * 5 / 9;
            break;
        case 'K':
            $celsius = $valor - 273.15;
            break;
        default:
            return "Escala de origem inválida.";
    }

    switch ($destino) {
        case 'C':
            return $celsius;
        case 'F':
            return $celsius * 9 / 5 + 32;
        case 'K':
            return $celsius + 273.15;
        default:
            return "Escala de destino inválida.";
    }
}

echo "100C em F: " . converterTemperatura(100, 'C', 'F') . "\n";
echo "32F em C: " . converterTemperatura(32, 'F', 'C') . "\n";
echo "0C em K: " . converterTemperatura(0, 'C', 'K') . "\n";
echo '</pre>';
