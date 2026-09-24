<?php
echo '<pre>';

function calcularMedia($notas) {
    $media = array_sum($notas) / count($notas);

    if ($media >= 7) {
        $situacao = 'Aprovado';
    } elseif ($media >= 5) {
        $situacao = 'Recuperação';
    } else {
        $situacao = 'Reprovado';
    }

    return [
        'maior_nota' => max($notas),
        'menor_nota' => min($notas),
        'media'      => $media,
        'situacao'   => $situacao,
    ];
}

print_r(calcularMedia([8, 6, 9, 7]));
print_r(calcularMedia([3, 4, 5]));
echo '</pre>';
