<?php
echo '<pre>';

function mascararCpf($cpf) {
    $limpo = preg_replace('/\D/', '', $cpf); // remove pontos e traços
    $tamanho = strlen($limpo);

    if ($tamanho <= 4) {
        return $limpo;
    }

    $ultimos4 = substr($limpo, -4);
    return str_repeat('*', $tamanho - 4) . $ultimos4;
}

echo "CPF mascarado: " . mascararCpf("123.456.789-10") . "\n";
echo "CPF mascarado: " . mascararCpf("98765432100") . "\n";
echo '</pre>';
