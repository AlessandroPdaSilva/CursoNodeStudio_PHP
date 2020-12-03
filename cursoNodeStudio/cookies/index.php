<?php

setcookie('nome','Joao',time()+3600);
setcookie('email','joao@test.com',time()+3600);
setcookie('ultima_pesquisa','tenis adidas');


echo $_COOKIE['nome']."<br>";
echo $_COOKIE['email']."<br>";
echo $_COOKIE['ultima_pesquisa']."<br>";