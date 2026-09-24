<?php
echo '<pre>';

function gerarSenha($qtd) {
    $maiusculas = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $minusculas = 'abcdefghijklmnopqrstuvwxyz';
    $numeros    = '0123456789';
    $especiais  = '!@#$%&*';
    $todos = $maiusculas . $minusculas . $numeros . $especiais;

    $senha = '';
    for ($i = 0; $i < $qtd; $i++) {
        $senha .= $todos[random_int(0, strlen($todos) - 1)];
    }
    return $senha;
}


echo "Senha (8 caracteres): " . gerarSenha(8) . "\n";
echo "Senha (12 caracteres): " . gerarSenha(12) . "\n";
echo '</pre>';
