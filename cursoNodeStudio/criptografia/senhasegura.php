<?php

$senha = '123456';
$senhaDb = '$2y$10$Yj/Ppg/d7s0U4bV4SkEAbO3o91035k9sYhzHD7fxjr5b3RQ5rCXMS';
$senhaCodif = password_hash($senha, PASSWORD_DEFAULT);
echo "senha : $senhaCodif";

if( password_verify($senha,$senhaDb) ){
    echo "<br>senha correta";
}else{
    echo "<br>senha incorreta";
}
