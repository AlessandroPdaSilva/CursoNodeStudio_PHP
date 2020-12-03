<?php

/* 

- is_array($array) = Verifica se uma determinada variavel é um array

- in_array($valor, $array) = Verifica se um determinado valor existe em alguma posição do array

- array_keys($array) = Retorna um novo array com as chaves do array passado como parametro

- array_values($array) = Retorna um novo array com os valores do array passado como um parametro

- array_merge ($array1 , $array2) = Agrega o conteudo dos dois arrays

- array_pop ($array) = Exclui a última posição do array

- array_shift($array) = Exclui a primeira posição do array

- array_unshift($array, "valor1", "valor2") = Adiciona um ou mais elemento no inicio do array

- array_push($array, "valor1", "valor2") = Adiciona um ou mais elemento no fim do array

- array_combine($keys, $values) = Mescla os dois arrays do parametro

- array_sum("valor1", "valor2" e etc...) = Calcula a soma dos elementos de um array;

- explode("/", "20/01/2001") = transforma string em array

- implode("-", $array) = Transforma array em string



*/


// Funções para Array

//is_array($array) = Verifica se uma determinada variavel é um array
$nomes = array("Roodney", "Sabrina", "Lucimara", "Valdeci");
var_dump(is_array($nomes));

if(is_array($nomes)){
    echo "É um Array";
}else{
    echo "Não é um Array";
}
echo "<hr>";



//in_array($valor, $array) = Verifica se um determinado valor existe em alguma posição do array
$cores = array("Azul", "Verde", "Vermelho", "Rosa", "Amarelo");
var_dump(in_array("Preto", $cores));

if(in_array("Preto", $cores)){
    echo "Existe essa valor no Array";
}else{
    echo "Não existe esse valor no Array";
}
echo "<hr>";



//array_keys($array) = Retorna um novo array com as chaves do array passado como parametro
$familia = array("Mãe"=>"Cilene", "Pai"=>"Edson", "Namorada"=>"Sabrina");
print_r($familia);

echo "<br>";

$keys = array_keys($familia);
print_r($keys);
echo "<hr>";



//array_values($array) = Retorna um novo array com os valores do array passado como um parametro
$animais = array("Gato"=>"Billy", "Cachorro"=>"Babi", "Vaca"=>"Aninha");
print_r($animais);

echo "<br>";

$values = array_values($animais);
print_r($values);
echo "<hr>";



//array_merge ($array1 , $array2) = Agrega o conteudo dos dois arrays
$carros = array("Camaro", "Uno", "Gol");
$motos = array("Hornet", "Bis", "Cb500");

print_r($carros);
echo "<br>";
print_r($motos);
echo "<br>";

$veiculos = array_merge($carros, $motos);;
print_r($veiculos);
echo "<hr>";



//array_pop ($array) = Exclui a última posição do array
$objetos = array("Cadeira", "Caneta", "Televisão", "Sofá");
print_r($objetos);

echo "<br><br>";
echo "O último item retirado pelo array_pop foi <b>". array_pop($objetos)."</b>";
echo "<br>";

array_pop($objetos);
print_r($objetos);
echo "<br>";
echo "<hr>";



//array_shift($array) = Exclui a primeira posição do array
$perifericos = array("Mouse", "Teclado", "Monitor", "Impressora");
print_r($perifericos);

echo "<br><br>";
echo "O primeiro item retirado pelo array_shift foi <b>". array_shift($perifericos)."</b>";
echo "<br>";

array_shift($perifericos);
print_r($perifericos);
echo "<br>";
echo "<hr>";



//array_unshift($array, "valor1", "valor2") = Adiciona um ou mais elemento no inicio do array
$frutas = array("Uva", "Laranja", "Maçã");
print_r($frutas);
echo "<br><br>";

echo "Adicionando valores no começo com a função do array_unshift:";
array_unshift($frutas, "Manga", "Acerola", "Morango");
echo "<br>";
print_r($frutas);
echo "<hr>";



//array_push($array, "valor1", "valor2") = Adiciona um ou mais elemento no fim do array
$brinquedos = array("Carrinho", "Boneca", "Bola");
print_r($brinquedos);
echo "<br><br>";

echo "Adicionando valores no fim com a função do array_push:";
array_push($brinquedos, "Cards", "Mini-Game", "Vai-Vem");
echo "<br>";
print_r($brinquedos);
echo "<hr>";



//array_combine($keys, $values) = Mescla os dois arrays do parametro
$keys = array("Campeão", "Vice", "Terceiro");
$values = array("São Paulo", "Flamengo", "Cruzeiro");

print_r($keys);
echo "<br>";
print_r($values);

echo "<br><br>";
$times = array_combine($keys, $values);
print_r($times);
echo "<hr>";



//array_sum("valor1", "valor2" e etc...) = Calcula a soma dos elementos de um array;
$soma = array(7.8, 5.5, 10, 7.2);
$total = array_sum($soma);

echo "A soma dos valores dentro do array_sum é <b> $total </b>";
echo "<hr>";


//explode("/", "20/01/2001") = transforma string em array
$data = "21/04/2016";
$novaData = explode("/", $data);

echo $data;
echo "<br>";
print_r($novaData);
echo "<br><br>";


//Outro exemplo de explode("/", "20/01/2001")
$frase = "Meu nome não é johnny";
$fraseArray = explode(" ", $frase);

echo $frase;
echo "<br>";
print_r($fraseArray);
echo "<hr>";




//implode("-", $array) = Transforma array em string
$bebidas = array("Cerveja", "Refrigerante", "Água", "Suco");
$bebidasString = implode(", ", $bebidas);

print_r($bebidas);
echo "<br><br>";
echo "Os valores do array em uma string: " .$bebidasString;



