<?php
echo '<pre>';

function calcularSubtotais($produtos) {
    foreach ($produtos as &$produto) {
        $produto['subtotal'] = $produto['quantidade'] * $produto['valor_unitario'];
    }
    unset($produto);
    return $produtos;
}

function calcularTotal($produtos) {
    $total = 0;
    foreach ($produtos as $produto) {
        $total += $produto['subtotal'];
    }
    return $total;
}

function calcularDesconto($total) {
    if ($total > 1000) return $total * 0.15;
    if ($total > 500)  return $total * 0.10;
    return 0;
}

function calcularFrete($total) {
    if ($total > 800) return 0;
    if ($total > 300) return 20;
    return 35;
}

function produtoMaisCaro($produtos) {
    $maisCaro = $produtos[0];
    foreach ($produtos as $produto) {
        if ($produto['valor_unitario'] > $maisCaro['valor_unitario']) {
            $maisCaro = $produto;
        }
    }
    return $maisCaro['nome'];
}

function produtoMaiorSubtotal($produtos) {
    $maior = $produtos[0];
    foreach ($produtos as $produto) {
        if ($produto['subtotal'] > $maior['subtotal']) {
            $maior = $produto;
        }
    }
    return $maior['nome'];
}

function processarPedido($produtos) {
    $produtos = calcularSubtotais($produtos);
    $totalBruto = calcularTotal($produtos);
    $desconto = calcularDesconto($totalBruto);
    $totalComDesconto = $totalBruto - $desconto;
    $frete = calcularFrete($totalComDesconto);

    $qtdItens = 0;
    $subtotais = [];
    foreach ($produtos as $produto) {
        $qtdItens += $produto['quantidade'];
        $subtotais[$produto['nome']] = $produto['subtotal'];
    }

    return [
        'qtd_produtos_diferentes' => count($produtos),
        'qtd_total_itens'         => $qtdItens,
        'produto_mais_caro'       => produtoMaisCaro($produtos),
        'produto_maior_subtotal'  => produtoMaiorSubtotal($produtos),
        'subtotais'               => $subtotais,
        'desconto'                => $desconto,
        'frete'                   => $frete,
        'valor_final'             => $totalComDesconto + $frete,
    ];
}

$pedido = [
    ['nome' => 'Notebook', 'quantidade' => 1, 'valor_unitario' => 3200.00],
    ['nome' => 'Mouse',    'quantidade' => 2, 'valor_unitario' => 50.00],
    ['nome' => 'Teclado',  'quantidade' => 1, 'valor_unitario' => 150.00],
];

print_r(processarPedido($pedido));
echo '</pre>';
