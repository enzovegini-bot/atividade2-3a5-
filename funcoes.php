<?php

function calcularImc($peso, $altura) {
    return $peso / ($altura ** 2);
}

function validarEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

function gerarSenhaAleatoria($qtd = 8) {
    $caracteres = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%';
    $senha = '';
    for ($i = 0; $i < $qtd; $i++) {
        $senha .= $caracteres[random_int(0, strlen($caracteres) - 1)];
    }
    return $senha;
}

function contarVogais($texto) {
    $qtd = 0;
    foreach (str_split(strtolower($texto)) as $letra) {
        if (in_array($letra, ['a', 'e', 'i', 'o', 'u'])) $qtd++;
    }
    return $qtd;
}

function inverterTexto($texto) {
    return strrev($texto);
}

function calcularIdade($dataNascimento) {
    $nascimento = new DateTime($dataNascimento);
    $hoje = new DateTime();
    return $nascimento->diff($hoje)->y;
}

function converterMoeda($valor, $cotacao) {
    return $valor * $cotacao;
}

function formatarTelefone($numero) {
    $limpo = preg_replace('/\D/', '', $numero);
    if (strlen($limpo) == 11) {
        return preg_replace('/(\d{2})(\d{5})(\d{4})/', '($1) $2-$3', $limpo);
    } elseif (strlen($limpo) == 10) {
        return preg_replace('/(\d{2})(\d{4})(\d{4})/', '($1) $2-$3', $limpo);
    }
    return $numero;
}

function gerarSaudacao() {
    $hora = (int) date('H');
    if ($hora < 12) return 'Bom dia';
    if ($hora < 18) return 'Boa tarde';
    return 'Boa noite';
}

function validarSenhaForte($senha) {
    $temMaiuscula = preg_match('/[A-Z]/', $senha);
    $temMinuscula = preg_match('/[a-z]/', $senha);
    $temNumero    = preg_match('/[0-9]/', $senha);
    $temEspecial  = preg_match('/[^A-Za-z0-9]/', $senha);
    $tamanhoOk    = strlen($senha) >= 8;

    return $temMaiuscula && $temMinuscula && $temNumero && $temEspecial && $tamanhoOk;
}
