<?php
echo '<pre>';

function ordenarNomes($string) {
    $nomes = explode(',', $string);
    $nomes = array_map('trim', $nomes);
    sort($nomes);
    return $nomes;
}

print_r(ordenarNomes("Carlos, ana , Bruno,  Daniela"));
echo '</pre>';
