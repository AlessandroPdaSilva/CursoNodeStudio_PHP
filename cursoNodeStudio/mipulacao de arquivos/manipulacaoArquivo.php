<?php

/*

fopen()
fclose()
fwrite()
!feof()
fgets()
filessize()

 */

$arquivo = "arquivo.txt";
$conteudo = "conteudo de teste\n";

$arquivoAberto = fopen($arquivo, "r");




//************************ */

$tamanhoArquivo = filesize($arquivo);

while( !feof($arquivoAberto)){
    $linha = fgets($arquivoAberto,$tamanhoArquivo);
    echo "<br>".$linha;
}

fclose($arquivoAberto);