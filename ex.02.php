<?php
echo '<pre>';

function inverterTexto($texto) {
    echo "Quantidade de caracteres: " . strlen($texto) . "\n";
    return strrev($texto);
}

echo "Texto invertido: " . inverterTexto("Programacao em PHP") . "\n";
echo '</pre>';

ex.03.php
<?php
echo '<pre>';
