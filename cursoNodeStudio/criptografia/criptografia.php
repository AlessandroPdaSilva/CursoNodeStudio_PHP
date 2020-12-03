<?php

// criptografia
$senha = "joaninha123";
$senhaCrip = base64_encode($senha);
echo " senha : $senha <br>";
echo " senha criptografada : ".$senhaCrip."<br>";

// descriptografia
$senhaEncrip = base64_decode($senhaCrip);
echo "senha descriptografada : ".$senhaEncrip."<br>";

echo "<hr><br>";

// md5 e sha1

$senhaMd5 = md5($senha);
$senhaSha1 = sha1($senha);
echo " md5 : $senhaMd5 <br>";
echo " sha1 : $senhaSha1 <br>";