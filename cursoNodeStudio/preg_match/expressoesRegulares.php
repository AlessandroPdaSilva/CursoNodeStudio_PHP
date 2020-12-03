<?php

/*

^ inicio da expressao
$ final da expressao

[] conjunto de caracteres
{} ocorrencia {0,1} , {0,} , +{1,}

/^[a-z0-9.\-\_]+@[a-z0-9.\-\_]+\.(com|br|com.br|net)$/i     -> email

/^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/i       -> data
*/

$frase = "20/12/2000";
$padrao = "/^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/i";

if( preg_match($padrao,$frase) ){
    echo "valido";
    echo "<hr>";
    echo $frase;
}else{
    echo "invalido";
}