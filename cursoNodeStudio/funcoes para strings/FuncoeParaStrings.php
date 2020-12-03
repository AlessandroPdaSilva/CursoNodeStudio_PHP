<?php

// Funções para Strings

/*
- Função strtoupper
- Função strtolower
- Função substr
- Função strpad
- Função str_repeat
- Função strlen
- Função str_replace
- Função strpos

*/




//Função strtoupper
$nome = "roodney moraes";
$novoNome = strtoupper($nome);

echo "Seu nome é <i>$nome</i> em maiusculo fica <b>$novoNome</b>.";
echo "<hr>";



//Função strtolower
$nome1 = "SABRINA PRADO";
$novoNome1 = strtolower($nome1);

echo "Seu nome é <i>$nome1</i> em minusculo fica <b>$novoNome1</b>.";
echo "<hr>";



// Função substr
$mensagem = "Olá Mundo!";
$novaMensagem = substr($mensagem, 5, 5);

echo "O texto apresentado é <i>$mensagem</i>, e o valor captura pela função é <b>$novaMensagem</b>.";
echo "<hr>";



// Função strpad
$objeto = "Mouse";
$novoObjeto = str_pad($objeto, 11, "*", STR_PAD_BOTH);//STR_PAD_LEFT ou STR_PAD_RIGHT

echo "o valor da variavel é <i>$objeto</i>, e o valor com a função fica <b>$novoObjeto</b>.";
echo "<hr>";



// Função str_repeat
$string = "Sucesso! ";
$novaString = str_repeat($string, 5);

echo "Repetindo uma variavel <i>$string</i> = <b>$novaString</b>.";
echo "<hr>";



// Função strlen
$mensagem1 = "Olá Mundo!";
$novaMensagem1 = strlen($mensagem1);

echo "O valor da variavel é <i>$mensagem1</i>, a quantidade de caracteres é <b>$novaMensagem1</b>.";
echo "<hr>";



// Função str_replace
$texto = "A seleção Argentina será campeã da copa do mundo de 2018.";
$novoTexto = str_replace("Argentina", "Brasileira", $texto);

echo "A mensagem original é <i>$texto</i>";
echo "<br>";
echo "A nova mensagem com a função é <b>$novoTexto</b>";
echo "<hr>";



// Função strpos
$texto1 = "A seleção Argentina será campeã da copa do mundo de 2018.";
$novoTexto1 = strpos($texto, "copa");

echo "A mensagem é = <i>$texto1</i> a palavra <u><b>copa</b></u> aparece na posição <b>$novoTexto1</b>.";
echo "<hr>";

?>