<?php
echo '<pre>';


function criptografarMensagem($texto, $deslocamento = 3) {
    $resultado = '';
    for ($i = 0; $i < strlen($texto); $i++) {
        $char = $texto[$i];
        if (ctype_alpha($char)) {
            $base = ctype_upper($char) ? 65 : 97;
            $codigo = (ord($char) - $base + $deslocamento) % 26;
            $resultado .= chr($codigo + $base);
        } else {
            $resultado .= $char;
        }
    }
    return $resultado;
}

function descriptografarMensagem($texto, $deslocamento = 3) {
    return criptografarMensagem($texto, 26 - $deslocamento);
}

// Teste
$mensagemOriginal = "Ola Mundo";
$cifrada = criptografarMensagem($mensagemOriginal);
$decifrada = descriptografarMensagem($cifrada);

echo "Original: $mensagemOriginal\n";
echo "Cifrada: $cifrada\n";
echo "Decifrada: $decifrada\n";
echo '</pre>';
