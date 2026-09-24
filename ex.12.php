<?php
echo '<pre>';

function analisarProdutos($produtos, $nomeBuscado) {

    $maisCaro = $produtos[0];
    $maisBarato = $produtos[0];
    $soma = 0;

    foreach ($produtos as $produto) {
        if ($produto['preco'] > $maisCaro['preco']) {
            $maisCaro = $produto;
        }
        if ($produto['preco'] < $maisBarato['preco']) {
            $maisBarato = $produto;
        }
        $soma += $produto['preco'];
    }

    $media = $soma / count($produtos);

    $produtoPesquisado = "Produto não encontrado.";
    foreach ($produtos as $produto) {
        if (strtolower($produto['nome']) == strtolower($nomeBuscado)) {
            $produtoPesquisado = $produto;
            break;
        }
    }

    return [
        'produto_mais_caro'   => $maisCaro,
        'produto_mais_barato' => $maisBarato,
        'media_precos'        => $media,
        'produto_pesquisado'  => $produtoPesquisado,
    ];
}


$produtos = [
    ['nome' => 'Arroz',  'preco' => 25.90],
    ['nome' => 'Feijão', 'preco' => 8.50],
    ['nome' => 'Carne',  'preco' => 45.00],
];

$nomeBuscado = 'Feijão';

$resultado = analisarProdutos($produtos, $nomeBuscado);
print_r($resultado);
echo '</pre>';
