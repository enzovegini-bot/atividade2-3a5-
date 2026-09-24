<?php

function contarMaiusculas($senha) {
    return preg_match_all('/[A-Z]/', $senha);
}

function contarMinusculas($senha) {
    return preg_match_all('/[a-z]/', $senha);
}

function contarNumeros($senha) {
    return preg_match_all('/[0-9]/', $senha);
}

function contarEspeciais($senha) {
    return preg_match_all('/[^A-Za-z0-9]/', $senha);
}

function classificarSenha($senha) {
    $criterios = 0;
    if (strlen($senha) >= 8)        $criterios++;
    if (contarMaiusculas($senha) > 0) $criterios++;
    if (contarMinusculas($senha) > 0) $criterios++;
    if (contarNumeros($senha) > 0)    $criterios++;
    if (contarEspeciais($senha) > 0)  $criterios++;

    if ($criterios <= 2) return 'Fraca';
    if ($criterios == 3) return 'Média';
    if ($criterios == 4) return 'Forte';
    return 'Muito Forte';
}

function analisarSenha($senha) {
    return [
        'maiusculas'       => contarMaiusculas($senha),
        'minusculas'       => contarMinusculas($senha),
        'numeros'          => contarNumeros($senha),
        'especiais'        => contarEspeciais($senha),
        'tamanho'          => strlen($senha),
        'nivel_seguranca'  => classificarSenha($senha),
    ];
}

print_r(analisarSenha('arthurlindo1234'));
print_r(analisarSenha('gomeslegal00'));
print_r(analisarSenha('professoricaro1234'));