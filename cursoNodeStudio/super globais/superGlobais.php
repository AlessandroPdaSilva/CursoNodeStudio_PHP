<?php
// Variaveis Superglobais

// Superglobais $GLOBALS
$x = 10;
$y = 15;

function soma (){  
    echo "A soma é <b>". ($GLOBALS['x'] + $GLOBALS['y']."</b>.");
}

soma();
echo "<hr>";

// Superglobais $_SERVER
echo "O nome do arquivo é --- <b>". $_SERVER['PHP_SELF']."</b><br>";
echo "O nome do servidor é --- <b>". $_SERVER['SERVER_NAME']."</b><br>";
echo "O nome do diretorio do arquivo no servidor é --- <b>". $_SERVER['SCRIPT_FILENAME']."</b><br>";
echo "O nome do diretorio raiz do arquivo em execução é --- <b>". $_SERVER['DOCUMENT_ROOT']."</b><br>";
echo "O número da porta do servidor web é <b>". $_SERVER['SERVER_PORT']."</b><br>";
echo "O número do IP do servidor do arquivo é <b>". $_SERVER['REMOTE_ADDR']."</b><br>";
echo "Informações do servidor é <b>". $_SERVER['SERVER_SOFTWARE']."</b><br>";
echo "<br>";
echo "<a href='https://secure.php.net/manual/pt_BR/reserved.variables.server.php' target='_blank'>Mais informações da variavel SERVER";



