<?php
echo '<pre>';

function analisarTexto($texto) {
    $palavras = count(preg_split('/\s+/', trim($texto)));
    $caracteres = strlen($texto);

    $vogais = 0;
    $consoantes = 0;
    foreach (str_split(strtolower($texto)) as $letra) {
        if (preg_match('/[a-z]/', $letra)) {
            if (in_array($letra, ['a', 'e', 'i', 'o', 'u'])) {
                $vogais++;
            } else {
                $consoantes++;
            }
        }
    }

    return [
        'palavras'    => $palavras,
        'caracteres'  => $caracteres,
        'vogais'      => $vogais,
        'consoantes'  => $consoantes,
    ];
}

print_r(analisarTexto("minha vida é um filme"));
echo '</pre>';
