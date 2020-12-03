<?php
// Funções para Números

/* 

- Função number_format
- Função round
- Função ceil
- Função floor
- Função rand


*/


// Função number_format
$preco = 1234.56;
$novoPreco = number_format($preco, 2, ",", ".");

echo "O valor é <i>$preco</i>, formatado com a função fica <b>R$ $novoPreco</b>.";
echo "<hr>";

// Função round
$valor = 5.86;
$novoValor = round($valor);

echo "O valor é <i>$valor</i>, com a função de arrendondamento padrão é <b>$novoValor</b>.";
echo "<hr>";


// Função ceil
$valor1 = 7.46;
$novoValor1 = ceil($valor1);

echo "O valor é <i>$valor1</i>, com a função de arrendondamento para cima é <b>$novoValor1</b>.";
echo "<hr>";



// Função floor
$valor2 = 9.99;
$novoValor2 = floor($valor2);

echo "O valor é <i>$valor2</i>, com a função de arrendondamento para baixo é <b>$novoValor2</b>.";
echo "<hr>";


// Função rand
$valor3 = rand(1, 20);

echo "O valor é sorteado de <i>1</i> a <i>20</i> pela função foi <b>$valor3</b>.";
echo "<hr>";