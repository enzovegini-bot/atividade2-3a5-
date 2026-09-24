<?php
echo '<pre>';
require __DIR__ . '/funcoes.php';

echo "IMC (70kg, 1.75m): " . round(calcularImc(70, 1.75), 2) . "\n";
echo "E-mail válido? 'teste@email.com': " . (validarEmail('teste@email.com') ? 'Sim' : 'Não') . "\n";
echo "Senha gerada: " . gerarSenhaAleatoria(10) . "\n";
echo "Vogais em 'Programação': " . contarVogais('Programação') . "\n";
echo "Texto invertido 'PHP': " . inverterTexto('PHP') . "\n";
echo "Idade de quem nasceu em 1995-05-10: " . calcularIdade('1995-05-10') . " anos\n";
echo "100 USD em BRL (cotação 5.20): " . converterMoeda(100, 5.20) . "\n";
echo "Telefone formatado: " . formatarTelefone('11987654321') . "\n";
echo "Saudação atual: " . gerarSaudacao() . "\n";
echo "Senha forte 'Abc123!@'? " . (validarSenhaForte('Abc123!@') ? 'Sim' : 'Não') . "\n";
echo "Senha forte '12345'? " . (validarSenhaForte('12345') ? 'Sim' : 'Não') . "\n";
echo '</pre>';
 desafio.php
<?php
echo '<pre>';
