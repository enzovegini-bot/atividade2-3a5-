<?php
echo '<pre>';

function contarPalavras($texto) {
    return count(preg_split('/\s+/', trim($texto)));
}

function contarFrases($texto) {
    $frases = preg_split('/[.!?]+/', $texto, -1, PREG_SPLIT_NO_EMPTY);
    return count($frases);
}

function obterPalavras($texto) {
    $limpo = preg_replace('/[^\p{L}\s]/u', '', $texto);
    return preg_split('/\s+/', trim($limpo));
}

function palavraMaisLonga($palavras) {
    usort($palavras, fn($a, $b) => strlen($b) - strlen($a));
    return $palavras[0];
}

function palavraMaisCurta($palavras) {
    usort($palavras, fn($a, $b) => strlen($a) - strlen($b));
    return $palavras[0];
}

function palavrasFrequentes($palavras, $limite = 5) {
    $contagem = array_count_values(array_map('strtolower', $palavras));
    arsort($contagem);
    return array_slice($contagem, 0, $limite, true);
}

function removerEspacosDuplicados($texto) {
    return preg_replace('/\s+/', ' ', trim($texto));
}

function processarTexto($texto) {
    $palavras = obterPalavras($texto);
    $contagem = array_count_values(array_map('strtolower', $palavras));
    $repetidas = count(array_filter($contagem, fn($qtd) => $qtd > 1));

    return [
        'caracteres'              => strlen($texto),
        'palavras'                => contarPalavras($texto),
        'frases'                  => contarFrases($texto),
        'palavra_mais_longa'      => palavraMaisLonga($palavras),
        'palavra_mais_curta'      => palavraMaisCurta($palavras),
        'palavras_repetidas'      => $repetidas,
        'top_5_frequentes'        => palavrasFrequentes($palavras),
        'sem_espacos_duplicados'  => removerEspacosDuplicados($texto),
        'formatado'               => ucwords(strtolower($texto)),
    ];
}

$texto = "chora agora ri depois";
print_r(processarTexto($texto));
echo '</pre>';
